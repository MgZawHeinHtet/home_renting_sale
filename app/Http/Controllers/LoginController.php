<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('authentication.login');
    }
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required','min:8'],
        ]);

        
        if(Auth::attempt($credentials)){
            return redirect('/');
        }else{
            return back()->withErrors(['error'=>'Wrong Credentials!!💥'])->withInput();
        }
    }
}
