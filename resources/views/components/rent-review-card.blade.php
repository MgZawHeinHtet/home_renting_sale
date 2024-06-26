
<div class="w-full mb-[30px]">
    <div class="w-full flex gap-3">
        <p class="font-bold ">{{ $review->user->name }}</p>
        <p>Review collected by <span><a href="">provider</a></span></p>
    </div>
    <div class="w-full flex">

        <div class="flex items-center pr-1">
            @for ($i=1 ; $i <= 5 ; $i++)
            <svg xmlns="http://www.w3.org/2000/svg" width="15" class="{{ $i <= $review->user->userRatingOnProduct($property) ? 'text-yellow-600': 'text-gray-300' }}"
            height="20" viewBox="0 0 56 56">
            <path fill="currentColor"
                d="M11.969 52.293c.96.727 2.18.469 3.633-.586L28 42.613l12.422 9.094c1.453 1.055 2.648 1.313 3.633.586c.96-.727 1.172-1.922.586-3.633l-4.899-14.578l12.516-9c1.453-1.031 2.039-2.11 1.664-3.281c-.375-1.125-1.477-1.688-3.281-1.664l-15.352.093l-4.664-14.648C30.063 3.848 29.22 2.981 28 2.981c-1.195 0-2.039.867-2.602 2.601L20.734 20.23l-15.351-.093c-1.805-.024-2.906.539-3.281 1.664c-.399 1.172.21 2.25 1.664 3.281l12.515 9l-4.898 14.578c-.586 1.711-.375 2.906.586 3.633" />
        </svg>
            @endfor
           

        </div>
        <p class="text-[18px] font-bold text-[#002349] pr-2">{{ $review->user->userRatingOnProduct($property) }}.0</p>
        <p class="text-[14px] font-light flex items-center">Outstanding</p>
    </div>
    <p class="w-[70%]">"{{ $review->description }}"
    </p>
    <p class="mb-[5px] mt-[5px]">Reviewed on {{ $review->created_at->format('d-m-Y') }}</p>
   
</div>
