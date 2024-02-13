<div>
    <img class="rounded-lg pb-5"
        src="{{ $news->photo }}"
        alt>
    <div
        class="relative mb-[30px] border-2 border-green-600 flex items-center gap-3 justify-start text-white rounded-xl w-[200px] ">
        <div class="w-[13px] h-[13px] bg-green-600 rounded-full ms-4"></div>
        <p class="text-[#00693d] font-[500]">
           {{ $news->created_at->format('M d , Y') }}</p>
    </div>
    <h1 class="text-[23px] font-[600] pb-8">{{ $news->title }}</h1>
    <div class="pb-7 nine-link">
        <a href="/news/{{ $news->id }}">Read More</a>
        <div class="w-[20%] nine-outline-bar h-[3px] bg-green-200"></div>
    </div>
</div>