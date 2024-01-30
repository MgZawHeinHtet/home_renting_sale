<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'photo', 'description', 'writer_id', 'poster_id', 'isPosted'];

    public function writer()
    {
        return $this->belongsTo(User::class, 'writer_id');
    }

   

    public function newsComment()
    {
        return $this->hasMany(NewsComment::class);
    }

    public function likedUser()
    {
        return $this->belongsToMany(User::class);
    }

    public function scopeFilter($newsQuery, $request)
    {
        if ($search_input = $request['search_input'] ?? null) {
            $newsQuery ->where('title', 'LIKE', '%' . $search_input . "%");
        }
        if($popular = $request['popular']?? null){
            $newsQuery->where('view', '>=', 30);
            
        }
        if($sort = $request['sort']?? null){
            $newsQuery ->orderBy('title','desc');

        }
    }
}
