<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\CssSelector\Node\FunctionNode;

class CreditTranscation extends Model
{
    use HasFactory;

    public function creditPackage(){
        return $this->belongsTo(CreditPackage::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
