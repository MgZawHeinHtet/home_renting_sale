<x-layout>
    <div class=" max-w-[1024px] mx-auto px-5 text-[14px] mt-20 mb-20">
        
        <div class="flex gap-1 text-blue-500 my-8 ">
            <p class=" ">
                <i class="fa-solid fa-chevron-left "></i>
            </p>
            <a href="/booking/list" class="  cursor-pointer ">Back to all bookings</a>
        </div>
    
        <div class="flex gap-8 md:gap-2 flex-col md:flex-row  ">
            {{-- LEFT SIDE --}}
            <div class="w-full md:w-2/3">
                <h6 class="text-xl font-bold ">Your booking was <span class="text-green-600">cancelled for FREE</span></h6>
                <ul class="ml-5 my-5">
                    <li class="py-3 flex">
                        <p class="">
                            <i class=" fa-solid fa-check text-green-600 mr-2"></i>
                        </p>
                        <p><span class="font-bold">Your booking was successfully cancelled</span>-you don't have to do
                            anythings else!
                    </li>
                    <li class="py-3 flex">
                        <p class="">
                            <i class=" fa-solid fa-check text-green-600 mr-2"></i>
                        </p>
                        <p>If you have any questions about this booking, you can contact {{ $booking->property->agent->company_name }} directly at
                            <span class="font-bold ">{{ $booking->property->agent->phone }}</span> for more info.
                        </p>
                    </li>
                    <li class="py-3 flex">
                        <p class="">
                            <i class=" fa-solid fa-check text-green-600 mr-2"></i>
                        </p>
                        <p>If you have any questions about this booking, you can contact {{ $booking->property->agent->company_name }} directly at
                            <span class="font-bold ">{{  $booking->property->agent->phone }}</span> for more info.
                        </p>
                    </li>
                </ul>
                <div class="flex gap-5 items-center">
                    <form action="/properties/{{ $booking->property_id }}/rent">

                        <button class="bg-blue-600 hover:bg-blue-700 text-white rounded-sm py-2 px-4">
                            Book again
                        </button>
                    </form>
                    <a href="/properties/rent" class="text-blue-500 font-medium">Find another place to stay</a>
                </div>
            </div>
            {{-- RIGHT SIDE --}}
            <div class="w-full md:w-1/3 rounded-md overflow-hidden border-[2px] ">
                <p class="bg-stone-200 p-3">Cancellation summary</p>
                <div class="p-3">
                    <div class="flex gap-2">
                        <div class="">
                            <img src="{{ $booking->property->rentPropertyImage->count() ? $booking->property->rentPropertyImage[0]->image : '' }}"
                                class=" w-16 h-14" alt="">
                        </div>
                        <div class="">
                            <p class="font-medium text-blue-500 text-xl">{{ $booking->property->title }}  <i class="fa-solid fa-star text-yellow-400"></i></p>
                           
    
                        </div>
                    </div>
                    <ul class="py-2">
                        <li class="py-2">
                            <p class="text-stone-400">Check-in</p>
                            <p class="line-through decoration-green-500 decoration-2">{{ date('D d M Y'),strtotime($booking->check_in) }}</p>
                        </li>
                        <li class="py-2">
                            <p class="text-stone-400">Check-out</p>
                            <p class="line-through decoration-green-500 decoration-2">{{ date('D d M Y'),strtotime($booking->check_out) }}</p>
                        </li>
                        <li class="py-2">
                            <p class="text-stone-400">Stay Details</p>
                            <p class="line-through decoration-green-500 decoration-2">{{ $booking->total_days }} days</p>
                        </li>
                    </ul>
    
    
    
                </div>
                <div class="flex justify-between bg-green-200 p-3 ">
                    <p class="">Cancellation Cost:</p>
                    <p class="font-bold">Free</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>