<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\CreditPackage;
use App\Models\CreditTranscation;
use App\Models\Subscribers;
use App\Models\User;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Adapters\Phpunit\Subscribers\Subscriber;
use PhpParser\Node\Expr\FuncCall;

class AgentDashboardController extends Controller
{
    public function index(){
        $date_arr = collect([]);
        $date = date('M d');
        $full_date_arrs = collect([]);
        $income_rent = null;
        $outcomes = null;
        $recent_bookings = booking::where('agent_id',auth()->user()->id)->latest()->take(5)->get();

        $total_income_sale = auth()->user()->propertySale()->where('isSold',true)->sum('price');

        $staff_rent = booking::where('agent_id',auth()->user()->id)->where('status','confirm');
        $amount_income_rent = $staff_rent->sum('booking_price');
        $number_of_rent = $staff_rent->count();

        for ($i = 0; $i < 7; $i++) {
            $date_arr->push(date('M d', strtotime("-{$i} days")));

            
            $full_date_arrs->push([
                'year' => date("Y", strtotime("-$i days")),
                'month' => date("m", strtotime("-$i days")),
                'day' => date("d", strtotime("-$i days")),
            ]);
        }
        

        foreach ($full_date_arrs->sortBy('day') as $full_date_arr) {

            $income_rent[] = booking::where('agent_id',auth()->user()->id)->whereYear('created_at', $full_date_arr['year'])
                ->whereMonth('created_at', $full_date_arr['month'])
                ->whereDay('created_at', $full_date_arr['day'])
                ->sum('booking_price');
        }

        foreach ($full_date_arrs->sortBy('day') as $full_date_arr) {

            $outcomes[] = CreditTranscation::where('user_id',auth()->user()->id)->whereYear('created_at', $full_date_arr['year'])
                ->whereMonth('created_at', $full_date_arr['month'])
                ->whereDay('created_at', $full_date_arr['day'])
                ->sum('transcation_price');
        }

       

        return view('agent_dashboard.index',[
            'labels' => $date_arr,
            'income_rent'=>$income_rent,
            'outcomes'=>$outcomes,
            'total_sale_properties'=>auth()->user()->propertySale->count(),
            'total_rent_properties'=>auth()->user()->propertyRent->count(),
            'total_income_sale' => $total_income_sale,
            'total_income_rent'=>$amount_income_rent,
            'number_rent'=>$number_of_rent,
            'recent_bookings'=>$recent_bookings
        ]);
    }

    public function postAdSale(){
        return view('agent_dashboard.post-ad-sale');
    }

    public function post_ad_index(){
        $posted_ad = auth()->user()->propertySale->count() + auth()->user()->propertyRent->count();
        $allowed_ad = auth()->user()->allowed_posts;
        return view('agent_dashboard.post-ad',[
            'posted_ad' => $posted_ad,
            'allowed_ad'=> $allowed_ad
        ]);
    }

    public function credit_index(){
        return view('agent_dashboard.credit-system');
    }

    public function credit_add(){
        $plans = CreditPackage::all();
        return view('agent_dashboard.credit_add',[
            'plans'=> $plans
        ]);
    }

    public function credit_record(){
        $transcations = auth()->user()->creditTranscation;
        
        return view('agent_dashboard.credit_record',[
            'transcations' => $transcations
        ]);
    }

    public function allowPosts_buy(){
        $user = User::find(auth()->user()->id);
        if($user->credit_points < 5 ){
            return redirect('/adminAgents/credit/add')->with('low-credit','Insufficient amount of credit point 🤦‍♂️');
        }

        $user->allowed_posts += 10;
        $user->credit_points -= 5;
        $user->update();
        return back();
    }

    public function subscriber(){
        $subscribers = Subscribers::latest()->paginate(12);
        return view('agent_dashboard.subscriber',[
            'subscribers'=>$subscribers
        ]);
    }
}
