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
            $properties = PropertySale::filter($requests)->latest()->paginate(9)->withQueryString();
        }else if($is_rent){
            $type = 'rent';
            $properties = PropertySale::filter($requests)->latest()->paginate(9)->withQueryString();
        }
        return view('property.index',[
            'properties' =>$properties,
            'type'=> $type
        ]);
    }

    public function show($id){
        return view('property.sale-property-detail');
    }
}
