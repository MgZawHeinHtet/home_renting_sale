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
    }

    public function enquries(){
        return $this->hasMany(Enquiry::class,'property_id');
    }

    public function savedUsers(){
        return $this->belongsToMany(User::class);
    }
}
