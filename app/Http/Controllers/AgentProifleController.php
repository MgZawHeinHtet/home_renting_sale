<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgentProfileFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AgentProifleController extends Controller
{
    public function index(){
        return view('agent_dashboard.agent_profile',[
            'user' => auth()->user()
        ]);
    }

    public function upload(AgentProfileFormRequest $request){
        $user = User::find(auth()->user()->id);
        $cleanData = $request->validated();

        $user->update($cleanData);
    
        if(request()->company_logo){
           
             $image_url = '/storage/' . request('company_logo')->store('/agent-image');
             $user->company_logo = $image_url;
             $user->update();
        }

        return back();
    }
}
