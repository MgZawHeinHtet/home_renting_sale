<x-layout>
   
    <div class=" max-w-[1024px] mx-auto text-[14px] p-3 mt-10">
        <section class=" flex flex-col md:flex-row py-5 gap-5">
            <div class="w-full md:w-2/3 ">
                <div class="text-blue-500 flex items-center cursor-pointer gap-2">
                    <div class="">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <a href="{{ url()->previous() }}" class=" cursor-pointer">Back to my booking</a>
                </div>
                <p class="pb-3">Step 2 of 2</p>
                <h3 class=" text-xl font-bold pb-2">Confirm cancellation</h3>
                <p class="">You are able to cancel your entire booking . Please review the details below cancelling.</p>
                <div class="flex py-5 border-b-[1px] gap-3">
                    <div class="">
                        <i class="fa-solid fa-city"></i>
                    </div>
                    <div class="">
                        <p class=" font-bold">{{ $booking->property->title }}</p>
                        <p class="">{{ $booking->booking_price }} kyats , {{ $booking->people }} people</p>
                        <p class=" text-green-500">Free Cancellation</p>
                    </div>
                </div>
                <div class=" border-b-[1px] py-5">
                    <h3 class=" text-lg font-bold">Price breakdown</h3>
                    <div class="flex justify-between mt-5 pb-2">
                        <p class=""> Your booking</p>
                        <p class="">{{ $booking->booking_price }} kyats</p>
                    </div>
                    <div class="flex justify-between pb-5">
                        <p class="">Cancellation fee</p>
                        <p class="">0 kyats</p>
                    </div>
                    <div class="flex justify-between pb-3 font-bold">
                        <p class=""> You will be charged</p>
                        <p class="">US$0</p>
                    </div>
                </div>
              
                <div class=" flex gap-3 items-center mb-5 flex-wrap mt-4">
                    <form action="/booking/{{ $booking->id }}/cancel" method="POST">
                        @csrf
                        <input type="hidden" name="reason" value="{{ $reason }}">
                        <button class=" bg-red-700 hover:bg-red-800 text-white px-3 py-2 rounded-sm">
                            Cancel booking
                        </button>
                    </form>
                    <p class="text-blue-500">I want to keep this booking</p>
                </div>
            </div>
            <div class="w-full md:w-1/3">
                <div class="border-[1px] rounded-md p-3">
                    <div class="flex gap-3  pb-5 border-b-[1px]">
                        <img src="{{ $booking->property->rentPropertyImage[0]->image }}"
                            class=" w-16 h-16 rounded-md">
                        <div class="">
                            <p class="font-bold text-md">{{ $booking->property->title }}</p>
                            <p class="mt-2">{{ date('d M',strtotime($booking->check_in))  }} - {{ date('d M ',strtotime($booking->check_out)) }} . {{ $booking->total_days }} days</p>
                        </div>
                    </div>
                    <div class="flex justify-between mt-5 pb-2">
                        <p class=""> Your renting</p>
                        <p class="">{{ $booking->booking_price }} kyats</p>
                    </div>
                    <div class="flex justify-between pb-5">
                        <p class="">Cancellation fee</p>
                        <p class="">free until {{ date('d M',strtotime($booking->cancellable_date )) }}</p>
                    </div>
                    <div class="flex justify-between pb-3 font-bold">
                        <p class=""> You will be charged</p>
                        <p class="">US$0</p>
                    </div>
                </div>
                <div class="p-3 my-5 border-[1px] rounded-md">
                    <h3 class="text-lg pb-2 font-bold">Cancellation policy</h3>
                    <p class=" pb-2">You may cancel free of charge until 1 week before arrival. If you cancel within 1 day
                        before arrival, the cancellation fee will be the total price of the reservation. If you don't show
                        up, the no-show fee will be the same as the cancellation fee.</p>
                    <p class="font-bold text-blue-500">View cancellation policy</p>
                </div>
            </div>
        </section>
    </div>
</x-layout>