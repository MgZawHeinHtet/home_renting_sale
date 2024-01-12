<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileformRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index(){
        return view('profile.index',[
            'user'=>auth()->user()
        ]);
    }

    public function update(ProfileformRequest $request,User $user){
       
        $cleanData = $request->validated();

        if(request()->profile_img){
           
            $user->profile_img = '/storage/'.request('profile_img')->store('/profile');
        }

        if(request()->dob){
            $user->dob = request()->dob;
        }

        $user->name = $cleanData['name'];
        $user->email = $cleanData['email'];
        $user->address = $cleanData['address'];
        $user->gender = $cleanData['gender'];

        $user->update();
        return back();
    }
}
