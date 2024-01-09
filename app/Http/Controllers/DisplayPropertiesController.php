<?php

namespace App\Http\Controllers;

use App\Models\PropertySale;
use Illuminate\Http\Request;

class DisplayPropertiesController extends Controller
{
    public function index(){
        $requests = request(['type']);
        if($requests['type']==='sale'){
            $properties = PropertySale::filter($requests)->latest()->paginate(9)->withQueryString();
        }
        return view('property.index',[
            'properties' =>$properties
        ]);
    }
}
