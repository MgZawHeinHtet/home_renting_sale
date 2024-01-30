@props(['news'])

<div>

    {{-- news_img  --}}
   
    <div >
        <img class="w-full h-[180px] object-cover contrast-125 hover:contrast-100 transition-all duration-500" src="{{ $news->photo }}" alt="">
    </div>
    {{-- news_text-container --}}
    <div class="my-3">
        <div>
            
        </div>
        <a href="/news/{{ $news->id }}" class="block font-bold text-lg mb-5 hover:underline underline-offset-8 hover:decoration-home-600">{{ $news->title }}</a>
        <p class="line-clamp-3 opacity-80 mb-4">{{ $news->description }}</p>
        <footer>
            <p class=""><i class="fa-regular fa-clock mr-2"></i> {{ $news->created_at->diffForHumans() }}</p>
        </footer>
    </div>
</div>