<x-agent-dashboard-layout>
    <div class="w-[80%] ">

        <h4 class="text-gray-300 text-xl tracking-wide underline underline-offset-8 mb-10">Credit Point Add</h4>
        
        <div class="space-y-3 p-5 bg-home-900 rounded-lg">
            <p class="text-gray-300">- With only <span class="text-yellow-600">(5)</span> Credit Point, you can buy listing  <span class="text-yellow-600">10 chance</span> . </p>
            <p class="text-gray-300">- With only <span class="text-yellow-600">(1)</span> Credit Point, you can make Featured post for <span class="text-yellow-600">1 Week</span> . </p>
            <p class="text-gray-300">- With <span class="text-yellow-600">(4)</span> Credit Points, you can make Featured post for <span class="text-yellow-600">1 Month</span> .
            </p>
            <p class="text-gray-300">- Featured posts get more (Views) than normal posts.
                
            </p>
        </div>

        <div class="grid grid-cols-3 mt-10 gap-5">
            @foreach ($plans as $plan)
                <x-plan-card :plan="$plan"></x-plan-card>
            @endforeach
        </div>
    </div>
</x-agent-dashboard-layout>
