<x-layout>
    <div class=" max-w-[1024px] mx-auto text-[14px] p-3 mt-10">

        <section class=" flex flex-col md:flex-row py-5 gap-5">
            <div class="w-full md:w-2/3 ">
                <div class="text-blue-500 flex items-center cursor-pointer gap-2">
                    <div class="">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <a href="/booking/{{ $booking->id }}/show" class=" cursor-pointer">Back to my booking</a>
                </div>
                <p class="pb-3">Step 1 of 2</p>
                <h1 class="pb-3 font-bold text-xl">Reason for Cancelling</h1>
                <p class="pb-3">We can help you find alternative solutions if you need to changes to your booking.</p>
                <label for="reasons" class="block mt-2 mb-1 font-medium">Reason</label>
                <form action="/booking/{{ $booking->id }}/cancel/step2" method="get">
                    @csrf
                    <select name="reason"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:outline-none rounded-lg block w-full p-2.5 ">
                        <option value="" selected>Select a reason (mandatory)</option>
                        <option value="Made bookings for the same dates,want to cancel the ones I don't need">Made bookings for the same dates,want to cancel the ones I don't need</option>
                        <option value="Personal reasons/trip was called off">Personal reasons/trip was called off</option>
                        <option value="Property asked to cancel">Property asked to cancel</option>
                        <option value="I found an alternative accommodation option">I found an alternative accommodation option</option>
                        <option value="Unable to travel due to restrictions related to Coronavirus (COVID - 19 )">Unable to travel due to restrictions related to Coronavirus (COVID - 19 )</option>
                        <option value="Change to dates or destinations">Change to dates or destinations</option>
                        <option value="Change to the number of needs of travellers">Change to the number of needs of travellers</option>
                        <option value="None of the above">None of the above</option>
                    </select>
                    <x-error name="reason"></x-error>
                    <div class=" flex gap-3 items-center my-5 flex-wrap">
                        <button class=" bg-blue-500 hover:bg-blue-600 text-white px-3 py-2 rounded-sm">Continue</button>
                        <p class="text-blue-500">I want to keep this booking</p>
                    </div>
                </form>
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