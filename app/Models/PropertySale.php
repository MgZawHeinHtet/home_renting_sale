<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class PropertySale extends Model
{
    use HasFactory;

    public function salePropertyImage(){
        return $this->hasMany(SalePropertyImage::class,'property_id');
    }

    public function agent(){
        return $this->belongsTo(User::class,'agent_id');
    }

    public function scopeFilter($query,$request){
        if(false){
            $query->where('id',3);
        }
    }
}
