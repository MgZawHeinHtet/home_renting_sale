<x-layout>
    <div class="w-full px-[100px] mt-20 gap-4 flex ">
        {{ $slot }}
        <div class="w-[35%] mt-[65px]">
            <div class="w-full shadow">
                <div class="w-full">
                    <div id="default-carousel z-[10]"
                        class="relative w-full h-[250px]"
                        data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div
                            class="overflow-hidden relative  w-full h-full ">
                            <!-- Item 1 -->
                            @foreach ($property->rentPropertyImage as $img)
                            <div
                                class="hidden duration-700 w-full h-full  ease-in-out"
                                data-carousel-item>

                                <img class="object-cover w-full"
                                    src="{{ $img->image }}"
                                    alt>
                            </div>
                            @endforeach
                                
                          
                        </div>

                        <!-- Slider controls -->
                        <button type="button"
                            class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 shadow/30 dark:bg-gray-800/30 group-hover:shadow/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg
                                    class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                    fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 19l-7-7 7-7"></path>
                                </svg>
                                <span class="hidden">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 shadow/30 dark:bg-gray-800/30 group-hover:shadow/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg
                                    class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                    fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span class="hidden">Next</span>
                            </span>
                        </button>
                    </div>

                    <script
                        src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
                </div>
                <div class="w-full px-[20px] mt-5 ">
                    <p class="mb-1 text-lg font-semibold">{{ $property->title }} </p>
                    <p class="mb-5">{{ $property->region }} , {{  $property->township }}</p>
                    <div class="w-full flex gap-3 mb-[30px]">
                        <div class="bg-[#002349] text-white px-[10px] flex items-center">5/5</div>
                        <div>
                            <p>"Exceptional!"</p>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="14" class="text-[#002349]" height="14"
                                    viewBox="0 0 24 24"><path
                                        fill="currentColor"
                                        d="M8.125 7.092L12 1.937l3.875 5.155l6.138 2.07l-3.94 5.336l.156 6.056L12 18.733l-6.229 1.82l.156-6.08l-3.915-5.311z" /></svg>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="14" class="text-[#002349]" height="14"
                                    viewBox="0 0 24 24"><path
                                        fill="currentColor"
                                        d="M8.125 7.092L12 1.937l3.875 5.155l6.138 2.07l-3.94 5.336l.156 6.056L12 18.733l-6.229 1.82l.156-6.08l-3.915-5.311z" /></svg>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="14" class="text-[#002349]" height="14"
                                    viewBox="0 0 24 24"><path
                                        fill="currentColor"
                                        d="M8.125 7.092L12 1.937l3.875 5.155l6.138 2.07l-3.94 5.336l.156 6.056L12 18.733l-6.229 1.82l.156-6.08l-3.915-5.311z" /></svg>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="14" class="text-[#002349]" height="14"
                                    viewBox="0 0 24 24"><path
                                        fill="currentColor"
                                        d="M8.125 7.092L12 1.937l3.875 5.155l6.138 2.07l-3.94 5.336l.156 6.056L12 18.733l-6.229 1.82l.156-6.08l-3.915-5.311z" /></svg>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="14" class="text-[#002349]" height="14"
                                    viewBox="0 0 24 24"><path
                                        fill="currentColor"
                                        d="M8.125 7.092L12 1.937l3.875 5.155l6.138 2.07l-3.94 5.336l.156 6.056L12 18.733l-6.229 1.82l.156-6.08l-3.915-5.311z" /></svg>
                                <p class="font-light text-sm">(306)</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full  border-2 rounded-md mb-[40px]">
                        <div class="w-full flex border-b-2">
                            <div class="w-[50%] px-[10px] border-r-2 py-[15px]">
                                <p class="font-semibold">Check in</p>
                                <p class="font-light">{{ $checkin->format('M d') }}</p>
                            </div>
                            <div class="w-[50%] px-[10px] py-[15px]">
                                <p class="font-semibold">Check out</p>
                                <p class="font-light">{{ $checkout->format('M d') }}</p>
                            </div>
                        </div>
                        <div class="w-full px-[10px]  py-[15px]">
                            <p  class="font-semibold">Guests</p>
                            <p class="font-light">{{ $guest }} guests</p>
                        </div>
                    </div>
                    <div class="flex justify-between mb-[30px]">
                        <p >Price Per Month</p>
                        <p>{{ $property->price }} MMK</p>
                    </div>
                    <div class="flex justify-between mb-[30px]">
                        <p >Price For {{ $total }} Days</p>
                        <p>{{ round($property->price * ($total/30)) }} MMK</p>
                    </div>
                    <div class="flex justify-between border-t-2 py-5 mb-[30px]">
                        <p class="font-bold text-lg">Total</p>
                        <p class="font-bold text-lg ">{{ round($property->price * ($total/30)) }} MMK</p>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</x-layout>