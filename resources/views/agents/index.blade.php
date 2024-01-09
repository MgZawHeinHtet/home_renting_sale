<x-layout>
    <section class="">
        {{-- hero and search box  --}}
        <div class="w-full h-96 bg-home-600 relative bg-[url('https://southviewdesign.com/assets/components/phpthumbof/cache/POH_2018_Edina_modern_rustic_front_yard_landscape_with_curb_appeal.dc34c04995ae310d7295241c9ee9e53a.jpg')] bg-cover bg-center bg-fixed flex justify-center items-center flex-col">
            <h2 class="sm:text-4xl lg:text-5xl text-white sm:text-center sm:w-auto lg:w-[900px] tracking-wider leading-snug capitalize">Our local experts agency will guide you on  your journey</h2>

            <div class="absolute bottom-[-35px]">
                <form class="sm:w-[400px] lg:w-[900px] py-5 bg-white flex rounded shadow-lg" action="">
                    <button class="px-4"><i class="fa-solid fa-magnifying-glass text-2xl text-home-600"></i></button><input class="flex-grow outline-none placeholder:text-xl text-xl text-slate-500" type="text" placeholder="Company name or Agency name">
                </form>
            </div>
        </div>

        {{-- agent list container  --}}
        <div class="sm:px-5 lg:px-44 grid sm:grid-cols-1 lg:grid-cols-3 my-32 items-start gap-5">
            {{-- chane premimun to normal  --}}
            <div class="">
                <h4 class="text-3xl tracking-wide font-extralight mb-4 text-home-600">Choose Your Agency</h4>

                 <p class="text-lg mb-12">{{ $total_agents }} results</p>

                 <div class="w-20 border-2 border-yellow-600 mb-4"></div>

                 <p class="text-lg text-slate-700 font-thin italic tracking-wide mb-4">Connect with  premium agency</p>

                 <a class=" text-lg text-home-600 tracking-wide" href="">Create your own agency <span class="text-xl ml-3">&#8594;</span>
                 </a>
            </div>
            <div class="sm:col-span-1 lg:col-span-2">
                {{-- filter bar  --}}
                <div class="pb-12 border-b border-slate-500 mb-8">
                    <a class="text-base tracking-wider uppercase">Sort : sort Z-A <i class="fas fa-sort ml-2 text-home-600"></i></a>
                </div>

                {{-- list of agency --}}
                <div class="space-y-5">
                   {{-- agent card  --}}
                   @foreach ($agents as $agent)
                   <x-agent-card :agent="$agent"></x-agent-card>
                   @endforeach
                  
                  <div>
                    {{ $agents->links() }}
                  </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>