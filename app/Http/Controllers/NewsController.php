<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $request = request(['search_input','popular','sort']);
        return view('news.index',[
            'newses'=>News::filter($request)->paginate(15),
            'popular_news'=>News::orderBy('view','desc')->first(),
            'latest_today_news'=>News::latest()->take(3)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = News::find($id);
        $news->view += 1;
        $news->update();
        $comments = $news->newsComment()->with('user')->latest()->paginate(4);
        return view('news.show',[
            'detail_news'=> $news,
            'random_news'=> News::inRandomOrder()->limit(6)->get(),
            'comments' => $comments
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function like($id){
        $news = News::find($id);
        if($news->likeduser->contains('id',auth()->user()->id)){
            $news->likedUser()->detach(auth()->user()->id);

        }else{

            $news->likedUser()->attach(auth()->user()->id);
        }
        return back();
    }
}
