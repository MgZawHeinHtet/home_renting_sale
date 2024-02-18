<div class="flex gap-5 items-center hover:shadow-lg transition-all duration-500">
    <div class="relative w-[300px]">
        <img class="w-full h-[200px] object-cover rounded"
            src="{{ $property->salePropertyImage->count() ? $property->salePropertyImage[0]->image : asset('assets/insteadImg.jpg') }}"
            alt="">
        <img class="absolute inline-block w-16 h-16 bottom-0 right-0"
            src="{{ $logo }}"
            alt="">
    </div>
    <div class="flex-grow">
        <div class="space-y-2">
            <h2 class="line-clamp-1 text-lg font-bold text-home-900">{{ $property->title }}</h2>
            <p class="text-base text-slate-600"><span>{{ $property->region }}</span> | <span>{{ $property->township }}</span></p>
            <p class="text-2xl text-yellow-600 font-bold">{{ $property->price }} lakhs</p>
        </div>
        <div class="flex justify-between items-center border-t-2 border-b-2 mt-5 py-4">
            <ul class="flex gap-4">
                <li>
                    <span class="border-r border-r-home-600 pr-4 capitalize"><i class="fas fa-home text-yellow-600"></i>
                        {{ $property->type }}</span>
                </li>
                <li>
                    @if ($property->areaType === "l*w")
                    <span class="border-r border-r-home-600 pr-4 ">
                        <span class="">{{ $property->length }}' x {{ $property->width }}'</span> 
                    </span>
                    @else
                    <span class="border-r border-r-home-600 pr-4 ">
                        <span class="font-bold">{{ $property->area }}</span> {{ $property->areaUnit }}
                    </span>
                    @endif
                </li>
                <li>
                    <span class="border-r border-r-home-600 pr-4">
                        <i class="fas fa-bed text-home-600"></i><sup
                            class="text-lg p-1 font-bold  text-yellow-600">{{ $property->bedroom }}</sup>
                    </span>
                </li>
                <li>
                    <span class="b pr-4">
                        <i class="fas fa-bath text-home-600"></i><sup
                            class="text-lg p-1 font-bold text-yellow-600">{{ $property->bathroom }}</sup>
                    </span>
                </li>
            </ul>
            <ul class="flex gap-4">
                <li>
                    <a class="uppercase" href="/properties/{{ $property->id }}/sale">View Detail</a>
                </li>
                <li class="border-l px-2 border-x-home-600">
                    
                    <form action="/properties/{{ $property->id }}/saveSale" method="POST">
                        @csrf
                        @if (!auth()->user()?->isSavedProperties($property) ?? null)
                            
                        <button><i class="fa-regular fa-bookmark"></i> BookMark</button>
                        @else
                        <button>
                            <i class="fa-solid fa-bookmark text-red-600"></i> BookMark
                        </button>
                        @endif
                    </form>
                </li>
               

            </ul>
        </div>
    </div>

</div>
