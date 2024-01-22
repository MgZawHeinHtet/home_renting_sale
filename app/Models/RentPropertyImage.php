<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentPropertyImage extends Model
{
    use HasFactory;

    public function rentProperty()
    {
        return $this->belongsTo(PropertyRent::class, 'property_id');
    }
}
