<?php

namespace App\Http\Controllers;

use App\Http\Requests\RentCheckoutRequest;
use App\Models\booking;
use App\Models\Notification;
use App\Models\PropertyRent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

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

        //number of date between check in check out
        $interval = $start_date->diff($end_date)->days;

        $property = PropertyRent::find($id);
        return view('booking.step1', [
            'property' => $property,
            'check_in' => $start_date,
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
            'guest' => $get_data['guest'],
            'total_days' => $get_data['total_days']
        ]);
    }

    public function checkout(RentCheckoutRequest $request)
    {

        $cleanData = $request->validated();
        $data = $request->session()->pull('step1_data');

        $property = PropertyRent::find($data['property_id']);

        $data['check_in'] =  Carbon::parse($data['check_in'])->format('Y-m-d');
        $data['check_out'] =  Carbon::parse($data['check_out'])->format('Y-m-d');
        $data['user_id'] = auth()->user()->id;
        $data['booking_number'] = mt_rand(10000, 99999);
        $data['booking_price'] = $property->price * ($data['total_days'] / 30);
        $data['payment'] = $cleanData['payment_type'];


        if ($cleanData['payment_type'] === "no-payment") {
            $data['status'] = 'confirm';
            booking::create($data);

            //create noti for user
            Notification::create([
                'sender_id'=>$property->agent->id,
                'recipent_id'=>auth()->user()->id,
                'noti_type'=> 'renting-success'
            ]);

            //create noti for agent
            Notification::create([
                'sender_id'=>auth()->user()->id,
                'recipent_id' => $property->agent->id,
                'noti_type'=> 'renting-recive'
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
        $first_booking = $confirm_bookings[0] ?? null;
        $cover_img = $first_booking ? $cover_images[$first_booking->property->region] : '';

        return view('booking.booking-list', [
            'confirm_bookings' => $confirm_bookings,
            'cover_img' => $cover_img,
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
}
