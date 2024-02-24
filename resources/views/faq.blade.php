<x-layout>
    <div class="w-100vw flex items-center px-[250px] justify-between bg-gray-200 py-[40px] gap-5 mb-[50px]">
        <div class="w-[50%]">
            <p class="text-3xl text-home-900 tracking-wider  font-semibold mb-[10px]">FAQS</p>
            <p class="text-home-600 text-md">Have question?Here you will find the answer most value by admin,strong with access to step by step instructio and support</p>
        </div>
        <div class="w-[50%]">
            <img src="{{ asset('assets/faq.svg') }}"
                alt="">
        </div>
    </div>
    <div class="w-full px-[250px]">
        <p class="text-3xl mb-[30px]">Popular Questions and Answers </p>
        <div class="w-full  flex gap-[100px] mb-[100px]">

            <div class="w-[50%]">
                
                @foreach ($first_items as $item)
                <div class="w-full border-y">
                    <div class="w-full z-[3]">
                        <div x-data="{ open: false }" class="relative   w-[100%]">
                            <button @click="open = !open"
                                class="flex justify-between w-full px-4  bg-white  pt-5 pb-3  text-left text-md font-semibold">{{ $item->question }}<svg class="h-5 w-5 ml-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open" @click.away="open = false"
                                class="origin-top-left z-10 relative left-0 mt-2 w-[100%] text-sm  px-4 pb-5">
                                {{ $item->answer }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
           
              


            </div>
            <div class="w-[50%]">
                @foreach ($second_items as $item)
                <div class="w-full border-y">
                    <div class="w-full z-[3]">
                        <div x-data="{ open: false }" class="relative   w-[100%]">
                            <button @click="open = !open"
                                class="flex justify-between w-full px-4  bg-white  pt-5 pb-3 text-left  text-md font-semibold">{{ $item->question }}<svg class="h-5 w-5 ml-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open" @click.away="open = false"
                                class="origin-top-left z-10 relative left-0 mt-2 w-[100%] text-sm  px-4 pb-5">
                                {{ $item->answer }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
             
               


            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

</x-layout>
