@php
$property = $schedule->property()->withTrashed()->first();
@endphp
@if ($property->trashed())
    
<p class="text-red-600">This property is reported and temporary remove from list.(recommended to cancel)</p>
@endif
<div class="w-full p-2 border rounded space-y-3">
    <div class="flex justify-between bg-gray-600 p-1 rounded">
       
        <a href="/properties/{{ $property->id }}/sale" class="text-gray-200  rounded p-2">{{ $property->title }}</a>
        @if ($schedule->status != 'pending')
            
        <span class="p-2 px-4 bg-yellow-500 text-white rounded">{{ $schedule->status }}ed</span>
        @else
        <form action="/profile/schedules/{{ $schedule->id }}/cancel" method="POST">
            @csrf
            <button class="p-2 px-4 text-yellow-600 underline">Cancel</button>
        </form>
        @endif

    </div>
    <div class="grid grid-cols-4 gap-5 items-center">
        <div>
            <img class="w-full object-fit h-36  rounded shadow" src="{{ $property->salePropertyImage[0]->image }}" alt="">

        </div>
        <div class="col-span-2">
            <div class="grid grid-cols-3 gap-5 items-baseline">
                <div class="flex gap-3">
                    <div>
                        <i class="fas fa-house text-yellow-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-lg text-gray-300">Type</p>
                        <span class="text-sm text-gray-400">{{ $property->type }}</span>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div>
                        <i class="fa-brands fa-codepen  text-yellow-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-lg text-gray-300">l*w</p>
                        <span class="text-sm text-gray-400">{{ $property->length }}' * {{ $property->width }}'</span>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div>
                        <i class="fa-solid fa-bed text-yellow-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-lg text-gray-300">Bed Rooms</p>
                        <span class="text-sm text-gray-400">{{ $property->bedroom }} rooms</span>
                    </div>
                </div>
                <div class="flex gap-3">
                    <div>
                        <i class="fa-solid fa-bath text-yellow-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-lg text-gray-300">Bath Rooms</p>
                        <span class="text-sm text-gray-400">{{ $property->bathroom }} rooms</span>
                    </div>
                </div>
                <div class="flex gap-3">
                    <div>
                        <i class="fa-solid fa-layer-group text-yellow-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-lg text-gray-300">Furnishing</p>
                        <span class="text-sm text-gray-400">{{ $property->furnished }}</span>
                    </div>
                </div>
                <div class="flex gap-3">
                    <div>
                        <i class="fa-solid fa-money-bill text-xl text-yellow-600"></i>
                    </div>
                    <div>
                        <p class="text-lg text-gray-300">Price</p>
                        <span class="text-sm text-gray-400">{{ $property->price }}</span>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-span-1">
            <div class="py-4 px-2 bg-gray-600 rounded space-y-2">
                <div>
                    <p class="text-gray-200">View Type - {{ $schedule->viewType }}</p>
                </div>
                <div>
                    <p class="text-gray-200">Date - {{ $schedule->date }}</p>
                </div>
                <div>
                    <p class="text-gray-200">Time - {{ date("h:i a", strtotime($schedule->time)) }}</p>
                </div>
            </div>
        </div>
    </div>
   
</div>