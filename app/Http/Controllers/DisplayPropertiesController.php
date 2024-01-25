<?php

namespace App\Http\Controllers;

use App\Models\PropertyRent;
use App\Models\PropertySale;
use Illuminate\Http\Request;
use PhpParser\Builder\Property;

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
            $properties = PropertyRent::with(['agent'])->filter($requests)->latest()->paginate(9)->withQueryString();
        }
        return view('property.index',[
            'properties' =>$properties,
            'type'=> $type
        ]);
    }

    public function saleShow($id){
    
        $property = PropertySale::findOrFail($id);
        
        return view('property.sale-property-detail',[
            'property'=>$property,
            'property_type'=>'sale'
        ]);
    }

    public function rentShow($id){
    
        $property = PropertyRent::findOrFail($id);
       
        return view('property.rent-property-detail',[
            'property'=>$property,
            'property_type'=>'rent'
        ]);
    }
}
