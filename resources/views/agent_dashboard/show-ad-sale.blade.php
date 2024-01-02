<x-agent-dashboard-layout>
    <div class="w-full space-y-5">
        <h4 class="text-white text-xl capitalize underline underline-offset-8">My Advertisments-for sale</h4>
        <h6 class="text-white text-xl tracking-wider ">Total Sale Ads - (<span class="text-yellow-600">{{ $properties->count() }}</span>)</h6>

        <div class="grid grid-cols-2 gap-5">
         @foreach ($properties as $property)
         <x-show-sale-card :property="$property"></x-show-sale-card>
         @endforeach
        

        </div>
    </div>
</x-agent-dashboard-layout>