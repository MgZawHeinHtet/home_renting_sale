<div class="border-2 rounded-lg overflow-hidden">
    <div class="w-full relative">
        <div
            class="absolute left-2 top-2 border bg-white text-black py-1 px-2 rounded-lg text-[12px] font-[500] ">
            <p>FRATURE</p>
        </div>

        <div class="w-[100%]">
            <img src="{{ $property->rentPropertyImage[0]->image }}"
                alt="">
        </div>
        <div
            class="absolute right-8 xl:top-[47%] lg:top-[40%] md:top-[64%] top-[51%] border bg-[#00d97e] text-[#ffffff] py-1 px-2 rounded-lg text-[12px] font-[500]">
            FOR
            RENT</div>
        <div class="md:px-10 px-0 w-full">
            <h1 class="pb-5 pt-5 text-[30px] font-[500] text-gray-600">{{ $property->price }}
                <span class="text-[17px] text-black">/MMK</span>
            </h1>
            <div class="grid lg:grid-cols-3 grid-cols-3 text-gray-600 pb-4 w-full">
                <div class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M21 10.78V8c0-1.65-1.35-3-3-3h-4c-.77 0-1.47.3-2 .78c-.53-.48-1.23-.78-2-.78H6C4.35 5 3 6.35 3 8v2.78c-.61.55-1 1.34-1 2.22v6h2v-2h16v2h2v-6c0-.88-.39-1.67-1-2.22zM14 7h4c.55 0 1 .45 1 1v2h-6V8c0-.55.45-1 1-1zM5 8c0-.55.45-1 1-1h4c.55 0 1 .45 1 1v2H5V8z" />
                    </svg>
                    <p class="">{{ $property->bedroom }} Beds</p>
                </div>
                <div class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        viewBox="0 0 24 24">
                        <circle cx="7" cy="7" r="2" fill="currentColor" />
                        <path fill="currentColor"
                            d="M21 13h-1V4.83C20 3.27 18.73 2 17.17 2c-.75 0-1.47.3-2 .83l-1.25 1.25c-.16-.05-.33-.08-.51-.08c-.4 0-.77.12-1.08.32l2.76 2.76c.2-.31.32-.68.32-1.08c0-.18-.03-.34-.07-.51l1.25-1.25a.828.828 0 0 1 1.41.59V13h-6.85c-.3-.21-.57-.45-.82-.72l-1.4-1.55c-.19-.21-.43-.38-.69-.5A2.251 2.251 0 0 0 5 12.25V13H3c-.55 0-1 .45-1 1v5c0 1.1.9 2 2 2c0 .55.45 1 1 1h14c.55 0 1-.45 1-1c1.1 0 2-.9 2-2v-5c0-.55-.45-1-1-1z" />
                    </svg>
                    <p>{{ $property->bathroom }} Baths</p>
                </div>
                <div class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M21 5v6.5H9.33V5H21zm-6.33 14v-6.5H9.33V19h5.34zm1-6.5V19H21v-6.5h-5.33zM8.33 19V5H3v14h5.33z" />
                    </svg>
                    <p>{{ $property->area }} {{ $property->area_unit }}</p>
                </div>

            </div>
            <h2 class="text-[18px] font-[600] pb-4">{{ $property->title }}</h2>
            <div class="pb-7 flex items-center text-[#838383] gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M12 2c-4.2 0-8 3.22-8 8.2c0 3.18 2.45 6.92 7.34 11.23c.38.33.95.33 1.33 0C17.55 17.12 20 13.38 20 10.2C20 5.22 16.2 2 12 2zm0 10c-1.1 0-2-.9-2-2s.9-2 2-2s2 .9 2 2s-.9 2-2 2z" />
                </svg>
                <p>{{ $property->township }} , {{ $property->region }}</p>
            </div>
            <div
                class="w-full flex gap-2 justify-end items-center text-[12px] cursor-pointer hover:text-black text-gray-500 pb-5">
                <a href="/properties/{{ $property->id }}/rent">SEE MORE</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="m12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z" />
                </svg>
            </div>
        </div>
    </div>

</div>