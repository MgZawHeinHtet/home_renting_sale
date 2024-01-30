<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordchangeFormRequest;
use App\Http\Requests\ProfileformRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index', [
            'user' => auth()->user()
        ]);
    }

    public function update(ProfileformRequest $request, User $user)
    {

        $cleanData = $request->validated();

        if (request()->profile_img) {
          
            $user->profile_img = '/storage/' . request('profile_img')->store('/profile');
        }

        if (request()->dob) {
            $user->dob = request()->dob;
        }

        $user->name = $cleanData['name'];
        $user->email = $cleanData['email'];
        $user->address = $cleanData['address'];
        $user->gender = $cleanData['gender'];

        $user->update();
        return back();
    }

    public function changePassword(PasswordchangeFormRequest $request, User $user)
    {
        $cleanData = $request->validated();

        $isTrue = Hash::check($cleanData['current-password'], $user->password);

        if ($isTrue) {
            $user->password = Hash::make($cleanData['new-password']);
            $user->update();
        } else {
            return back()->withErrors(['current-password' => 'Wrong Password!'])->withInput();
        }

        return back()->with('create', 'Change Successfully 🎉');
    }

    public function savedProperties(){
        return view('profile.saved-properties',[
            'properties' =>auth()->user()->savedSaleProperties()->latest()->paginate(8)
        ]);

        
    }
}
