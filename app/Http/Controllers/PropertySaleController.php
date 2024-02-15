<?php

namespace App\Http\Controllers;

use App\Models\PropertyRent;
use App\Models\PropertySale;
use App\Models\SalePropertyReport;
use Illuminate\Http\Request;

class PropertySaleController extends Controller
{
    public function index_report(PropertySale $property){
        
        return view('property.report',[
            'property'=>$property
        ]);
    }

    public function report_send(PropertySale $property){
       
        SalePropertyReport::create([
            'message'=>Request()->message,
            'user_id'=>auth()->user()->id,
            'property_id'=>$property->id

        ]);

        return redirect("/properties/$property->id/sale");
    }
}
