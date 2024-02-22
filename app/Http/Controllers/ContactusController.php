<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactusController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function send(){
        $cleanData = Request()->validate([
            'first_name'=> ['required'],
            'last_name'=> ['required'],
            'email'=>['required'],
            'message'=>['required']
        ]);

        Mail::to('Rental@gmail.com')->send(new ContactMail($cleanData));
        return back()->with('mail_success','Sent email successfully😉');

    }
}
