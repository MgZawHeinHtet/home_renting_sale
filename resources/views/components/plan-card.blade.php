<div class="border p-6 rounded-lg">

    <div class="bg-yellow-700 px-5 pb-2 pt-5 text-center rounded-xl shadow space-y-2">
        <h6 class="text-xl text-gray-300 font-bold uppercase">{{ $plan->level }}</h6>
        <hr>
        <p class="text-gray-300">Plan</p>
        <div class="text-left space-y-2">
            <p class="text-gray-300"><i class="fas fa-star"></i> <span class="font-bold text-lg">{{ $plan->point }}</span> credit point included</p>
            <p class="text-gray-300"><i class="fas fa-star"></i> {{ $plan->discount > 0 ? $plan->discount.'%' : 'No' }} discount</p>
        </div>
        <p class="text-white text-xl"> <span class="{{ $plan->discount > 0 ? 'line-through' : '' }}">{{  $plan->price }}</span>@if($plan->discount > 0)<sup class="text-green-200">{{ $plan->price - ($plan->price * $plan->discount/100) }}</sup>@endif kyats</p>
        <hr>
        <form action="/adminAgents/credit/{{ $plan->id  }}/checkout">

            <button  class="px-6 py-2 bg-gray-300 rounded-lg">Buy</button>
        </form>
    </div>
</div>