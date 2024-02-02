<x-booking-layout :total="$total_days" :checkin="$check_in" :checkout="$check_out" :guest="$guest" :property="$property">

    <div class="w-[55%]">
        <div class="w-full flex justify-between mb-[30px] text-gray-900">
            <p class="text-xl font-semibold">Review rules & policies </p>
            <p class="text-md font-light">Step 2 of 3</p>
        </div>
        <div class="w-full bg-white px-[35px] text-gray-600 pb-[30px] mb-[10px]">
            <p class="pt-[35px] text-lg font-bold text-black">House Rules</p>
            <p class="pt-[15px]"><span class="text-black font-bold">Check in </span>after {{ $property->check_in }} PM</p>
            <p class="pt-[2px]"><span class="text-black font-bold">Check out</span> before {{ $property->check_out }} AM</p>
            <p class="pt-[15px] font-light">Maximum overnight guests: {{ $property->people }}</p>
            <p class="text-[12px] font-light">Double size air mattress is available for a fee.</p>
            <div class="w-full">
                <div class="w-full flex gap-5 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500" width="20" height="20"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M22 10c0-4.4-3.6-8-8-8v8zm-7.8 1H22c0 1.8-.6 3.5-1.7 4.9c.7.6 1.1 1.5 1.2 2.4zm6.6 11.7l1.3-1.3L2.4 1.7L1.1 3l8 8H7.4l-.9-2H3v2h2.2s1.9 4.1 2.1 4.4c-1 .5-1.7 1.5-1.8 2.6c-.3 1.9 1.1 3.7 3 4c1.9.3 3.7-1.1 4-3h2.1c.1.4.2.8.4 1.2c.9 1.7 3.1 2.3 4.7 1.4zm-10.3-4.2c0 .8-.7 1.5-1.5 1.5s-1.5-.7-1.5-1.5S8.2 17 9 17s1.5.7 1.5 1.5m7.6 1.5c-.9 0-1.6-.7-1.6-1.5v-.1z" />
                    </svg>
                    <div class="w-full">
                        <p class="text-[16px]">No children allowed</p>
                        <p class="text-[12px]">White Carpet</p>

                    </div>
                </div>
            </div>
            <div class="flex gap-5 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="text-gray-500"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="m18 10l-3-3l4-4v2l3 3l-2 2l-1-1zm-1 1l-3-3l-1 1h-.8l4.8 4.8zM2.39 1.73L1.11 3l6 6H5L3 7L2 8l3 3v3l-1 1v6h2v-3l2-3h5.11L15 16.89V21h2v-2.11l3.84 3.84l1.27-1.27z" />
                </svg>
                <p class="text-[16px]">No pets allowed</p>
            </div>
            <div class="w-full mb-2">
                <div class="w-full flex gap-5 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m19 15.8l-3.25-3.25c1.95.62 3.25 1.71 3.25 2.95zm-5.97-5.97L8.67 5.47A3.487 3.487 0 0 1 12 3c1.93 0 3.5 1.57 3.5 3.5c0 1.57-1.04 2.89-2.47 3.33M12 8c.83 0 1.5-.67 1.5-1.5S12.83 5 12 5s-1.5.67-1.5 1.5S11.17 8 12 8m10 14h-.43l-.73.73l-.73-.73H15c0 .55-.45 1-1 1h-4c-.55 0-1-.45-1-1H2v-2h7c0-.55.45-1 1-1h1v-2H5v-1.5c0-1.62 2.22-3 5.23-3.38L1.11 3l1.28-1.27L22 21.34v.01l.11.11l-.11.11zm-8.89-7l-1-1H12c-2.11 0-3.61.53-4.39 1zm5 5l-3-3H13v2h1c.55 0 1 .45 1 1z" />
                    </svg>
                    <div class="w-full">
                        <p class="text-[16px]">No events allowed</p>
                        <p class="text-[12px]">No wedding parties or gatherings over 4 people</p>

                    </div>
                </div>
            </div>

            <div class="w-full flex gap-5 mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2"
                        d="M8 13v4m8-12v.5a2 2 0 0 0 2 2a2 2 0 0 1 2 2v.5M3 3l18 18m-4-8h3a1 1 0 0 1 1 1v2c0 .28-.115.533-.3.714M17 17H4a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1h9" />
                </svg>
                <div class="w-full">
                    <p class="text-[16px]">No smoking allowed
                    </p>
                    <p class="text-[12px]">No smoking of any type.</p>

                </div>
            </div>
            <p class="text-md font-light mb-2">Open flames, incense or candles are not permitted in the house, on the
                land or in the street.</p>
            <p class="text-md font-light mb-2">No RVs or Monster Trucks. Trailers, pick-up trucks and vehicles such as
                large SUVs over 4,500 lbs. are not permitted on the driveway or it may crack.</p>
            <p class="text-md font-light">No events permitted. Excessive noise that requires police intervention is
                cause for immediate termination of this rental with no refunds.</p>
        </div>

        <div class="w-full bg-white px-[35px] text-gray-800 pb-[30px] mb-[10px]">
            <p class="font-bold text-black text-xl pt-[30px] mb-[15px]">Policies</p>
            <div class="flex gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2">
                        <path d="M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2" />
                        <path
                            d="M9 5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v0a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2m5 6h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3H10m2 0v1m0-8v1" />
                    </g>
                </svg>
                <div>
                    <p class="font-semibold text-lg text-black mb-[20px]">Host's Cancellation Policy:</p>
                    <p class="mb-[20px] font-light text-md"><span class="text-black font-semibold">100% refund of amount
                            paid</span> if you cancel by Apr 16, 2024.</p>
                    <p class="mb-[20px] font-light text-md"><span class="text-black font-semibold">No refund</span> if
                        you cancel after Apr 16, 2024.</p>
                    <p class="mb-[20px] font-light text-md">Cancel by 11:59pm (property's local time) on the date listed
                        to qualify for the refund amount.</p>
                    <p class="mb-[30px] font-light text-md">Please make sure you are happy with the cancellation policy
                        for this booking, which will also apply if you have to cancel due to any Covid-19 related
                        issues.</p>
                </div>
            </div>

            <div class="flex gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2">
                        <path d="M16 19a3 3 0 1 0 6 0a3 3 0 1 0-6 0m1 2l4-4m-2-5h2l-9-9l-9 9h2v7a2 2 0 0 0 2 2h5.5" />
                        <path d="M9 21v-6a2 2 0 0 1 2-2h2c.58 0 1.103.247 1.468.642" />
                    </g>
                </svg>
                <p class="mb-[20px]"><span class="text-lg font-semibold">Damage and Incidentals:</span> If you incur
                    incidental fees or cause damage to the rental property, your credit card may be charged.</p>
            </div>
            <div class="w-full mt-[10px] border-t-2">
                <p class="mt-[20px] text-center"><span class="text-md text-black font-semibold">Don't forget:</span> Add
                    Trip Protection after completing your booking request.</p>
            </div>

        </div>
        <form action="/booking/{{ $property->id }}/step3">
            @csrf
            <div class="w-full bg-white px-[35px] text-gray-800 pb-[30px] mb-[20px]">
                <p class="font-bold text-lg text-black pt-[30px] mb-[20px]">Include a message for the host</p>
                <p class="text-md mb-[30px]">Let them know who you are staying with and what brings you to the area.
                </p>
                <div class="w-full flex items-center gap-3 mb-[10px] relative">
                    <div class="overflow-hidden rounded-full  relative">
                        @if(!$company_logo = $property->user?->company_logo ?? null)
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0-18 0" />
                                <path
                                    d="M9 10a3 3 0 1 0 6 0a3 3 0 1 0-6 0m-2.832 8.849A4 4 0 0 1 10 16h4a4 4 0 0 1 3.834 2.855" />
                            </g>
                        </svg>
                        @else
                        <img src="{{ $company_logo }}" alt="">
                        @endif
                    </div>
                    <div>
                        <p class="text-lg font-bold text-black">{{ $property->agent->name }}</p>
                        <p class="border-2 rounded-lg text-center px-2 text-sm">Property Host</p>
                    </div>
                    <div class="absolute  top-[40px] left-[50px]"><svg xmlns="http://www.w3.org/2000/svg"
                            class="text-blue-800" width="25" height="25" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <path d="M19 12h2l-9-9l-9 9h2v7a2 2 0 0 0 2 2h5m4-2a3 3 0 1 0 6 0a3 3 0 1 0-6 0" />
                                <path d="M9 21v-6a2 2 0 0 1 2-2h2c.641 0 1.212.302 1.578.771" />
                            </g>
                        </svg></div>

                </div>
                <p class="w-full text-md mb-[20px]"><span class="text-black font-semibold">Speaks:</span> english, A
                    little myanmar</p>


                <textarea name="message" placeholder="Your message....(optional)" id="" cols="86%" rows="4"
                    class="border-2 outline-none px-3 py-3"></textarea>

            </div>
            <p class="text-lg font-light my-[30px]">By clicking 'Agree & continue' you are agreeing to the above rental
                policies and terms</p>
            <div class="w-full flex justify-center mt-5 mb-[30px] relative">

                <button type="submit"
                    class="w-[40%] bg-[#002349] rounded-full hover:bg-[#245ABC] py-4 text-white">Agree
                    & continue</button>
                <div class="flex absolute left-[10px] items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="text-blue-700"
                        viewBox="0 0 1024 1024">
                        <path fill="currentColor"
                            d="M685.248 104.704a64 64 0 0 1 0 90.496L368.448 512l316.8 316.8a64 64 0 0 1-90.496 90.496L232.704 557.248a64 64 0 0 1 0-90.496l362.048-362.048a64 64 0 0 1 90.496 0" />
                    </svg>
                    <a href="/booking/{{ $property->id }}/step1?check={{ $check_in->format('Y-m-d') }} + '-' +{{ $check_out->format('Y-m-d') }} & guest={{ $guest }}" class="text-blue-700  text-lg   top-[13px]">Back</a>

                </div>
            </div>
        </form>
    </div>
</x-booking-layout>
