<?php

namespace App\Http\Controllers;

use App\Models\CashProperty;
use App\Models\Notification;
use App\Models\OwnProperties;
use App\Models\PropertySale;
use App\Models\User;
use Illuminate\Http\Request;

class CashPropertyController extends Controller
{
    public function send(PropertySale $property)
    {
        $type = Request()->payment_type;



        if ($type == 'kbz') {
            $cleanData = Request()->validate([
                'name' => ['required'],
                'phone' => ['required'],
                'billing_number' => ['required', 'unique:cash_properties,billing_number'],
                'photo' => ['required']
            ]);
            $cleanData['payment_type'] = Request()->payment_type;
            $cleanData['property_id'] = $property->id;
            $cleanData['user_id'] = auth()->user()->id;
            $cleanData['agent_id'] = $property->agent->id;
            $cleanData['photo'] =  '/storage/' . request('photo')->store('/payment-sale');
            $transcation = CashProperty::create($cleanData);


            Notification::create([
                'recipent_id' => $property->agent->id,
                'noti_type' => 'send-sale-transcation',
                'sender_id' => auth()->user()->id,
                'related_url' => "/adminAgents/sales/$property->id/checkList"
            ]);
            return back()->with('payment_success', 'Sending payment is successed,pls wait for confirm');
        }

        if ($type == 'cash') {
            $transcation = CashProperty::create([
                'name' => auth()->user()->name,
                'phone' => auth()->user()->phone,
                'billing_number' => "xxxx xxxx xxx",
                'payment_type' => $type,
                'property_id' => $property->id,
                'user_id' => auth()->user()->id,
                'agent_id' => $property->agent->id
            ]);

            Notification::create([
                'recipent_id' => $property->agent->id,
                'noti_type' => 'send-sale-transcation',
                'sender_id' => auth()->user()->id,
                'related_url' => "/adminAgents/sales/$property->id/checkList"
            ]);
            return back()->with('payment_success', 'Sending payment is comfirm');
        }
    }

    public function check_sale(CashProperty $transcation)
    {
        return view('agent_dashboard.transcation_sale_check', [
            'transcation' => $transcation
        ]);
    }

    public function correct($id)
    {
        $transcation = CashProperty::find($id);
        $transcation->status = 'success';
        $property = PropertySale::find($transcation->property_id);
        $property->isSold = true;
       
       
        $transcation->update();

        $user = User::find($transcation->user_id);
        $property->owner_id = $user->id;
        $property->update();

        Notification::create([
            'recipent_id' => $user->id,
            'noti_type' => 'buy-success',
            'sender_id' => auth()->user()->id,
            'related_url' => "/adminAgents/credit"
        ]);
        return back();
    }

    public function wrong($id)
    {
        $transcation = CashProperty::find($id);
        $transcation->status = "reject";

        $transcation->update();
        return back();
    }
}
