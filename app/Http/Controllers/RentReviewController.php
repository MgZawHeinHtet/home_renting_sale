<?php

namespace App\Http\Controllers;

use App\Models\RentReview;
use Illuminate\Http\Request;

class RentReviewController extends Controller
{
    public function index(){
        return view('review');
    }
    public function store(Request $request,$id){
        $request->validate([
            'review'=>['required']
        ]);
        RentReview::create([
            'description'=> $request->review,
            'user_id'=> auth()->user()->id,
            'property_id'=>$id
        ]);
        return back();
    }
}
