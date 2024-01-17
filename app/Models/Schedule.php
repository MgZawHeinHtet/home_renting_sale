<?php

namespace App\Models;

use App\Http\Requests\ScheduleFormRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public function agent(){
        return $this->belongsTo(User::class,'agent_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

   public function property(){
        return $this->belongsTo(PropertySale::class);
   }
}
