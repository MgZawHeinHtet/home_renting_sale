<?php

namespace App\Http\Controllers;

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
}
