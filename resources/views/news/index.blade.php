<x-layout>

    {{-- news hero section  --}}
    <section class="px-10 my-5 space-y-5">
        {{-- breaking news  --}}
        <div class="flex items-center">
            <span class="w-40 text-center py-3 bg-home-600 text-white block">Breaking News</span>
            <marquee class="" behavior="" direction="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto consequatur nesciunt enim, quam ipsa magnam porro deserunt facilis aperiam sapiente perferendis ex, nobis aliquid esse magni quibusdam corrupti deleniti maxime.</marquee>
        </div>

        <div class="grid grid-cols-4 grid-rows-2 gap-3">
            <div class="col-span-2 row-span-2 bg-red-400">
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
    </section>
</x-layout>