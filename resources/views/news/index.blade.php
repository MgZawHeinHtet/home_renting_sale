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
        <div class="grid grid-cols-4 grid-rows-2 gap-3">
            <div class="sm:col-span-4 lg:col-span-2 row-span-2 bg-red-400">
                <x-news-hero-card></x-news-hero-card>
            </div>
            <div class="sm:col-span-2 lg:col-span-1">
                <x-news-hero-card></x-news-hero-card>
            </div>
            <div class="sm:hidden lg:block">
                <x-news-hero-card></x-news-hero-card>
            </div>
            <div class="col-span-2 h-[250px] row-span-1">
                <x-news-hero-card></x-news-hero-card>
            </div>

        </div>

        {{-- news filter bar --}}
        <div class="flex items-center justify-between sticky top-0 py-4 z-50 bg-white lg:shadow-sm">
            <h6 class="font-semibold text-lg tracking-tight text-home-900">All News</h6>

            {{-- filter touch button  --}}
            <div>
                <ul class="flex items-center gap-3">
                    <li class="sm:hidden lg:block">
                        <form class="outline-none px-4 py-2 rounded border-home-900 border" action="">
                            <input class="outline-none " type="text" placeholder="search more 2000 news">
                            <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </li>
                    <li class=" border-home-600">
                        <form action="">
                            <button class="px-4 py-2">Popular</button>
                        </form>
                    </li>
                    <li>
                        <form action="">
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
