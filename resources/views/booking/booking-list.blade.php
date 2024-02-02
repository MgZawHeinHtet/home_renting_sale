<x-layout>
    <div class="max-w-[1200px] mx-auto">

        <section class="py-10 px-5">
            <div class="flex flex-col md:flex-row justify-between gap-3 ">
                <h1 class="font-[700] text-bold text-3xl">Renting Lists</h1>
            </div>
            {{-- Confirmed --}}

            @if ($confirm_bookings)
                <div class="my-10 ">
                    <div class="relative z-30">
                        <img src="{{ $cover_img }}" class=" w-full h-[300px] object-cover  rounded-lg" />
                        <div class="absolute top-0 left-0 bg-black bg-opacity-40 w-full h-full rounded-lg"></div>
                        <div
                            class="absolute text-white text-center transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            <h3 class=" font-medium text-3xl pb-3">Yangon</h3>
                            <p class=" text-[16px] tracking-wide">{{ date('d M', strtotime($first_booking->check_in)) }}
                                - {{ date('d M', strtotime($first_booking->check_out)) }}</p>
                        </div>
                    </div>

                    @foreach ($confirm_bookings as $booking)
                        <x-booking-confirm-card :booking="$booking"></x-booking-confirm-card>
                    @endforeach
                </div>
            @endif
                {{-- Cancelled --}}
                @foreach ($cancel_bookings as $booking)
                    
                <div class="my-10">
                    <h3 class=" font-medium text-xl capitalize">{{ $booking->property->region }}</h3>
                    <p class=" text-[14px]"> {{ date('d M',strtotime($booking->check_in)) }} - {{ date('d M',strtotime($booking->check_out)) }}</p>
                     <x-booking-cancel-card :booking="$booking"></x-booking-cancel-card>
                </div>
                @endforeach


    </div>
    </section>
    </div>
    <script>
        var infoButtons = document.querySelectorAll('.infoButton');
        var infoBoxes = document.querySelectorAll('.infoBox');
        infoButtons.forEach(function(infoButton, index) {
            infoButton.addEventListener('click', function() {
                infoBoxes[index].classList.toggle('hidden');
                infoButton.classList.toggle('bg-stone-200');
            });
        });
    </script>
</x-layout>
