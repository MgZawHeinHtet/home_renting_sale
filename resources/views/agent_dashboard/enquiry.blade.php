<x-agent-dashboard-layout>
    <div class="grid grid-cols-3 gap-5">
        @foreach ($enquries as $enqury)
              {{-- enquriy card --}}
        <div class="border border-yellow-600 p-5 rounded space-y-5  {{ !$enqury->is_read ? 'bg-slate-600 bg-opacity-50':'' }}">
           
            <div class="h-[50%] overflow-y-scroll  no-scrollbar ">
                <p class="text-white p-2 bg-slate-600 rounded inline-block"><span>{{ $enqury->name }}</span> |  <span>{{ $enqury->email }}</span></p>
                <p class="text-gray-300 tracking-wide py-5">{{ $enqury->description }}</p>
            </div>
            
            @php
                $property = $enqury->property()->withTrashed()->first();
            @endphp
            <div class="border-t space-y-3 pt-5">
                <h6 class="text-gray-300">Property Detail</h6>
                <p class="text-gray-400 text-sm">Name :  {{ $property->title }}</p>
                <p class="text-gray-400 text-sm">Address : {{ $property->township }},{{ $property->region }}</p>
                <div class="text-gray-400 flex justify-between gap-2">
                    <a class="block border px-3 py-2 flex-1" href="/properties/{{ $property->id }}/sale"><i class="fas fa-search text-yellow-600"></i> View</a>
                    <form action="/adminAgents/enquries/{{ $enqury->id }}/read" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="border px-3 py-2 flex-1"><i class="fa-solid fa-check text-green-600"></i>  Mark As Read</button>
                    </form>
                    <form action="/adminAgents/enquries/{{ $enqury->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="border px-3 py-2 flex-1"><i class="fas fa-trash text-red-700"></i> Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
      
    </div>
</x-agent-dashboard-layout>