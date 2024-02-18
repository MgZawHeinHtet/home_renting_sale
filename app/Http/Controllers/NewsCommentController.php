<?php

namespace App\Http\Controllers;

use App\Models\NewsComment;
use App\Models\Notification;
use Illuminate\Http\Request;

class NewsCommentController extends Controller
{
    public function upload($id)
    {
        $cleanData = request()->validate([
            'description' => ['required']
        ]);

        NewsComment::create([
            'description' => $cleanData['description'],
            'user_id' => auth()->user()->id,
            'news_id' => $id
        ]);

        Notification::create([
            'recipent_id'=> 3,
            'noti_type'=>'news-comment',
            'sender_id'=>auth()->user()->id,
            'related_url'=> "/news/$id"
        ]);
        return back();
    }
    public function update(NewsComment $comment)
    {

        $cleanData = request()->validate([
            'edit' => ['required']
        ]);

        $comment->update(
            [
                'description' => $cleanData['edit']
            ]
        );
        return back();
    }

    public function destory(NewsComment $comment){
        $comment->delete();
        return back();
    }
}
