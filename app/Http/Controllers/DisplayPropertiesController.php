<?php

namespace App\Http\Controllers;

use App\Models\PropertySale;
use Illuminate\Http\Request;

class DisplayPropertiesController extends Controller
{
    public function index(){
        $curr_route = url()->current();
        $is_sale = str_contains($curr_route,'sale');
        $is_rent = str_contains($curr_route,'rent');
        $requests = request(['type','search_input']);
        if($is_sale){
            $type = 'sale';
            $properties = PropertySale::with(['agent','salePropertyImage'])->filter($requests)->latest()->paginate(9)->withQueryString();
        }else if($is_rent){
            $type = 'rent';
            $properties = PropertySale::with(['agent'])->filter($requests)->latest()->paginate(9)->withQueryString();
        }
        return view('property.index',[
            'properties' =>$properties,
            'type'=> $type
        ]);
    }

    public function show($id){
    
        $property = PropertySale::findOrFail($id);
        $type = 'sale';
        return view('property.sale-property-detail',[
            'property'=>$property,
            'property_type'=>$type
        ]);
    }
}
