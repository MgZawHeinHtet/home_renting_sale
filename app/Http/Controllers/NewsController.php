<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsFormRequest;
use App\Models\News;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        return view('agent_dashboard.post_news');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsFormRequest $request)
    {
        $cleanData = $request->validated();
        $image_url = '/storage/' . $cleanData['photo']->store('/news');
        $cleanData['photo'] = $image_url;
        $cleanData['writer_id']= auth()->user()->id;
        News::create($cleanData);
        return redirect('/adminAgents/news');
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
    public function edit(News $news)
    {
      
        return view('agent_dashboard.edit-news',[
            'news'=>$news
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsFormRequest $request, News $news)
    {
        $cleanData = $request->validated();
        if ($file = request('photo')) {
            if ($path = public_path($news->photo)) {
                File::delete($path);
            }
            $cleanData['photo'] =  '/storage/' . $file->store('/news');
        }
        $news->update($cleanData);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::find($id);
        $news->delete();
        return back();
    }

    public function like($id){
        $news = News::find($id);
        if($news->likeduser->contains('id',auth()->user()->id)){
            $news->likedUser()->detach(auth()->user()->id);
           
        }else{

            $news->likedUser()->attach(auth()->user()->id);
            Notification::create([
                'recipent_id'=> 3,
                'noti_type'=>'news-like',
                'sender_id'=>auth()->user()->id,
                'related_url'=> "/news/$news->id"
            ]);
        }
        return back();
    }

    public function news_index(){
        $news = News::latest()->paginate(15);
        return view('agent_dashboard.news_index',[
            'newses'=>$news
        ]);
    }
}
