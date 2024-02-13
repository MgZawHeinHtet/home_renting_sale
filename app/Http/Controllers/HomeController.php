<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\PropertyRent;
use App\Models\PropertySale;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $rent_properties = PropertyRent::where('is_featured',true)->latest()->take(6)->get();
        $sale_properties = PropertySale::where('is_featured',true)->latest()->take(4)->get();
        $newses = News::latest()->take(3)->get();
        return view('index',[
            'rent_properties'=>$rent_properties,
            'sale_properties'=>$sale_properties,
            'newses'=>$newses
        ]);
    }
}
