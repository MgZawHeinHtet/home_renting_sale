

<x-booking-layout :total="$total_days" :checkin="$check_in" :checkout="$check_out" :guest="$guest" :property="$property" >
    <div class="w-[55%]">
        <div class="w-full flex justify-between items-center">
            <div class="text-3xl font-bold capitalize">Begin your renting</div>
            <div class="font-light italic">Step 1 of 3</div>
        </div>
        <div
            class="w-full shadow mt-10 flex flex-col gap-5 rounded-md py-[40px] px-[30px]">
            <div>
                <p class="font-light text-md"><span
                        class="font-bold">Act fast!</span> Price and
                    availability may change.</p>
                <!-- icon -->
            </div>
            <div>
                <p class="font-light text-md"><span
                        class="font-semibold">Free cancellation</span>
                    until <a href="#" class="text-blue-600 text-[18px]">
                        {{ date('M d,Y',strtotime($cancel_date)) }}</a></p>
                <!-- icon -->
            </div>
        </div>
        <form action="/booking/{{ $property->id }}/step2" >
            @csrf
            <input type="hidden" name="check_in" value="{{ $check_in }}">
            <input type="hidden" name="check_out" value="{{ $check_out }}">
            <input type="hidden" name="guest" value="{{ $guest }}">
            <input type="hidden" name="total_days" value={{ $total_days }}> 
            <div
                class="w-full shadow mt-[5px] rounded-md px-[20px] py-[60px]">
                <p class="px-[5px] mb-[20px] font-bold text-lg">Enter
                    contact information</p>
                <p class="px-[5px] mb-[30px] font-light">Required fields</p>
                <div class="w-full grid grid-cols-2 gap-3 px-[5px]">
                    <div
                        class="w-full ">
                        <input type="text" value="{{ old('first_name') }}" name="first_name" placeholder="First Name"
                            class="w-full border-2 border-brown-700 shadow-sm  rounded-md px-[7px] py-[10px] outline-blue-600 ">
                        <x-error name="first_name"></x-error>
                    </div>
                    <div
                        class="w-full ">
                        <input name="last_name" value="{{ old('last_name') }}" type="text" placeholder="Last Name"
                            required="required"
                            class="w-full border-2 border-brown-700 shadow-sm  rounded-md px-[7px] py-[10px] outline-blue-600 ">
                            <x-error name="last_name"></x-error>

                    </div>
                    <div
                        class="w-full ">
                        <input name="email" value="{{ old('email') }}" type="email" placeholder="Email"
                            required="required"
                            class="w-full border-2 border-brown-700 shadow-sm  rounded-md px-[7px] py-[10px] outline-blue-600 ">
                            <x-error name="email"></x-error>
                    </div>
                    <div
                        class="w-full flex gap-3">
                        <div class="w-[30%] relative ">
                            <div class="absolute right-0 top-[13px]"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 14.708L6.692 9.4l.708-.708l4.6 4.6l4.6-4.6l.708.708z"/></svg></div>
                            <input name="phone_head" type="text" value="+95"
                                class="w-full border-2 border-brown-700 shadow-sm  rounded-md px-[7px] py-[10px] outline-blue-600 ">
                        </div>
                        <div class="w-[65%]">
                            <input value="{{ old('phone') }}" name="phone" type="text" placeholder="Mobile Number"
                                required="required"
                                class="w-full border-2 border-brown-700 shadow-sm  rounded-md px-[7px] py-[10px] outline-blue-600 ">
                                <x-error name="phone"></x-error>
                        </div>
                    </div>
                </div>
            </div>
            <p class="mb-[20px] mt-[30px]">By clicking 'Agree & continue' you are
                agreeing to our Terms and Conditions, Privacy Policy, and to
                receive booking-related texts. Standard messaging rates may
                apply.</p>
            <div class="w-full flex justify-center">
                <button type="submit"
                    class="w-[40%] bg-[#002349] rounded-full hover:bg-[#245ABC] py-4 text-white">Agree
                    & continue</button>
            </div>
        </form>
    </div>
</x-booking-layout>