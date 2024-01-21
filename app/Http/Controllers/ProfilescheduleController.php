<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ProfilescheduleController extends Controller
{
    public function index(){
        $schedules = auth()->user()->schedules;
        return view('profile.schedule',[
            'schedules'=>$schedules->load(['property','agent','user'])
        ]);
    }

    public function cancel(Schedule $schedule){
        $schedule->status = 'cancel';
        $schedule->update();
        return back();
    }
}
