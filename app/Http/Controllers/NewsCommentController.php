<?php

namespace App\Http\Controllers;

use App\Models\NewsComment;
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
