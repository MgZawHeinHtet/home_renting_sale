<x-layout>
    @push('css')
        <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/t-datepicker@1.0.4/public/theme/css/t-datepicker.min.css">
        <link rel="stylesheet" href="{{ asset('table_design/t-datepicker-blue.css') }}">
    @endpush
    @stack('css')

    <div class="w-100vw mt-10">
        <div class="w-full flex">
            <div class="w-[65%]">
                <div class="w-full">
                    <div class="w-[80%] z-[10] lg:h-[60vh] md:h-[70vh] h-[60vh] mx-[150px] shadow-md">

                        <div id="default-carousel z-[10]" class="relative w-full h-full" data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="overflow-hidden relative rounded-lg w-full h-full ">
                                <!-- Item 1 -->
                                @foreach ($property?->rentPropertyImage as $key => $img)
                                    <div class="hidden duration-700 w-full h-full  ease-in-out"
                                        data-carousel-item="Slide {{ $key + 1 }}">

                                        <img class="object-cover w-full" src="{{ $img->image }}" alt>
                                    </div>
                                @endforeach

                            </div>
                            <!-- Slider indicators -->
                            <div class="flex overflow-x-scroll w-full gap-5 mt-2 no-scrollbar">
                                @foreach ($property?->rentPropertyImage as $key => $img)
                                    <button type="button"
                                        class="flex-grow-0 flex-shrink-0 w-[120px]  h-[70px] rounded-md border-2 border-white"
                                        aria-current="false" aria-label="Slide {{ $key + 1 }}"
                                        data-carousel-slide-to="{{ $key }}">
                                        <img class="object-cover rounded-md" src="{{ $img->image }}" alt>
                                    </button>
                                @endforeach


                            </div>
                            <!-- Slider controls -->
                            <button type="button"
                                class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                                data-carousel-prev>
                                <span
                                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7"></path>
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
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                    <span class="hidden">Next</span>
                                </span>
                            </button>
                        </div>

                        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

                    </div>
                </div>
                <div class="mt-[150px] ms-[150px] me-[30px]">
                    <div
                        class="w-[130px] py-[5px] rounded-md justify-center flex gap-2 items-center bg-white shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-[#0D8763]" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M8.125 7.092L12 1.937l3.875 5.155l6.138 2.07l-3.94 5.336l.156 6.056L12 18.733l-6.229 1.82l.156-6.08l-3.915-5.311z" />
                        </svg>
                        Top-rated
                    </div>
                    <p class="my-[20px] uppercase font-bold text-gray-600">{{ $property->title }}</p>
                    <p class="mt-[20px] mb-[40px] font-bold text-2xl capitalize  ">
                        {{ $property->area . ' ' . $property->area_unit }} House</p>
                    <div class="border-t-2 pt-[20px] pb-[30px] grid grid-cols-4">
                        <div class="font-bold text-gray-600">OVERVIEW</div>
                        <div class="flex flex-col gap-y-3">
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M11 12.77q.31 0 .54-.23q.23-.23.23-.54q0-.31-.23-.54q-.23-.23-.54-.23q-.31 0-.54.23q-.23.23-.23.54q0 .31.23.54q.23.23.54.23M7 20v-1l6.442-.654q.231-.02.395-.192q.163-.173.163-.404V6.452q0-.567-.37-.983q-.368-.415-.91-.465L7.614 4.5v-1l5.231.515q.927.104 1.54.795Q15 5.5 15 6.427v11.311q0 .61-.417 1.067q-.418.457-1.027.524zm0-1h10V5.115q0-.269-.173-.442t-.442-.173h-8.77q-.269 0-.442.173T7 5.115zm-2.038 1q-.214 0-.357-.143q-.143-.144-.143-.357t.143-.357t.357-.143H6V5.115q0-.67.472-1.143q.472-.472 1.143-.472h8.77q.67 0 1.143.472q.472.472.472 1.143V19h1.038q.214 0 .357.143t.143.357q0 .213-.143.357q-.143.143-.357.143z" />
                                </svg>
                                {{ $property->bedroom }} bedrooms
                            </div>



                            <div class="flex gap-2 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M7.115 10.058q-.632 0-1.066-.435q-.434-.435-.434-1.046q0-.627.434-1.073q.434-.446 1.066-.446q.633 0 1.067.443q.433.444.433 1.067q0 .622-.433 1.056t-1.067.434M5.615 21q-.425 0-.712-.307t-.288-.731q-.69 0-1.152-.486Q3 18.99 3 18.308v-4.462h2.615v-.77q0-.776.545-1.34q.544-.563 1.32-.563q.462 0 .868.21q.406.21.717.56l1.016 1.184q.2.205.387.385t.413.334H18V5.388q0-.561-.375-.975Q17.25 4 16.708 4q-.259 0-.496.11q-.237.111-.42.294l-1.25 1.279q.125.435.05.857t-.3.79l-2.057-2.107q.35-.23.75-.295q.4-.064.8.09l1.25-1.283q.334-.346.763-.54q.429-.195.91-.195q.965 0 1.628.7q.664.7.664 1.688v8.458h2v4.462q0 .682-.462 1.168q-.463.486-1.153.486q0 .425-.288.731q-.287.307-.712.307zm-1-2.038h14.77q.269 0 .442-.193q.173-.192.173-.461v-3.462H4v3.462q0 .269.173.461q.173.193.442.193m0 0H4h16z" />
                                </svg>
                                {{ $property->bathroom }} bathrooms
                            </div>
                        </div>
                        <div class="flex flex-col gap-y-3">
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M16.885 13.615q-.82 0-1.41-.59t-.59-1.41q0-.819.59-1.41q.59-.59 1.41-.59q.819 0 1.41.59q.59.591.59 1.41q0 .82-.59 1.41q-.591.59-1.41.59m-4.5 4.193v-.093q0-.465.232-.843q.232-.379.66-.545q.861-.356 1.766-.534q.905-.178 1.842-.178q.936 0 1.841.178q.905.178 1.766.534q.428.166.66.545q.233.378.233.843v.093q0 .343-.233.575q-.232.232-.575.232h-7.385q-.343 0-.575-.232q-.232-.232-.232-.575m-2.77-6.423q-1.237 0-2.118-.882t-.882-2.118q0-1.238.882-2.12q.88-.88 2.118-.88t2.12.88q.88.882.88 2.12q0 1.237-.88 2.118t-2.12.882m-7 5.582q0-.648.358-1.191t.973-.803q1.327-.673 2.756-1.015q1.429-.343 2.913-.343q.606 0 1.212.064q.606.063 1.211.167l-.426.446l-.427.446q-.393-.076-.785-.1q-.392-.023-.785-.023q-1.353 0-2.674.293q-1.32.292-2.518.942q-.327.183-.567.456q-.24.273-.24.663v.646h6v.187q0 .258.079.466q.08.208.222.347H3.654q-.44 0-.74-.299q-.299-.299-.299-.74zm7-6.582q.825 0 1.413-.588t.587-1.412q0-.825-.587-1.413t-1.413-.587q-.825 0-1.412.587t-.588 1.413q0 .825.588 1.412t1.412.588" />
                                </svg>
                                {{ $property->people }} people max.
                            </div>
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 32 32">
                                    <g fill="currentColor">
                                        <path
                                            d="M7.882 10.577c0-.322.251-.577.567-.577c.316 0 .567.255.567.577v.666a.568.568 0 0 1-.567.577a.568.568 0 0 1-.567-.577z" />
                                        <path fill-rule="evenodd"
                                            d="M30.009 24.504c.308.417.491.935.491 1.496c0 .561-.183 1.079-.493 1.496v2.194c0 .722-.585 1.31-1.305 1.31h-1.355c-.48 0-.899-.262-1.126-.65a.799.799 0 0 1-.465.15h-1.355a.809.809 0 0 1-.805-.81v-1.703a2.508 2.508 0 0 1-.973-1.988c0-.681.271-1.3.708-1.751l-2.412-1.016A3.614 3.614 0 0 1 18.698 20h-2.3a4.616 4.616 0 0 1-2.596 1.845v2.159c.596.456.982 1.181.982 1.996a2.51 2.51 0 0 1-.982 1.996v1.677a.817.817 0 0 1-.804.827h-1.355a.788.788 0 0 1-.303-.061a.8.8 0 0 1-.306.061H9.679a.809.809 0 0 1-.804-.81v-1.694A2.508 2.508 0 0 1 7.893 26c0-.815.386-1.539.982-1.996V22h-.433C6.33 22 4.7 20.12 4.954 17.98l.305-2.5c.049-.382.223-.722.475-.98h-.779c-.784 0-1.523-.31-2.082-.873A2.983 2.983 0 0 1 2 11.487a.99.99 0 0 1 .991-.987h2.672c.242 0 .457-.16.537-.398l.416-1.275A2.007 2.007 0 0 1 5.447 7c0-1.1.884-2 1.964-2h1.25c.412 0 .795-.25.982-.63A2.457 2.457 0 0 1 11.833 3c1.345 0 2.435 1.1 2.455 2.47l.01 3.9c0 .35.285.63.629.63c.78 0 1.468.396 1.885 1h7.062c.513 0 1.004.094 1.458.266a3.839 3.839 0 0 0 1.203-1.488A2.502 2.502 0 0 1 25.091 7.5c0-1.381 1.099-2.5 2.455-2.5c1.357 0 2.456 1.119 2.456 2.5s-1.1 2.5-2.456 2.5h-.02l-.02-.001a4.883 4.883 0 0 1-1.233 1.771a4.257 4.257 0 0 1 1.781 3.47v6.129l.899.466a1.962 1.962 0 0 1 1.056 1.801zM11.142 9.823c-.121.184-.269.588-.422 1.094l-.642 2.53l-.016.076c-.028.126-.054.247-.078.364c-.014.093-.034.205-.06.346l-.019.104c-.016.087-.03.161-.033.198c.002 1.069.878 1.966 1.957 1.966c1.079 0 1.956-.897 1.956-2a2.27 2.27 0 0 0-.106-.666l-.006-.023l-.884-3.53a1.005 1.005 0 0 0-.959-.782a.96.96 0 0 0-.633.243a3.813 3.813 0 0 0-.055.08M3.058 12c.089.344.267.662.525.922c.369.373.857.578 1.372.579h4.081l.067-.264a36.6 36.6 0 0 1 .647-2.558l.162-.641c.083-.372.274-.702.534-.96l.04-.052a4.6 4.6 0 0 0 .02-.026H7.611l-.46 1.415A1.572 1.572 0 0 1 5.664 11.5h-1.69c0 .28-.216.5-.491.5zm7.781 10.5h-.964v1.048a2.47 2.47 0 0 1 .964 0zm-.482 6a2.47 2.47 0 0 1-.482-.048V29.5h.964v-1.048a2.47 2.47 0 0 1-.482.048m1.482-.048V29.5h.964v-1.048a2.47 2.47 0 0 1-.964 0m0-4.904a2.47 2.47 0 0 1 .964 0v-1.486h-.964zM17.232 13v4.31c0 .234-.017.465-.049.69h2.839c.619 0 1.122-.52 1.122-1.16h2v3.03c0 .874.51 1.65 1.298 1.977l2.021.835a1.639 1.639 0 0 1-.409-1.082v-6.36c0-1.235-.979-2.24-2.182-2.24zm2.789 7H19.7a2.615 2.615 0 0 0 1.603 2.308l.941.389a4.145 4.145 0 0 1-1.101-2.827v-.081a3.078 3.078 0 0 1-1.122.211m4.576 8.45v1.05h.964v-1.046a2.453 2.453 0 0 1-.964-.004"
                                            clip-rule="evenodd" />
                                    </g>
                                </svg>
                                Pet-friendly
                            </div>

                        </div>

                        <div class="flex flex-col gap-y-3">
                            <div class="flex  gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 256 256">
                                    <path fill="currentColor"
                                        d="M240 210h-18v-94.45a14.06 14.06 0 0 0-4.53-10.32l-80-75.49l-.09-.08a13.94 13.94 0 0 0-18.83 0l-.09.08l-80 75.5A14 14 0 0 0 34 115.55V210H16a6 6 0 0 0 0 12h224a6 6 0 0 0 0-12M46 115.55a2 2 0 0 1 .65-1.48l.09-.08l79.94-75.48a2 2 0 0 1 2.63 0L209.26 114l.08.08a2 2 0 0 1 .66 1.48V210h-52v-50a14 14 0 0 0-14-14h-32a14 14 0 0 0-14 14v50H46ZM146 210h-36v-50a2 2 0 0 1 2-2h32a2 2 0 0 1 2 2Z" />
                                </svg>
                                {{ $property->category }}
                            </div>
                            <div class="flex  gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M5.77 20.23q-.834 0-1.417-.583q-.584-.583-.584-1.416q0-.706.428-1.238q.428-.531 1.072-.703V7.71q-.644-.172-1.072-.703q-.428-.532-.428-1.238q0-.833.584-1.416q.583-.584 1.416-.584q.706 0 1.238.428q.531.428.703 1.072h8.58q.166-.644.702-1.072q.536-.428 1.239-.428q.833 0 1.416.584q.584.583.584 1.416q0 .703-.428 1.24q-.428.535-1.072.7v8.581q.644.172 1.072.703q.428.532.428 1.238q0 .833-.584 1.416q-.583.584-1.416.584q-.706 0-1.238-.428q-.531-.428-.703-1.072H7.71q-.172.644-.703 1.072q-.532.428-1.238.428m0-13.462q.425 0 .713-.287t.287-.713q0-.425-.287-.712t-.713-.288q-.425 0-.712.288t-.288.712q0 .425.288.713t.712.287m12.462 0q.425 0 .712-.287t.288-.713q0-.425-.288-.712t-.712-.288q-.425 0-.713.288t-.287.712q0 .425.287.713t.713.287M7.71 17.731h8.58q.148-.535.527-.914q.38-.379.914-.527V7.71q-.535-.13-.923-.518q-.389-.388-.518-.923H7.71q-.148.535-.527.914q-.38.379-.914.527v8.58q.535.148.914.527q.379.38.527.914m10.52 1.5q.426 0 .713-.288t.288-.712q0-.425-.288-.713t-.712-.287q-.425 0-.713.287t-.287.713q0 .425.287.712t.713.288m-12.462 0q.425 0 .713-.288t.287-.712q0-.425-.287-.713t-.713-.287q-.425 0-.712.287t-.288.713q0 .425.288.712t.712.288m0-1" />
                                </svg>
                                {{ $property->area . ' ' . $property->area_unit }}
                            </div>
                        </div>



                    </div>
                    <div class="border-t-2 pt-[20px] pb-[30px] grid grid-cols-4">
                        <div class="font-bold text-gray-600">AMENITIES</div>
                        <div class="grid grid-cols-3 col-span-3 gap-y-3">
                            @foreach (json_decode($property->amenities) as $amenity)
                                <div class="flex gap-2 items-center">
                                    {!! $amenity !!}
                                </div>
                            @endforeach

                        </div>

                    </div>
                    <div class="border-t-2 pt-[20px] w-full pb-[30px] grid grid-cols-4">
                        <div class="font-bold text-gray-600 text-sm ">SAFETY AND HYGIENE MEASURES</div>
                        <div class=" flex items-center gap-1 col-span-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 56 56">
                                <path fill="currentColor"
                                    d="M31.316 14.887c.282 0 .446-.188.492-.446c.727-3.89.704-3.984 4.758-4.78c.281-.048.446-.188.446-.47c0-.304-.165-.445-.446-.492c-4.054-.82-4.03-.89-4.758-4.781c-.046-.258-.21-.445-.492-.445c-.28 0-.422.187-.468.445c-.75 3.89-.704 3.96-4.782 4.781c-.258.047-.445.188-.445.492c0 .282.188.422.445.47c4.102.796 4.032.89 4.782 4.78c.046.258.187.446.468.446M42.543 30.73c.422 0 .726-.304.773-.75c.774-6.304 1.031-6.398 7.43-7.453c.516-.093.82-.328.82-.797c0-.445-.304-.726-.726-.796c-6.493-1.102-6.75-1.149-7.524-7.454c-.047-.445-.351-.75-.773-.75c-.446 0-.75.305-.797.727c-.82 6.305-1.008 6.375-7.523 7.477c-.422.07-.727.351-.727.796c0 .446.305.704.727.797c6.515 1.055 6.75 1.149 7.523 7.5a.775.775 0 0 0 .797.703M24.918 52.528c8.578 0 15.516-4.312 18.68-11.648c.421-1.008.28-1.781-.164-2.25c-.422-.398-1.125-.492-1.97-.164c-1.757.703-3.913 1.101-6.609 1.101c-10.476 0-17.226-6.539-17.226-16.828c0-2.836.539-5.648 1.265-7.125c.47-.937.422-1.734.024-2.226c-.445-.516-1.242-.68-2.344-.235c-7.195 2.93-12.14 10.43-12.14 19.196c0 11.414 8.39 20.18 20.484 20.18m.047-3.562c-10.008 0-16.969-7.29-16.969-16.899c0-5.906 2.742-11.109 7.102-14.437c-.563 1.523-.891 3.867-.891 6.117c0 11.531 7.969 19.266 19.758 19.266c2.11 0 4.031-.258 5.015-.61c-2.93 4.055-8.156 6.563-14.015 6.563" />
                            </svg>
                            Use of highly effective cleaning agents to
                            sanitize surfaces
                        </div>
                    </div>
                    <div class="border-t-2 pt-[20px] w-full pb-[30px] grid grid-cols-4">
                        <div class="font-bold text-gray-600">WHAT'S NEARBY</div>
                        <div class="col-span-3 grid grid-cols-3 gap-5">
                            @php
                                $nears = explode(',', $property->nearby);

                            @endphp

                            @foreach ($nears as $near)
                                <div>{{ $near }}</div>
                            @endforeach

                        </div>
                    </div>
                    <div class="border-t-2 pt-[20px] w-full pb-[30px] grid grid-cols-4">
                        <div class="font-bold text-gray-600">DESCRIPTION</div>
                        <div class="col-span-3">
                            <div class="flex bg-[#F4F4F4] rounded-md py-[10px] px-[10px] gap-1 w-[500px]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400" width="24"
                                    height="24" viewBox="0 0 56 56">
                                    <path fill="currentColor"
                                        d="M23.957 41.77a18.02 18.02 0 0 0 10.477-3.376l11.109 11.11a2.658 2.658 0 0 0 1.898.773c1.524 0 2.625-1.172 2.625-2.672c0-.703-.234-1.359-.75-1.874L38.277 34.668c2.32-3.047 3.703-6.82 3.703-10.922c0-9.914-8.109-18.023-18.023-18.023c-9.937 0-18.023 8.109-18.023 18.023S14.02 41.77 23.957 41.77m0-3.891c-7.758 0-14.133-6.398-14.133-14.133c0-7.734 6.375-14.133 14.133-14.133c7.734 0 14.133 6.399 14.133 14.133c0 7.735-6.399 14.133-14.133 14.133" />
                                </svg>
                                <input type="text" class="outline-none bg-[#F4F4F4] w-full"
                                    placeholder="Search description">
                            </div>
                            <div class="mt-5">{!! $property->description !!}
                            </div>
                        </div>
                    </div>
                    <div class="border-t-2 pt-[20px] w-full pb-[30px] grid grid-cols-4">
                        <div class="font-bold text-gray-600">CHECK-IN</div>
                        <div class="col-span-3">

                            From {{ $property->check_in }}
                        </div>

                    </div>
                    <div class="border-t-2 pt-[20px] w-full pb-[30px] grid grid-cols-4">
                        <div class="font-bold text-gray-600">CHECK-OUT</div>
                        <div class="col-span-3">
                            Until {{ $property->check_out }}
                        </div>

                    </div>
                    <div class="border-t-2 pt-[20px] w-full pb-[30px] grid grid-cols-4">
                        <div class="font-bold text-gray-600">HOUSE RULES</div>
                        <div class="col-span-3 grid grid-cols-3 gap-y-3">
                            @foreach (json_decode($property->house_rules) as $rule)
                                <div class=" flex items-center">
                                    {!! $rule !!}
                                </div>
                            @endforeach
                        </div>



                    </div>
                    <div class="border-t-2 pt-[20px] w-full pb-[30px] grid grid-cols-4">
                        <div class="font-bold text-gray-600">HOST</div>
                        <div class="col-span-3">
                            The offer is provided by a professional host
                        </div>

                    </div>
                    <div class="border-t-2 pt-[20px] w-full pb-[30px] grid grid-cols-4">
                        <div class="font-bold uppercase mb-5 text-gray-600"="col-span-4 mb-[10px]">Location</div>
                        <div class="col-span-4">
                            <div class="w-full h-[400px] rounded-lg" id="map"></div>
                        </div>

                    </div>
                    <div class="border-t-2 pt-[20px] w-full pb-[30px] grid grid-cols-4">
                        <div class="col-span-2 mb-[5px] text-[24px] font-bold">Ratings and reviews</div>
                        <div class="flex items-center col-span-2 gap-1 justify-end">
                            <p>How are reviews collected?</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 56 56">
                                <path fill="currentColor"
                                    d="M28 51.906c13.055 0 23.906-10.828 23.906-23.906c0-13.055-10.875-23.906-23.93-23.906C14.899 4.094 4.095 14.945 4.095 28c0 13.078 10.828 23.906 23.906 23.906m0-3.984C16.937 47.922 8.1 39.062 8.1 28c0-11.04 8.813-19.922 19.876-19.922c11.039 0 19.921 8.883 19.945 19.922c.023 11.063-8.883 19.922-19.922 19.922m-.023-15.68c1.124 0 1.757-.633 1.78-1.851l.352-12.375c.024-1.196-.914-2.086-2.156-2.086c-1.266 0-2.156.867-2.133 2.062l.305 12.399c.023 1.195.68 1.851 1.852 1.851m0 7.617c1.335 0 2.53-1.078 2.53-2.437c0-1.383-1.171-2.438-2.53-2.438c-1.383 0-2.532 1.078-2.532 2.438c0 1.336 1.172 2.437 2.532 2.437" />
                            </svg>
                        </div>
                        <div class="col-span-4 flex gap-2 items-center">
                            <p class="text-[40px] font-bold text-[#002349]">5.0</p>
                            <div class="flex items-end pt-[10px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" class="text-yellow-600"
                                    height="20" viewBox="0 0 56 56">
                                    <path fill="currentColor"
                                        d="M11.969 52.293c.96.727 2.18.469 3.633-.586L28 42.613l12.422 9.094c1.453 1.055 2.648 1.313 3.633.586c.96-.727 1.172-1.922.586-3.633l-4.899-14.578l12.516-9c1.453-1.031 2.039-2.11 1.664-3.281c-.375-1.125-1.477-1.688-3.281-1.664l-15.352.093l-4.664-14.648C30.063 3.848 29.22 2.981 28 2.981c-1.195 0-2.039.867-2.602 2.601L20.734 20.23l-15.351-.093c-1.805-.024-2.906.539-3.281 1.664c-.399 1.172.21 2.25 1.664 3.281l12.515 9l-4.898 14.578c-.586 1.711-.375 2.906.586 3.633" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" class="text-yellow-600"
                                    height="20" viewBox="0 0 56 56">
                                    <path fill="currentColor"
                                        d="M11.969 52.293c.96.727 2.18.469 3.633-.586L28 42.613l12.422 9.094c1.453 1.055 2.648 1.313 3.633.586c.96-.727 1.172-1.922.586-3.633l-4.899-14.578l12.516-9c1.453-1.031 2.039-2.11 1.664-3.281c-.375-1.125-1.477-1.688-3.281-1.664l-15.352.093l-4.664-14.648C30.063 3.848 29.22 2.981 28 2.981c-1.195 0-2.039.867-2.602 2.601L20.734 20.23l-15.351-.093c-1.805-.024-2.906.539-3.281 1.664c-.399 1.172.21 2.25 1.664 3.281l12.515 9l-4.898 14.578c-.586 1.711-.375 2.906.586 3.633" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" class="text-yellow-600"
                                    height="20" viewBox="0 0 56 56">
                                    <path fill="currentColor"
                                        d="M11.969 52.293c.96.727 2.18.469 3.633-.586L28 42.613l12.422 9.094c1.453 1.055 2.648 1.313 3.633.586c.96-.727 1.172-1.922.586-3.633l-4.899-14.578l12.516-9c1.453-1.031 2.039-2.11 1.664-3.281c-.375-1.125-1.477-1.688-3.281-1.664l-15.352.093l-4.664-14.648C30.063 3.848 29.22 2.981 28 2.981c-1.195 0-2.039.867-2.602 2.601L20.734 20.23l-15.351-.093c-1.805-.024-2.906.539-3.281 1.664c-.399 1.172.21 2.25 1.664 3.281l12.515 9l-4.898 14.578c-.586 1.711-.375 2.906.586 3.633" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" class="text-yellow-600"
                                    height="20" viewBox="0 0 56 56">
                                    <path fill="currentColor"
                                        d="M11.969 52.293c.96.727 2.18.469 3.633-.586L28 42.613l12.422 9.094c1.453 1.055 2.648 1.313 3.633.586c.96-.727 1.172-1.922.586-3.633l-4.899-14.578l12.516-9c1.453-1.031 2.039-2.11 1.664-3.281c-.375-1.125-1.477-1.688-3.281-1.664l-15.352.093l-4.664-14.648C30.063 3.848 29.22 2.981 28 2.981c-1.195 0-2.039.867-2.602 2.601L20.734 20.23l-15.351-.093c-1.805-.024-2.906.539-3.281 1.664c-.399 1.172.21 2.25 1.664 3.281l12.515 9l-4.898 14.578c-.586 1.711-.375 2.906.586 3.633" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" class="text-yellow-600"
                                    height="20" viewBox="0 0 56 56">
                                    <path fill="currentColor"
                                        d="M11.969 52.293c.96.727 2.18.469 3.633-.586L28 42.613l12.422 9.094c1.453 1.055 2.648 1.313 3.633.586c.96-.727 1.172-1.922.586-3.633l-4.899-14.578l12.516-9c1.453-1.031 2.039-2.11 1.664-3.281c-.375-1.125-1.477-1.688-3.281-1.664l-15.352.093l-4.664-14.648C30.063 3.848 29.22 2.981 28 2.981c-1.195 0-2.039.867-2.602 2.601L20.734 20.23l-15.351-.093c-1.805-.024-2.906.539-3.281 1.664c-.399 1.172.21 2.25 1.664 3.281l12.515 9l-4.898 14.578c-.586 1.711-.375 2.906.586 3.633" />
                                </svg>

                            </div>
                            <p class="pt-[12px]">. 152 ratings</p>
                        </div>
                    </div>
                    <p class="w-full">Outstanding</p>
                    <div class="w-full bg-[#EDEDFF] px-[25px] rounded-md py-[7px] mb-[30px]">
                        152 guests rated this home
                    </div>

                    {{-- review card section  --}}
                    @foreach ($property->rentReview as $review)
                        
                    <x-rent-review-card :review="$review"></x-rent-review-card>
                    @endforeach
                   
                    <!-- psganation -->
                    <div></div>
                    <!-- paganation end -->
                    <div class="w-full border-t-2 border-b-2 py-5">
                        <p class="text-gray-600 text-[16px] font-bold">Home ID: <span
                                class="text-black font-[400]">{{ $property->property_number }}</span></p>
                    </div>
                </div>
            </div>
            <div class="w-[35%] pt-[30px] z-[100]">
                <div class="border-2 rounded-md w-[60%] sticky top-[0px]">
                    <div class="bg-[#F4F4F4] text-center">
                        <p>Home ID:
                            {{ $property->property_number }}</p>
                    </div>
                    <div class="px-[20px]">
                        <div class="flex w-full">
                            <button class="w-[50%] flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M6.615 22q-.69 0-1.152-.462Q5 21.075 5 20.385v-9.77q0-.69.463-1.152Q5.925 9 6.615 9h2.116v1H6.615q-.23 0-.423.192q-.192.193-.192.423v9.77q0 .23.192.423q.193.192.423.192h10.77q.23 0 .423-.192q.192-.193.192-.423v-9.77q0-.23-.192-.423q-.193-.192-.423-.192h-2.116V9h2.116q.69 0 1.152.463q.463.462.463 1.152v9.77q0 .69-.462 1.152q-.463.463-1.153.463zm4.885-6.5V4.613l-2.1 2.1L8.692 6L12 2.692L15.308 6l-.708.713l-2.1-2.1V15.5z" />
                                </svg>
                                Share
                            </button>
                            <button class="w-[50%] flex justify-center items-center my-[10px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M20 7.423v10.962q0 .69-.462 1.152q-.463.463-1.153.463H5.615q-.69 0-1.152-.462Q4 19.075 4 18.385V5.615q0-.69.463-1.152Q4.925 4 5.615 4h10.962zm-1 .427L16.15 5H5.615q-.269 0-.442.173T5 5.615v12.77q0 .269.173.442t.442.173h12.77q.269 0 .442-.173t.173-.442zm-7 8.688q.827 0 1.413-.586q.587-.587.587-1.414t-.587-1.413q-.586-.587-1.413-.587t-1.413.587Q10 13.712 10 14.538t.587 1.414q.586.586 1.413.586M6.77 9.77h7.422v-3H6.77zM5 7.85V19V5z" />
                                </svg>
                                Save
                            </button>
                        </div>
                        <p class="mb-[10px] ">{{ $property->area }} {{ $property->area_unit }}
                            {{ $property->category }} ∙ {{ $property->bedroom }} bedrooms ∙ {{ $property->people }}
                            people</p>
                        <p class="mb-[10px] capitalize">{{ $property->township }}, {{ $property->region }}</p>
                        <form action="/check-date/{{ $property->id }}" method="POST">
                            @csrf
                            @if (session('status'))
                            <div class="bg-green-100 rounded-md">
                                <p class="px-[20px] py-[8px] mb-[5px] text-[14px] text-green-600">{{ session('status') }}</p>
                            </div>
                            @elseif ( session('error'))
                            <div class="bg-red-100  rounded-md">
                                <p class="px-[20px] py-[8px] mb-[5px] text-[14px] text-red-500 font-bold">{{ session('error') }} <br><span class="text-[10px]">Choose different date to check availability</span></p>
                            </div>
                            @else
                            <div class="bg-orange-100  rounded-md">
                                <p class="px-[20px] py-[8px] mb-[5px] text-[14px] text-orange-600 font-bold">Choose Date for accurate deal</p>
                            </div>
                            
                            @endif
                            <div class="w-full bg-white rounded-md border-2">
                                <input value="{{ old('check') }}" name="check" class="w-full border  p-2"
                                    id="input-id" type="text"
                                    placeholder="Pls Select Check in | Check out date" />
                            </div>
                            <button class="mt-3 bg-[#002349] w-full inline rounded-lg py-[7px] text-white mb-5">Check
                                availability</button>
                        </form>
                        <div class="flex justify-between mb-5">
                            <p>Book on</p>
                            <p>Booking.com</p>
                        </div>
                        @if (session('total_days'))
                            
                        <div class="flex justify-between mb-5">
                            <p>Price for {{ session('total_days') }} days</p>
                            <p> {{round($property->price * session('total_days')/30,2)  }}  kyats</p>
                        </div>
                        @else 
                        <div class="flex justify-between mb-5">
                            <p>Price per month</p>
                            <p>from {{ $property->price  }}  kyats</p>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="w-full mt-[50px] px-[150px] mb-[40px]">
            <div class="w-full flex justify-center items-center flex-col border-b-2 mb-[50px]">
                <p class="text-[24px] font-bold mb-[20px]">Haven't found the right vacation home yet?</p>
                <button
                    class="border-2 px-[15px] mb-[50px] py-[15px] font-bold  hover:bg-[#EDEDFF] border-[#002349] text-[#002349] rounded-md">Keep
                    Searching</button>
            </div>
        
        </div>
        <!-- footer -->
     
    </div>
</x-layout>

@section('javascript')
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/t-datepicker@1.0.4/public/theme/js/t-datepicker.min.js"></script>
    <script>
        var map = L.map('map').setView([{{ $property->map }}], 13);

        var titleLayer = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {

            attribution: 'OSM',
        }).addTo(map);

        const marker = L.marker([{{ $property->map }}]).addTo(map);

        let prevMarker;

        map.on('click', function(e) {

            if (prevMarker != undefined) {

                map.removeLayer(prevMarker);
            }

            L.Routing.control({
                createMarker: function() {
                    return null;
                }
            });

            prevMarker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(map);

            L.Routing.control({
                    waypoints: [L.latLng({{ $property->map }}), L.latLng([e.latlng.lat, e.latlng.lng])],
                })
                .on('routesfound', function(e) {
                    e.routes[0].coordinates.forEach((coor, index) => {

                        setTimeout(() => {
                            marker.setLatLng([coor.lat, coor.lng]);
                        }, 100 * index);
                    });
                })
                .addTo(map);
        });
    </script>
@endsection

@yield('javascript')
