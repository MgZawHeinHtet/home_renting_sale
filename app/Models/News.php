<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title','photo','description','writer_id','poster_id','isPosted'];

    public function writer(){
        return $this->belongsTo(User::class,'writer_id');
    }

    public function poster(){
        return $this->belongsTo(User::class,'poster_id');
    }

    public function newsComment(){
        return $this->hasMany(NewsComment::class);
    }

}
