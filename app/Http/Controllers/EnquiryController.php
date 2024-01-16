<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnquiryFormRequest;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function send(EnquiryFormRequest $request,$id){
        $cleanData = $request->validated();
        $cleanData['property_id'] = $id;

        Enquiry::create($cleanData);
        return back();
    }
}
