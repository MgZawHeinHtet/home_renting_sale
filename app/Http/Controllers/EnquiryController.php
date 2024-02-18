<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnquiryFormRequest;
use App\Models\Enquiry;
use App\Models\Notification;
use App\Models\PropertyRent;
use App\Models\PropertySale;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function send(EnquiryFormRequest $request,$id){
        $cleanData = $request->validated();
        $cleanData['property_id'] = $id;
        
        Enquiry::create($cleanData);

        $property = PropertySale::find($id);
        Notification::create([
            'recipent_id'=> $property->agent->id,
            'noti_type'=>'enquiry-request',
            'sender_id'=>0,
            'related_url'=> "/adminAgents/enquries"
        ]);
        return back()->with('enquiry-success','Sent Successfully 😉');
    }
}
