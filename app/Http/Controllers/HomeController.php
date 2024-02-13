<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Notification;
use App\Models\PropertyRent;
use App\Models\PropertySale;
use App\Models\Subscribers;
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

    public function subscribe(){
        $cleanData = request()->validate([
            'email' => ['required','email','unique:subscribers,email']
        ]);
        $cleanData['user_id'] = auth()->user()->id;
        
        Subscribers::create($cleanData);

        return back();
    }
}
