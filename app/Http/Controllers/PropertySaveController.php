<?php

namespace App\Http\Controllers;

use App\Models\PropertySale;
use Illuminate\Http\Request;

class PropertySaveController extends Controller
{
    public function saveSale(PropertySale $property){
        $curr_user = auth()->user();
       

        if($property->savedUsers->contains('id',$curr_user->id)){
            $property->savedUsers()->detach($curr_user->id);
        }else{
            $property->savedUsers()->attach($curr_user->id);
        }
        return back();
    }
}
