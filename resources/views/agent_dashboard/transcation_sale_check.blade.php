<x-agent-dashboard-layout>
    <div class="w-[540px] bg-home-900 mx-auto shadow-sm px-6 py-4 rounded-lg">

        <h3 class="text-xl text-white tracking-wide underline underline-offset-8">Transaction Number -  {{ $transcation->transcation_number }}</h3>
        {{-- transcation detail --}}
        <div class="space-y-3 py-5">
            <div class="flex gap-1">
                <h4 class="w-[150px]  tracking-wide text-white">Account Name  </h4>
                <p class="flex-1 text-white"><span class="mr-4">-</span>     {{ $transcation->name }}</p>
            </div>
            <div class="flex gap-1">
                <h4 class="w-[150px]  tracking-wide text-white">Phone  </h4>
                <p class="flex-1 text-white"><span class="mr-4">-</span>     {{ $transcation->phone }}</p>
            </div>
            <div class="flex gap-1">
                <h4 class="w-[150px]  tracking-wide text-white">Billing Number </h4>
                <p class="flex-1 text-white"><span class="mr-4">-</span>      {{ $transcation->billing_number }}</p>
            </div>
            <div class="flex gap-2">
                @if ($transcation->status == 'pending')
                    
                <form action="/adminAgents/transcation/sale/{{ $transcation->id }}/correct" method="POST">
                    @csrf
                    <button class="px-6 py-3 bg-green-600 rounded-lg text-white">Confirm Transaction</button>
                </form>
                <form action="/adminAgents/transcation/sale/{{ $transcation->id }}/wrong" method="POST">
                    @csrf
                    <button class="px-6 py-3 bg-red-600 rounded-lg text-white">Reject Transaction</button>
                </form>
                @else
                    <p class="text-orange-600 tracking-wide"> {{ $transcation->status }}ed this transaction.</p>
                @endif
            </div>
            <div class="pt-5">
                <img class="w-full object-cover rounded-lg" src="{{ $transcation->photo }}" alt="">
            </div>

           
        </div>
    </div>
</x-agent-dashboard-layout>