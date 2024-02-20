<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    public function property(){
        return $this->belongsTo(PropertyRent::class,'property_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($propertyQuery,$request){
       
        if($search_input = $request['search_input'] ?? null)
        {
            $propertyQuery->where(function($query) use ($search_input){
                $query->where('first_name','LIKE','%'.$search_input."%")
                ->orWhere('last_name','LIKE','%'.$search_input."%")
                ->orWhere('booking_number','LIKE','%'.$search_input."%");
            });
        } 
        
        if($last_day = $request['last-day']??null){
         
            $propertyQuery->where('created_at',$last_day);
        }
        if($seven_day = $request['7-days']?? null){
            $propertyQuery->where('created_at',">=",$seven_day);
        }
        if($last_month = $request['last-month']?? null){
            $propertyQuery->whereMonth('created_at',$last_month);
        }
        if($last_year = $request['last-year']?? null){
            $propertyQuery->whereYear('created_at',$last_year);
        }
     
    }

}
