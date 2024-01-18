<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(){
        $notifications = auth()->user()->notifications()->with(['sender','recipent'])->latest()->take(20)->get();
        $unread_notifications = $notifications->filter(function($noti){
            return $noti->is_read == false;
        });
        $read_notifications = $notifications->filter(function($noti){
            return $noti->is_read == true;
        });
        return view('notification.index',[
            'unread_notifications' => $unread_notifications,
            'read_notifications' => $read_notifications,
        ]);
    }

    public function read(Notification $notification){
        $notification->is_read = true;
        $notification->update();
        return back();
    }

    public function destory(Notification $notification){
        $notification->delete();
       
        return back();
    }

    public function makeAllRead(){
        auth()->user()->notifications()->where('is_read',false)->update(['is_read'=>true]);
        return back();
    }
}
