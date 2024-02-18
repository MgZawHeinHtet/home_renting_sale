<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribers extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeSendNotification($_,$type,$uri){
       
        $subscribers = $this->all();
      
        foreach($subscribers as $subscriber){
         
            Notification::create([
                'recipent_id' => $subscriber->user_id,
                'noti_type' => $type,
                'related_url'=>$uri,
                'sender_id'=>auth()->user()->id
            ]);
        }
    }

}
