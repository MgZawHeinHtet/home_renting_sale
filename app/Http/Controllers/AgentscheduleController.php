<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class AgentscheduleController extends Controller
{
    public function index(){
        $schedules = Schedule::where('agent_id',auth()->user()->id)->latest()->paginate(10);
        return view('agent_dashboard.schedule',[
            'schedules' => $schedules
        ]);
    }

}
