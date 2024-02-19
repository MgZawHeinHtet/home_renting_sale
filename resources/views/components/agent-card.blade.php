<a class="block" href="/agents/{{ $agent->id }}">
    <div class="p-6 py-10 border flex items-center gap-10 relative rounded">
        <div class="w-28 h-28 border-home-600 border-2 p-2 lg:rounded-full overflow-hidden">
            <img class="w-full h-full lg:rounded-full object-cover" src="{{ $agent->company_logo }}" alt="">
        </div>
        <div class="space-y-3 ">
            <h4 class="text-xl tracking-wide font-normal">{{ $agent->company_name }}</h4>
            <p class="opacity-90"><i class="fa-solid fa-fax text-yellow-600"></i> Agency | Total Ads : {{ $agent->propertySale->count() }}</p>
            <address class="opacity-90">{{ $agent->address }}</address>
        </div>
        @if($agent->isVerified)
        <div class="absolute top-0 right-0">
            <p class="px-6 py-2 bg-yellow-600 text-white rounded"><i class="fa-solid fa-crown mr-2"></i> Verified</p>
        </div>
        @endif
    </div>
</a>