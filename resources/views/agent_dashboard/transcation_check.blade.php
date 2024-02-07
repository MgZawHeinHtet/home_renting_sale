<x-agent-dashboard-layout>
    <div class="w-[540px] bg-home-900 mx-auto shadow-sm px-6 py-4 rounded-lg">

        <h3 class="text-xl text-white tracking-wide underline underline-offset-8">Transcation Number -  {{ $transcation->transcation_number }}</h3>
        {{-- transcation detail --}}
        <div class="space-y-3 py-5">
            <div class="flex gap-1">
                <h4 class="w-[150px]  tracking-wide text-white">Account Name  </h4>
                <p class="flex-1 text-white"><span class="mr-4">-</span>     Zaw Hein htet</p>
            </div>
            <div class="flex gap-1">
                <h4 class="w-[150px]  tracking-wide text-white">Transcation Price </h4>
                <p class="flex-1 text-white"><span class="mr-4">-</span>      34440 kyats</p>
            </div>
            <div class="flex gap-2">
                @if ($transcation->status == 'pending')
                    
                <form action="/adminAgents/transcation/{{ $transcation->id }}/correct" method="POST">
                    @csrf
                    <button class="px-6 py-3 bg-green-600 rounded-lg text-white">Correct Transcation</button>
                </form>
                <form action="/adminAgents/transcation/{{ $transcation->id }}/wrong" method="POST">
                    @csrf
                    <button class="px-6 py-3 bg-red-600 rounded-lg text-white">Wrong Transcation</button>
                </form>
                @else
                    <p class="text-orange-600 tracking-wide">You {{ $transcation->status }}ed this transcation.</p>
                @endif
            </div>
            <div class="pt-5">
                <img class="h-[400px] w-full object-cover rounded-lg" src="{{ $transcation->transcation_photo }}" alt="">
            </div>

           
        </div>
    </div>
</x-agent-dashboard-layout>