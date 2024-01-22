<x-agent-dashboard-layout>
    <h2 class="text-2xl capitalize text-yellow-600 tracking-wide mb-5"> Rent Properties <span class="text-white">list</span></h2>
    <div class="grid grid-cols-4 gap-5">
        @foreach ($properties as $property )
            
        <x-show-rent-card :property="$property"></x-show-rent-card>
        @endforeach
    </div>
</x-agent-dashboard-layout>