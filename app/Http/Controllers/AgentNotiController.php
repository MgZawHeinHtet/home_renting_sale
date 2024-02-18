<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentNotiController extends Controller
{
    public function index(){
        $notifications = auth()->user()->notifications()->with(['sender','recipent'])->latest()->take(20)->get();
        $unread_notifications = $notifications->filter(function($noti){
            return $noti->is_read == false;
        });
        $read_notifications = $notifications->filter(function($noti){
            return $noti->is_read == true;
        });
        
        return view('agent_dashboard.noti',[
            'unread_notifications' => $unread_notifications,
            'read_notifications' => $read_notifications,
        ]);
    }
}
