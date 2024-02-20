<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Http\Request;

class AgentBookingController extends Controller
{
    public function index(){
        $request = request(['search_input', 'last-day', '7-days', 'last-month', 'last-year']);

        $bookings = booking::where('agent_id',auth()->user()->id)->filter($request)->latest()->paginate(12);
      
        return view('agent_dashboard.booking',[
            'bookings'=>$bookings
        ]);
    }
}
