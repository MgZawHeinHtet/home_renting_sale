<div class="w-full border-2 shadow-md rounded relative pb-8 bg-white">
    <div class="absolute z-30 bg-[#002349] px-4 py-2 left-4 top-4 text-white">
        <button>Video</button>
    </div>
    <div class>
        <div class="w-full h-[340px] ">

            <div id="default-carousel" class="relative w-full h-full" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="overflow-hidden relative w-full xl:h-full lg:h-full h-64 rounded">

                    @foreach ($property->salePropertyImage as $img)
                        <div class="hidden duration-700 w-full h-full  ease-in-out" data-carousel-item>

                            <img src="{{ $img->image }}"
                                class="absolute rounded object-cover block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">

                        </div>
                    @endforeach



                </div>

                <button type="button"
                    class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-1 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            </div>

            <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        </div>
    </div>
    <div class="px-[20px] pt-[20px] pb-[10px] flex flex-col gap-4">
        <p class="text-[24px] font-bold line-clamp-1">{{ $property->title }}</p>
        <p>{{ $property->region }},{{ $property->township }}</p>
        <p>{{ $property->price }} <span>lakhs</span></p>
        <p>{{ $property->bedroom }} Bedrooms ,
            {{ isset($property->length) ? $property->width . "' x " . $property->length . "'" : '' }}
            {{ isset($property->area) ? ',    ' . $property->area . ' ' . $property->areaUnit : '' }}</p>
        <p>Marketed By {{ $property->agent->name }}.</p>
    </div>
</div>
