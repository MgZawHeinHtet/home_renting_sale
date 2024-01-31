<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditTranscation extends Model
{
    use HasFactory;

    public function creditPackage(){
        return $this->belongsTo(CreditPackage::class);
    }
}
