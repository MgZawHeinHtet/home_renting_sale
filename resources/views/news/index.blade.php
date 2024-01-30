<x-layout>
    
    <section class="sm:px-5 lg:container-space my-5 space-y-5">
        {{-- breaking news  --}}
        <div class="flex items-center">
            <span class="w-40 text-center py-3 bg-home-600 text-white block">Breaking News</span>
            <marquee class="text-lg" behavior="" direction="">Lorem ipsum dolor sit amet consectetur, adipisicing
                elit. Iusto consequatur nesciunt enim, quam ipsa magnam porro deserunt facilis aperiam sapiente
                perferendis ex, nobis aliquid esse magni quibusdam corrupti deleniti maxime.</marquee>
        </div>

        {{-- news hero section  --}}
        <div class="grid grid-cols-4 grid-rows-2 gap-3 overflow-hidden">
            <div class="sm:col-span-4 lg:col-span-2 row-span-2 ">
               
                <div class="w-full shadow-inner rounded relative before:w-full before:h-32   before:block before:absolute before:bottom-0 before:bg-gradient-to-t before:from-black  before:to-transparent overflow-hidden before:z-50">
                    <img class="transition-all duration-700  hover:scale-105 w-full h-full  object-cover rounded" src="{{ $popular_news->photo }}" alt="">
                    <div class="absolute left-5 bottom-5 z-50">
                        <h6 class="text-yellow-500">Most Views</h6> 
                        {{-- title  --}}
                        <a href="/news/{{ $popular_news->id }}">
                            <p class="text-white text-lg font-bold ">{{ $popular_news->title }}</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="sm:col-span-2 lg:col-span-1">
                <div class="w-full shadow-inner rounded relative before:w-full before:h-32   before:block before:absolute before:bottom-0 before:bg-gradient-to-t before:from-black  before:to-transparent overflow-hidden before:z-50">
                    <img class="transition-all duration-700  hover:scale-105 w-full h-full  object-cover rounded" src="{{ $latest_today_news[0]->photo }}" alt="">
                    <div class="absolute left-5 bottom-5 z-50">
                        <h6 class="text-yellow-500">Latest News</h6> 
                        {{-- title  --}}
                        <a href="/news/{{ $latest_today_news[0]->id }}">
                            <p class="text-white text-lg font-bold ">{{ $latest_today_news[0]->title }}</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="sm:hidden lg:block">
                <div class="w-full shadow-inner rounded relative before:w-full before:h-32   before:block before:absolute before:bottom-0 before:bg-gradient-to-t before:from-black  before:to-transparent overflow-hidden before:z-50">
                    <img class="transition-all duration-700  hover:scale-105 w-full h-full  object-cover rounded" src="{{ $latest_today_news[1]->photo }}" alt="">
                    <div class="absolute left-5 bottom-5 z-50">
                        <h6 class="text-yellow-500">Latest News</h6> 
                        {{-- title  --}}
                        <a href="/news/{{ $latest_today_news[1]->id }}">
                            <p class="text-white text-lg font-bold ">{{ $latest_today_news[1]->title }}</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-2 h-[270px] row-span-1">
                <div class="w-full  shadow-inner rounded relative before:w-full before:h-32   before:block before:absolute before:bottom-0 before:bg-gradient-to-t before:from-black  before:to-transparent overflow-hidden before:z-50">
                    <img class="transition-all duration-700 w-full h-[270px]  hover:scale-105   object-cover rounded" src="{{ $latest_today_news[2]->photo }}" alt="">
                    <div class="absolute left-5 bottom-5 z-50">
                        <h6 class="text-yellow-500">Latest News</h6> 
                        {{-- title  --}}
                        <a href="/news/{{ $latest_today_news[2]->id }}">
                            <p class="text-white text-lg font-bold ">{{ $latest_today_news[2]->title }}</p>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        {{-- news filter bar --}}
        <div class="flex items-center justify-between sticky top-0 py-4 z-50 bg-white lg:shadow-sm">
            <h6 class="font-semibold text-lg tracking-tight text-home-900">All News</h6>

            {{-- filter touch button  --}}
            <div>
                <ul class="flex items-center gap-3">
                    <li class="sm:hidden lg:block">
                        <form class="outline-none px-4 py-2 rounded border-home-900 border" action="/news" method="GET">
                        
                            <input value="{{ request('search_input') }}" class="outline-none " name="search_input" type="text" placeholder="search more 2000 news">
                            <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </li>
                    <li class=" border-home-600">
                        <form action="/news">
                            <input type="hidden" name="popular" value=">=50">
                            <button class="px-4 py-2">Popular</button>
                        </form>
                    </li>
                    <li>
                        <form action="/news">

                            <input type="hidden" name="sort" value="aes">
                            <button class="px-4 py-2">Sorting <i class="fa-solid fa-sort"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        {{-- news container --}}
        <div class="grid sm:grid-cols-1 lg:grid-cols-5 gap-5">
            @foreach ($newses as $news)
           
                <x-news-card :news="$news"></x-news-card>
            
            @endforeach
           
           
        </div>
        
        <div>
            {{ $newses->links() }}
        </div>
    </section>
</x-layout>
