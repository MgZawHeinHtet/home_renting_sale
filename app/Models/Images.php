<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Property;

class Images extends Model
{
    use HasFactory;

    public function propertyProperty(){
        return $this->belongsTo(PropertySale::class,'property_id');
    }
}
