<?php

namespace App\Http\Controllers;

use App\Http\Requests\PackageCheckoutFormRequest;
use App\Models\CreditPackage;
use App\Models\CreditTranscation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CreditTranscationController extends Controller
{
     public function checkout($id){
        $package = CreditPackage::find($id);
        return view('agent_dashboard.package-checkout',[
            'id'=>$id
        ]);
    }
    public function send(PackageCheckoutFormRequest $request,$id){
        $package = CreditPackage::find($id);
        $cleanData = $request->validated();
        $cleanData['transcation_photo'] = '/storage/' . $cleanData['transcation_photo']->store('/transcation');
        $cleanData['user_id'] = auth()->user()->id;
        $cleanData['credit_package_id'] = $id;
        $cleanData['transcation_price'] = $package->price - ($package->discount/100);
        $cleanData['transcation_number'] = Str::random(5) . mt_rand('1000','9999');

        CreditTranscation::create($cleanData);
        return redirect('/adminAgents/credit/add')->with('buy-credit','Process Success and waiting to check 😉');
    }

    public function transcation_recive(){
        $transcations = CreditTranscation::latest()->paginate(12);
        return view('agent_dashboard.transcation-recive-table',[
            'transcations'=>$transcations
        ]);
    }

    public function check($id){
        $transcation = CreditTranscation::find($id);
        
        return view('agent_dashboard.transcation_check',[
            'transcation'=> $transcation
        ]);
    }

    public function correct($id){
        $transcation = CreditTranscation::find($id);
        $transcation->status = "confirm";
        $transcation->update();

        // if correct add credit point to user
        $user = $transcation->user;
        $user->credit_points += $transcation->creditPackage->point;
        $user->update();

        return back();

    }

    public function wrong($id){
        $transcation = CreditTranscation::find($id);
        $transcation->status = "reject";

        $transcation->update();
        return back();
    }

}
