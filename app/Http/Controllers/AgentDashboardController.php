<?php

namespace App\Http\Controllers;

use App\Models\CreditPackage;
use App\Models\User;
use Illuminate\Http\Request;

class AgentDashboardController extends Controller
{
    public function index(){
        return view('agent_dashboard.index');
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
            return redirect('/adminAgents/credit/add');
        }

        $user->allowed_posts += 10;
        $user->credit_points -= 5;
        $user->update();
        return back();
    }
}
