<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Http\Request;

class AgentBookingController extends Controller
{
    public function index(){
        $bookings = booking::where('agent_id',auth()->user()->id)->paginate(12);
      
        return view('agent_dashboard.booking',[
            'bookings'=>$bookings
        ]);
    }
}
