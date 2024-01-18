<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    public function recipent(){
        return $this->belongsTo(User::class,'recipent_id');
    }

    public function sender(){
        return $this->belongsTo(User::class,'sender_id');
    }
}
