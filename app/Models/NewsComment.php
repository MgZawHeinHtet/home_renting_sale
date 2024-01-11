<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsComment extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function news(){
        return $this->belongsTo(News::class);
    }

    public function upload($id){
        $cleanData = request()->validate([
            'description'=>['required']
        ]);
        NewsComment::create([
            'description'=>$cleanData['description'],
            'user_id'=>auth()->user()->id,
            'news_id'=>$id
        ]);
        return back();
    }
}
