<a href="/properties/{{ $property->id }}/sale" class="w-full relative overflow-hidden rounded-md cursor-pointer">
    <img class="w-full h-[420px] object-fill hover:scale-[1.1] transition-all"
        src="{{ $property?->salePropertyImage->count() ? $property?->salePropertyImage[0]->image : 'http://127.0.0.1:8000/assets/insteadImg.jpg' }}"
        alt="">

    <div
        class="absolute px-3 py-2 rounded-lg right-[20px] text-[12px] text-white font-bold bg-red-800 top-[10px]">
        FOR SALE</div>
    <div class="absolute w-full bottom-0">
        <h1 class="text-[18px] font-[600] text-white pb-3 px-[36px]">{{ $property->title }}</h1>
        <div class="pb-7 px-[30px] flex items-center text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M12 2c-4.2 0-8 3.22-8 8.2c0 3.18 2.45 6.92 7.34 11.23c.38.33.95.33 1.33 0C17.55 17.12 20 13.38 20 10.2C20 5.22 16.2 2 12 2zm0 10c-1.1 0-2-.9-2-2s.9-2 2-2s2 .9 2 2s-.9 2-2 2z" />
            </svg>
            <p class="text-[16px] font-[500] ">{{ $property->township }} {{ $property->region }}</p>

        </div>
        <div class="md:flex  hidden items-center justify-between bg-[rgba(0,0,0,0.4)] px-[30px] py-3 text-white"
            style="backdrop-filter: blur(3px);">
            <h1 class="px-[5px]">lakh {{ $property->price }}</h1>
            <div class="flex gap-3">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="25"
                        height="25" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M21 10.78V8c0-1.65-1.35-3-3-3h-4c-.77 0-1.47.3-2 .78c-.53-.48-1.23-.78-2-.78H6C4.35 5 3 6.35 3 8v2.78c-.61.55-1 1.34-1 2.22v6h2v-2h16v2h2v-6c0-.88-.39-1.67-1-2.22zM14 7h4c.55 0 1 .45 1 1v2h-6V8c0-.55.45-1 1-1zM5 8c0-.55.45-1 1-1h4c.55 0 1 .45 1 1v2H5V8z" />
                    </svg>
                    <p>{{ $property->bedroom }} Beds</p>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="25"
                        height="25" viewBox="0 0 24 24">
                        <circle cx="7" cy="7" r="2" fill="currentColor" />
                        <path fill="currentColor"
                            d="M21 13h-1V4.83C20 3.27 18.73 2 17.17 2c-.75 0-1.47.3-2 .83l-1.25 1.25c-.16-.05-.33-.08-.51-.08c-.4 0-.77.12-1.08.32l2.76 2.76c.2-.31.32-.68.32-1.08c0-.18-.03-.34-.07-.51l1.25-1.25a.828.828 0 0 1 1.41.59V13h-6.85c-.3-.21-.57-.45-.82-.72l-1.4-1.55c-.19-.21-.43-.38-.69-.5A2.251 2.251 0 0 0 5 12.25V13H3c-.55 0-1 .45-1 1v5c0 1.1.9 2 2 2c0 .55.45 1 1 1h14c.55 0 1-.45 1-1c1.1 0 2-.9 2-2v-5c0-.55-.45-1-1-1z" />
                    </svg>
                    <p>{{ $property->bathroom }} Baths</p>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="25"
                        height="25" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M21 5v6.5H9.33V5H21zm-6.33 14v-6.5H9.33V19h5.34zm1-6.5V19H21v-6.5h-5.33zM8.33 19V5H3v14h5.33z" />
                    </svg>
                   
                    @if ($property->areaType == 'l*w')
                    <p>{{ $property->width }}' x {{ $property->length }}'</p>
                    @else
                    
                    <p class="capitalize">{{ $property->area }} {{ $property->areaUnit }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</a>