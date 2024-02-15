<div class=" relative rounded-md hover:shadow-lg border-[1px] border-solid flex flex-col  mt-12 before:content-[''] before:block  before:h-12 before:border-slate-200  before:border before:absolute before:top-[-49px] before:left-20 ">
    <div class="flex gap-5 p-5  ">
        <img src="{{ $booking->property->rentPropertyImage[0]?->image ?? null }}"
            class=" w-20 h-20 rounded-md" alt="no photo"/>
        <div class=" flex-grow flex justify-between flex-wrap gap-3">
            <div class="space-y-1">
                <p class=" text-lg font-bold capitalize">{{ $booking->property->title }}</p>
                <p class="text-[14px]  text-gray-500">{{ date('d M',strtotime($booking->check_in))  }} - {{  date('d M',strtotime($booking->check_out)) }} , {{ $booking->property->region }} . Free Cancellation</p>
                <p class="text-[14px] text-green-600 ">Confirmed</p>
            </div>
            <p class="text-xl font-medium inline ">{{ $booking->booking_price  }} Kyats</p>
        </div>
        <div class="relative">
            <i
                class="infoButton px-4 py-1 rounded-md cursor-pointer fa-solid fa-ellipsis-vertical text-xl select-none hover:bg-stone-200"></i>
            <div
                class="infoBox hidden absolute top-[40px] left-[-35px] transform -translate-x-1/2 shadow-md rounded-md mt-2 bg-white text-nowrap cursor-pointer text-[14px] z-50">
                @if (date('Y-m-d') > date('Y-m-d', strtotime($booking->cancellable_date)))
                <form action="/booking/{{ $booking->id }}/cancel/step1">
                    <button class="p-3 hover:bg-stone-200 rounded-md">Cancel Renting</button>
                </form>
                  @endif
                
                
                <a  href="/booking/{{ $booking->id }}/show" class="p-3 block hover:bg-stone-200 rounded-md ">View Renting</a>
                <p class="p-3 hover:bg-stone-200 rounded-md">Download Recepit</p>
            </div>
        </div>
    </div>
    
</div>