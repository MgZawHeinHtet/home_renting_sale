<?php

namespace App\Http\Controllers;

use App\Http\Requests\RentCheckoutRequest;
use App\Mail\CancelMail;
use App\Mail\cancelMessageMail;
use App\Models\booking;
use App\Models\Notification;
use App\Models\PropertyRent;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Number;

class BookingController extends Controller
{
    public function check_avaliable_date(Request $request, PropertyRent $property)
    {

        Request()->validate([
            'check' => ['required'],
            'guest' => ['required']
        ]);
        $booking_dates = $property->booking;
        $dateToCheck = explode(' ', $request->check);
        $start_date = Carbon::parse($dateToCheck[0]);
        $end_date =  Carbon::parse($dateToCheck[2]);
        $interval = $start_date->diff($end_date)->days;
        if ($booking_dates->count()) {

            foreach ($booking_dates as $date) {
                $check_date_in = Carbon::parse($date->date_in);
                $check_date_out = Carbon::parse($date->date_out);


                if ($start_date->between($check_date_in, $check_date_out) || $end_date->between($check_date_in, $check_date_out)) {

                    return back()->with('error', 'Booked up for your Date');
                } else {

                    return back()->with('status', 'selected dates are aviable ✅')->with('total_days', round($interval))->withInput();
                }
            }
        } else {

            return back()->with('status', 'selected dates are aviable ✅')->with('total_days', round($interval))->withInput();
        }
    }

    public  function step1(Request $request, $id)
    {
        //check in checkout 
        $dateToCheck = explode(' ', $request->check);
        $start_date = Carbon::parse($dateToCheck[0]);
        $end_date =  Carbon::parse($dateToCheck[2]);
        $cancel_date = Carbon::parse($start_date)->subDays(7);

        //number of date between check in check out
        $interval = $start_date->diff($end_date)->days;

        $property = PropertyRent::find($id);
        return view('booking.step1', [
            'property' => $property,
            'check_in' => $start_date,
            'cancel_date'=>$cancel_date,
            'check_out' => $end_date,
            'guest' => $request->guest,
            'total_days' => $interval
        ]);
    }

    public function step2(Request $request, $id)
    {
        $request->validate([

            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'max:10', 'min:10']
        ]);

        $phone = $request->phone_head . '' . $request->phone;

        $step1_data = $request->except('_token', 'phone_head', 'phone');
        $step1_data['property_id'] = $id;
        $step1_data['phone'] = $phone;
        $request->session()->put('step1_data', $step1_data);

        return view('booking.step2', [
            'property' => PropertyRent::find($id),
            'check_in' => Carbon::parse($request->check_in),
            'check_out' => Carbon::parse($request->check_out),
            'guest' => $request->guest,
            'total_days' => $request->total_days
        ]);
    }

    public function step3(Request $request, $id)
    {

        $get_data =  $request->session()->pull('step1_data');
        $get_data['message'] = $request->message;

        $request->session()->put('step1_data', $get_data);

        return view('booking.step3', [
            'property' => PropertyRent::find($id),
            'check_in' => Carbon::parse($get_data['check_in']),
            'check_out' => Carbon::parse($get_data['check_out']),
            'cancel_date'=>Carbon::parse($get_data['check_in'])->subDays(7),
            'guest' => $get_data['guest'],
            'total_days' => $get_data['total_days']
        ]);
    }

    public function checkout(RentCheckoutRequest $request)
    {

        $cleanData = $request->validated();
        $data = $request->session()->pull('step1_data');

        $property = PropertyRent::find($data['property_id']);

        $cancel_date = Carbon::parse($data['check_in'])->subDays(7);
       

        $data['check_in'] =  Carbon::parse($data['check_in'])->format('Y-m-d');
        $data['check_out'] =  Carbon::parse($data['check_out'])->format('Y-m-d');
        $data['user_id'] = auth()->user()->id;
        $data['agent_id'] = $property->agent->id;
        $data['booking_number'] = mt_rand(10000, 99999);
        $data['booking_price'] = $property->price * ($data['total_days'] / 30);
        $data['payment'] = $cleanData['payment_type'];
        $data['cancellable_date'] = $cancel_date;



        if ($cleanData['payment_type'] === "no-payment") {
            $data['status'] = 'confirm';
            
            $booking = booking::create($data);

            //create noti for user
            Notification::create([
                'sender_id'=>$property->agent->id,
                'recipent_id'=>auth()->user()->id,
                'noti_type'=> 'renting-success',
                'related_url'=>"/booking/$booking->id/show"
            ]);

            //create noti for agent
            Notification::create([
                'sender_id'=>auth()->user()->id,
                'recipent_id' => $property->agent->id,
                'noti_type'=> 'renting-recive',
                'related_url'=> 'adminAgents/booking'
            ]);

            return redirect('/booking/success');
        }
    }

    public function booking_list()
    {
        $cover_images = [];
        $cover_images['yangon'] = asset('assets/yangon-bg.jpg');

        $cancel_bookings = auth()->user()?->bookings?->load('property')->where('status','cancel')->all();

        $confirm_bookings = auth()->user()?->bookings?->where('status', 'confirm')->all();
        $first_booking = $confirm_bookings[1] ?? null;

        return view('booking.booking-list', [
            'confirm_bookings' => $confirm_bookings,
            'first_booking' => $first_booking,
            'cancel_bookings'=>$cancel_bookings
        ]);
    }

    public function success(){
        return view('booking.booking-success');
    }

    public function show(Booking $booking){
        
        return view('booking.show',[
            'booking'=>$booking
        ]);
    }

    public function cancel_step1(booking $booking){
       
        return view('booking.cancel_step1',[
            'booking'=>$booking
        ]);
    }

    public function cancel_step2(booking $booking){

        $data = Request()->validate([
            'reason'=>['required']
        ]);


        return view('booking.cancel_step2',[
            'booking'=>$booking,
            'reason' => $data['reason']
        ]);
    }

    public function cancel(booking $booking){
        $reason = Request()->reason;
        
        //sending mail with reason

        $booking->status = 'cancel';

        $booking->update();

        $cleanData = [];

        $cleanData['email'] = auth()->user()->email;
        $cleanData['name'] = auth()->user()->name;
        $cleanData['message'] = $reason;


        Mail::to($booking->property->agent->email)->send(new cancelMessageMail($cleanData));

        Mail::to($booking->email)->send(new CancelMail($booking));

         //create noti for user
         Notification::create([
            'sender_id'=>$booking->property->agent->id,
            'recipent_id'=>auth()->user()->id,
            'noti_type'=> 'booking_cancel_success'
        ]);

        //create noti for agent
        Notification::create([
            'sender_id'=>auth()->user()->id,
            'recipent_id' => $booking->property->agent->id,
            'noti_type'=> 'cancel_booking'
        ]);


        return redirect("/booking/$booking->id/cancel/success");
    }

    public function cancel_success_show(booking $booking){
        return view('booking.cancel-success-show',[
            'booking' => $booking
        ]);
    }

    public function destory(booking $booking){
        $booking->delete();
        return back();
    }

    public function download(booking $booking){
       
        $pdf = Pdf::loadView('cash',['booking'=> $booking]);
        
        return $pdf->download('cash.pdf');
    }
}
