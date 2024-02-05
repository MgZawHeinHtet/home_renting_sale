<?php

namespace App\Http\Controllers;

use App\Http\Requests\PackageCheckoutFormRequest;
use App\Models\CreditPackage;
use App\Models\CreditTranscation;
use Illuminate\Http\Request;

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

        CreditTranscation::create($cleanData);
        return redirect('/adminAgents/credit/add');
    }

    public function transcation_recive(){
        return view('agent_dashboard.transcation-recive-table');
    }
}
