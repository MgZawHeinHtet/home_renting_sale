<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\SoftDeletes;


class PropertySale extends Model
{
    use HasFactory,SoftDeletes;

    public function salePropertyImage(){
        return $this->hasMany(SalePropertyImage::class,'property_id');
    }

    public function agent(){
        return $this->belongsTo(User::class,'agent_id');
    }

    public function scopeFilter($propertyQuery,$request){
       
        if($search_input = $request['search_input'] ?? null)
        {
            
            $propertyQuery->where(function($query) use ($search_input){
                $query->where('title','LIKE','%'.$search_input."%")
                ->orWhere('region','LIKE','%'.$search_input."%")
                ->orWhere('township','LIKE','%'.$search_input."%");
            });
        } 

        if($houseType  =  $request['houseType'] ?? null){
            $propertyQuery->where('type',$houseType);
        }

        if($bath  =  $request['bath'] ?? null){
            $propertyQuery->where('bathroom',$bath);
        }

        if($bed  =  $request['bed'] ?? null){
            $propertyQuery->where('bedroom',$bed);
        }

        if($region  =  $request['region'] ?? null){
            $propertyQuery->where('region',$region);
        }
        if($township  =  $request['township'] ?? null){
            $propertyQuery->where('township',$township);
        }

        if(($max = $request['maxPrice']?? null) && ($min = $request['minPrice']??null)){
            $propertyQuery->whereBetween('price',[$min,$max]);
        }else if($max = $request['maxPrice']?? null){
            $propertyQuery->where('price','<=',$max);
        }else if($min = $request['minPrice']??null){
            $propertyQuery->where('price','>=',$min);
        }
    }

    public function enquries(){
        return $this->hasMany(Enquiry::class,'property_id');
    }

    public function savedUsers(){
        return $this->belongsToMany(User::class);
    }

    public function transcations(){
        return $this->hasMany(CashProperty::class,'property_id');
    }

   
}
