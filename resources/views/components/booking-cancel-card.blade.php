<div class=" rounded-md hover:shadow-lg border-[1px] border-solid p-5 mt-5 flex gap-5">
    <img src="{{ $booking->property->rentPropertyImage[0]?->image ?? null }}" class=" w-20 h-20 rounded-md"
        alt="no photo" />
    <div class=" flex-grow flex justify-between flex-wrap gap-3">
        <div class="space-y-1">
            <p class=" text-lg font-bold capitalize">{{ $booking->property->title }}</p>
            <p class="text-[14px]  text-gray-500">{{ date('d M', strtotime($booking->check_in)) }} -
                {{ date('d M', strtotime($booking->check_out)) }} , {{ $booking->property->region }} . Free Cancellation
            </p>
            <p class="text-[14px] text-gray-500 capitalize">{{ $booking->status }}led</p>
        </div>
        <p class="text-xl font-medium inline ">{{ $booking->booking_price }} Kyats</p>
    </div>
    <div class="relative">
        <i
            class="infoButton px-4 py-1 rounded-md cursor-pointer fa-solid fa-ellipsis-vertical text-xl select-none hover:bg-stone-200"></i>
        <div
            class="infoBox hidden absolute top-[40px] left-[-35px] transform -translate-x-1/2 shadow-md rounded-md mt-2 bg-white text-nowrap cursor-pointer text-[14px] z-10">
            <p class="p-3 hover:bg-stone-200 rounded-md">Rent Again</p>
            <p class="p-3 hover:bg-stone-200 rounded-md ">Message the Property</p>
            <p class="p-3 hover:bg-stone-200 rounded-md">Removing Renting</p>
        </div>
    </div>
</div>
