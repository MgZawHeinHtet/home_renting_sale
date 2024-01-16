<?php

namespace App\Models;

use App\Http\Requests\ImageuploadRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalePropertyImage extends Model
{
    use HasFactory;
    public function saleProperty()
    {
        return $this->belongsTo(PropertySale::class, 'property_id');
    }

   
}
