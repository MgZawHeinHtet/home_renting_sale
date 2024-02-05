<x-layout>
    <div class="max-w-[1024px] mx-auto px-5 mt-20">
        <section>
            <div class="flex gap-2 items-center my-5 flex-wrap">
                <h1 class=" font-bold text-xl">Your Confirmed booking at <span
                        class="text-blue-500">{{ $booking->property->title }}</span></h1>
                <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                <button class=" bg-blue-600  text-white rounded-sm px-2 py-1 text-sm">
                    Genius
                </button>
            </div>
            <div class="text-blue-500  text-sm">
                <a class=" font-bold cursor-pointer underline">{{ $booking->property->agent->company_name ?? '---' }}</a>
                <i class="fa-solid fa-chevron-down cursor-pointer"></i>
            </div>
            <div class="rounded-lg overflow-hidden my-5">
                <div class=" flex flex-col lg:flex-row">
                    <div class="flex-1 border-[1px] p-3 text-[14px]">
                        <div class=" border-b-[1px]">
                            <img src="{{ $booking->property?->rentPropertyImage[0]->image }}"
                                class="w-full rounded-md" />
                            <div class="flex justify-between flex-wrap  my-3">
                                <div class="">
                                    <p class="">210 B, East Race Course road , </p>
                                    <p class="capitalize">{{ $booking->property->township }} Township</p>
                                    <p class="capitalize"> {{ $booking->property->region }}</p>
                                    <p class="">Myanmar</p>
                                </div>
                                <a href="/properties/{{ $booking->property->id }}/rent" class="text-blue-500">Show
                                    map</a>
                            </div>
                        </div>
                        <div class="border-b-[1px] py-3">
                            <p class="font-bold  py-1">Got a question?</p>
                            <p class=" py-1">Contact the property for any question or special requests.</p>
                            <p class=" py-1">+959 512 1244</p>
                            <div class=" flex gap-3 items-center mt-2 flex-wrap">
                                <button class=" bg-blue-500 text-white px-2 py-1 rounded-md"><i
                                        class="fa-regular fa-comment mr-1"></i>New messages</button>
                                <p class="text-blue-500">Email the property</p>
                            </div>
                        </div>
                        <div class="flex gap-3 mt-3">
                            <div class="">
                                <i class="fa-regular fa-circle-question text-[16px]"></i>
                            </div>
                            <div class="">
                                <p class="font-bold">Need help?</p>
                                <p class="text-blue-500">Contact Customer Service</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 border-[1px] p-3 text-[14px]">
                        <div class=" border-b-[1px] pb-3">
                            <p class="">Confirmation number: <span
                                    class="font-bold">{{ $booking->booking_number }}</span></p>
                            <p class="">PIN code: <span class="font-bold">7943</span></p>
                        </div>
                        <div class=" border-b-[1px] py-3">
                            <div class="pb-3">
                                <p class="">Check-in</p>
                                <p class="font-bold">{{ date('D,d M Y', strtotime($booking->check_in)) }}</p>
                                <p class="">from {{ $booking->property->check_in }}</p>
                            </div>
                            <div class="">
                                <p class="">Check-out</p>
                                <p class="font-bold">{{ date('D,d M Y', strtotime($booking->check_out)) }}</p>
                                <p class="">until {{ $booking->property->check_out }}</p>
                            </div>
                        </div>
                        <div class=" border-b-[1px] py-3 flex gap-3 ">
                            <p class="">
                                <i class="fa-solid fa-star text-blue-500"></i>
                            </p>
                            <p class=""><button class="open-btn text-yellow-600 font-bold">Rating to property </button>
                                and take a chance to get discount</p>
                        </div>
                        <div class=" border-b-[1px] py-3 flex gap-1 ">
                            <p class="">
                                <i class="fa-solid fa-check text-green-600"></i>
                            </p>
                            <p class=" text-green-600">All service included</p>
                        </div>
                        @php
                            $days = $booking->total_days - 30 * round($booking->total_days / 30);
                        @endphp
                        <div class="pt-3">
                            <p class="">Price</p>
                            <p class="font-bold">
                                {{ round($booking->total_days / 30) }}month{{ $days > 0 ? ',' . $days . 'days' : '' }}</p>
                            <p class=" text-xl font-bold text-green-600">{{ $booking->booking_price }} kyats</p>
                            <p class="text-blue-500 text-[12px] pt-3">All serveices include in this price.</p>
                        </div>
                    </div>
                    <div class="flex-1 border-[1px] p-3 text-[14px] text-blue-500 font-bold">
                        <div class=" border-b-[1px] pb-3">
                            <p class="pb-3">Change dates</p>
                            <p class="pb-3">Add space for more guest</p>
                            <p class="pb-3">View policies</p>
                        </div>
                        <div class=" border-b-[1px] py-3">
                            <p class="pb-3">View confirmation</p>
                            <p class="pb-3">Print confirmation</p>
                        </div>
                    </div>
                </div>
                <div class=" border-[1px] flex flex-col lg:flex-row gap-5 lg:gap-0 p-5 text-[14px]">
                    <div class="w-full lg:w-1/3 text-center">
                        <p class="text-green-600 font-bold">Cancellation is free</p>
                        <p class=" pb-3 text-12px">For 8 months 28 days 4 hours 59 minutes</p>
                        <p class="">To cancel free, you must cancel <span class="font-bold">before </span> 28 Oct
                            att 23:59
                            Yangon time. After that time, you will have to pay US$26.73 to cancel.</p>
                    </div>
                    <div class="w-full lg:w-2/3">
                        <div
                            class=" flex justify-between flex-col md:flex-row items-start  md:items-center gap-16 md:gap-5">
                            <div class="w-full">

                                <div class="flex w-full text-center font-bold">
                                    <p class="flex-1">Free</p>
                                   
                                    <p class="flex-1">NON_REFUNDABLE</p>
                                </div>

                                <div class="relative flex w-full h-3 bg-gray-200 rounded-full dark:bg-gray-700"
                                    role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">

                                    {{-- 33% Progress --}}
                                    <div class="flex flex-col justify-center rounded-l-full bg-green-600 "
                                        style="width: 50%">
                                    </div>

                                    {{-- Divider Bar --}}
                                    <div
                                        class=" h-6 bg-gray-400 w-[1px] absolute top-1/2  transform -translate-x-1/2 -translate-y-1/2 left-[50%] z-10">
                                    </div>

                                    <div
                                    class=" h-6 bg-gray-400 w-[1px] absolute top-1/2  transform -translate-x-1/2 -translate-y-1/2 left-[0%] z-10">
                                    </div>
                                  
                                    <div
                                    class=" h-6 bg-gray-400 w-[1px] absolute top-1/2  transform -translate-x-1/2 -translate-y-1/2 left-[100%] z-10">
                                    </div>
                                 
                                    {{-- White Circle --}}
                                    <div
                                        class=" h-3 w-3 bg-white rounded-full absolute top-1/2  transform -translate-x-1/2 -translate-y-1/2 left-[calc(33%/2)] z-10">
                                    </div>

                                    {{-- Today Box --}}
                                    <div
                                        class=" bg-white rounded-md px-2 absolute border-2 top-8  transform -translate-x-1/2 left-[calc(33%/2)] z-10 ">
                                        Today
                                        <div
                                            class="absolute w-3 h-3 border-t-2 border-l-2 top-0 left-1/2 rotate-45 -translate-y-1/2 transform -translate-x-1/2 z-20 bg-white">
                                        </div>
                                    </div>

                                    {{-- Bottom Label --}}
                                    <div
                                        class="  absolute top-6 font-bold  transform -translate-x-1/2 -translate-y-1/2 left-[50%] z-10">
                                        Until {{ date('d M',strtotime($booking->cancellable_date)) }}
                                    </div>

                                    {{-- Bottom Label --}}
                                    <div
                                        class="  absolute top-6 font-bold  transform -translate-x-1/2 -translate-y-1/2 left-[0%] z-10">
                                        {{ $booking->created_at->format('d M') }}
                                        
                                        Booked
                                    </div>

                                    <div
                                    class="  absolute top-6 font-bold  transform -translate-x-1/2 -translate-y-1/2 left-[99%] z-10">
                                    {{ date('d M',strtotime($booking->check_in))  }} 
                                </div>
                                   
                                </div>
                            </div>
                            <form action="/booking/{{ $booking->id }}/cancel/step1" method="GET">
                            
                                <button
                                    class="bg-blue-600  hover:bg-blue-700 text-white rounded-sm px-2 py-1 text-sm text-nowrap">
                                    Cancel your booking
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    <div class="hidden rating-parent w-screen h-screen bg-black bg-opacity-20 z-50 fixed top-0 right-0  justify-center items-center">
       
        <div class='w-[500px] flex flex-col  items-center p-6 h-52 bg-white shadow-lg z-50 rounded-lg relative'>
            <button class="rating-btn absolute top-2 right-2">❌</button>
            <p class="text-center font-bold  capitalize mb-3"> Rating this Property 😁
            </p>
            <form action="/properties/{{ $booking->property->id }}/rating" method="POST" onchange="submit()">
                @csrf
                <span class="flex gap-6 pt-4">
                   @php
                        $userRating = auth()->check()
                                    ? auth()
                                        ->user()
                                        ->userRatingOnProduct($booking->property->id)
                                    : null;
                   @endphp
                    @for ($i = 1; $i <= 5; $i++)
                        <label class="cursor-pointer" for={{ $i }}>
                            @if (auth()->user())
                                <svg class="w-12 h-12 {{ $i <= $userRating  ? 'text-yellow-500' : 'text-gray-300' }}"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            
                                
                            @endif
                        </label>
                        <input class="hidden" type="radio" id="{{ $i }}" name="rating"
                            value="{{ $i }}">
                    @endfor
                </span>

                <div class="p-4 rounded-lg mt-4">
                    <p class="">Total Rating - {{ $booking->property->avg_rating }}/{{ $booking->property->ratedUsers->count() }}</p>
                </div>
            </form>
        </div>
    </div>

    <script>
        const ratingParent = document.querySelector('.rating-parent');
        const ratingBtn = document.querySelector('.rating-btn')
        const openRatingBtn = document.querySelector('.open-btn')
       
        openRatingBtn.addEventListener('click', function() {
           
            ratingParent.classList.remove('hidden')
            ratingParent.classList.add('flex')
        })

        ratingBtn.addEventListener('click', function(e) {
            if (e.target != ratingBtn) return;
            e.target.parentElement.parentElement.classList.toggle('hidden')

        })
    </script>
</x-layout>
