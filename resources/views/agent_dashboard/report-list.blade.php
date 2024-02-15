<x-agent-dashboard-layout>
    <h4 class="text-xl text-gray-300 tracking-wide underline underline-offset-8">Report list</h4>
   
    <div class="mt-5 space-y-2">
        <div class="w-[1000px] px-2 p-4 flex gap-2">
            <div class="w-[4%]"></div>
            <div class="w-[30%]">
                <p class="text-gray-300 capitalize">Username and Email</p>
            </div>
            <div class="w-[40%]">
                <p class="text-gray-300 capitalize">Reason To report property</p>
            </div>
            <div class="">
                <p class="text-gray-300 capitalize">Action to user</p>
            </div>
            
        </div>
        @foreach ($reports as $report)
        @php
            $property = $report->property()->withTrashed()->first();
           
        @endphp
        <div class="bg-home-900 shadow-lg p-4 px-2 rounded-lg w-[1000px] relative flex items-center gap-2">
            <div class="w-[4%] px-3">
                @if ($report->is_response)
                    
                <i class="fas fa-check text-xl text-green-600"></i>
                @else
                <i class="text-gray-300 text-xl fas fa-ellipsis-v"></i>
                @endif
            </div>
            <div class="w-[30%]  flex items-center gap-3">
                <img class="w-14 h-14 rounded-full object-cover " src="{{ $report->user->profile_img }}" alt="">
                <div>

                    <p class="text-gray-300 capitalize">{{ $report->user->name }}</p>
                    <p class="text-gray-300 ">{{ $report->user->email }}</p>
                </div>
            </div>
            <div class="w-[40%]">
                <p class="text-red-600">{{ $report->message }}</p>
                <a href="/properties/{{ $property->id }}/sale" class="text-blue-300 underline underline-offset-8">For {{ $property->title }}</a>
            </div>
            <div class="flex gap-2">
                <button class="bg-orange-700 px-3 text-gray-300 py-2 rounded"><i class="fas fa-exclamation-triangle"></i> warning</button>
               
                @if (!$property->trashed())
                <form method="POST" action="/adminAgents/report_list/{{ $report->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-700 px-3 text-gray-300 py-2 rounded"><i class="fas fa-trash"></i> Property</button>
                </form>
                @else
                <form method="POST" action="/adminAgents/report_list/{{ $report->id }}">
                    @csrf
                    <button class="bg-red-700 px-3 text-gray-300 py-2 rounded"><i class="fas fa-recycle"></i> Restore</button>
                </form>
                @endif
            </div>
        </div>
        @endforeach
       
    </div>
</x-agent-dashboard-layout>