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
}
