<?php

namespace App\Http\Controllers;

use App\Models\Notification;
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

    public function accept($id){
        $schedule = Schedule::find($id);
        $schedule->status = 'accept';
        $schedule->update();

        //send noti 
        Notification::create([
            'sender_id'=>auth()->user()->id,
            'recipent_id' => $schedule->user_id,
            'noti_type' => 'schedule-accept'
        ]);

        return back();

    }
    public function reject($id){
        $schedule = Schedule::find($id);
        $schedule->status = 'reject';
        $schedule->update();

        Notification::create([
            'sender_id'=>auth()->user()->id,
            'recipent_id' => $schedule->user_id,
            'noti_type' => 'schedule-reject'
        ]);

        return back();
    }
    public function destory(Schedule $schedule){
        $schedule->delete();
        return back();
    }
}
