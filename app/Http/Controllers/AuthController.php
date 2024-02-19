<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgentFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function agent_signup()
    {
        return view('authentication.agentsignup');
    }
    public function create_agent(AgentFormRequest $request)
    {
        $cleanData = $request->validated();
        $data = $request->except(['confirm-password','_token']);

        $data['role'] = 'agent';

        User::create(
            $data
        );

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);

        return redirect('/')->with('login-success','You have successfully registered & logged in!');
    }

    public function customer_signup(){
        return view('authentication.usersignup');
    }

    public function create_customer(){
        $cleanData = Request()->validate(
            [
                'name'=>['required'],
                'email'=>['required','email','unique:users,email'],
                'password'=>['required']
            ]
        );
        $cleanData['role']= 'customer';

       

        User::create($cleanData);
        $credentials = Request()->only('email', 'password');
        Auth::attempt($credentials);
        return redirect('/')->with('login-success','You have successfully registered & logged in!');
    }
}
