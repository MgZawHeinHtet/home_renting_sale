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

}
