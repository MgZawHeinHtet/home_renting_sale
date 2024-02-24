<x-layout>

    <div
        class="hidden parent-container w-screen h-screen bg-black bg-opacity-55 z-50 fixed top-0 right-0  justify-center items-center">
        <iframe class="rounded w-[800px]" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d119362.00169830266!2d97.0337141!3d20.788757099999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smm!4v1708267180389!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    {{-- agent detail  --}}
    <section class="px-28 py-5">
        <div class="flex border-b border-b-home-600 items-center justify-between">
            <div class="">
                {{-- comapny logo and quote  --}}
                <div class="flex py-10 items-center gap-10">
                    <div class="w-40 h-40 rounded-full  outline outline-home-900 flex items-center justify-center">
                        <img class="w-36 h-36 rounded-full object-cover" src="{{ $agent->company_logo }}"
                            alt="">
                    </div>
                    <div class="space-y-3">
                        <h2 class="text-2xl tracking-wide text-home-900 font-semibold">
                            {{ $agent->company_name }}<span><i class="fas fa-crown text-yellow-600"></i></span></h2>
                        <p class="text-sm font-thin"><i class="fa-solid fa-phone"></i> {{ $agent->phone }}</p>
                        @if ($agent->facebook_link)
                            <p class="text-sm font-thin"><i class="fa-brands fa-facebook-f"></i>
                                {{ $agent->facebook_link }}</p>
                        @endif
                        <p><i class="fa-solid fa-location-dot"></i> {{ $agent->address }} </p>
                        @if ($agent->isVerified)
                            <p class="px-4 py-2 bg-home-900 inline-block text-white rounded">Verified Agency <img
                                    class="inline-block w-6 h-6" src="{{ asset('assets/verified.png') }}"
                                    alt="">
                            </p>
                        @endif
                        <p class="w-[600px]">

                            {{ $agent->description }}
                        </p>
                    </div>

                </div>
            </div>
            <div class="space-y-3">
                <p class="text-lg"><span class="w-16 inline-block capitalize"><i
                            class="fa-solid fa-house text-yellow-600"></i> rent</span>| Total Ads :
                    {{ $agent->propertySale->count() }}</p>
                <p class="text-lg"><span class="w-16 inline-block capitalize"><i
                            class="fa-solid fa-shop text-yellow-600"></i> Sell</span>| Total Ads :
                    {{ $agent->propertySale->count() }}</p>
                <button class="location-btn bg-home-900 text-white w-full text-center py-3 outline outline-yellow-600 rounded">View
                    Location<i class="fa-solid fa-map ml-2 text-yellow-600"></i></button>
            </div>
        </div>

        {{-- search bar and filter  --}}
        <div class="py-10 border-b border-b-home-600">
            <form class="flex justify-evenly" action="">

                <select class="w-40 border capitalize border-home-900 p-4 rounded " name="" id="">
                    <option value="">sell/rent</option>
                    <option value="rent">rent</option>
                    <option value="rent">sell</option>
                </select>

                <select name="houseType" class="w-40 border capitalize border-home-900 p-4 rounded " name="" id="">
                    <option value="">any property</option>
                    <option value="apartment">apartment</option>
                    <option value="condo">condo</option>
                    <option value="private house">private house</option>
                    <option value="shop,office">shop,office</option>
                </select>

                <input value="{{ request('region') }}" name="region" placeholder="any region " class="w-40 border capitalize placeholder:text-black border-home-900 p-4 rounded " name="" id="">
                   
                

                <input value="{{ request('township') }}" placeholder="Any Township" name="township" class="w-40 placeholder:text-home-900 border capitalize border-home-900 p-4 rounded " name="" id="">
                    

                <input value="{{ request('minPrice') }}" name="minPrice" placeholder="Minimun Price" class="placeholder:text-home-900 w-40 border capitalize border-home-900 p-4 rounded " name="" id="">
                    

                <input value="{{ request('maxPrice') }}" name="maxPrice" placeholder="Maximun Price" class="w-40 placeholder:text-home-900 border capitalize border-home-900 p-4 rounded" name="" id="">
                    

                <input value="{{ request('search_input') }}" name="search_input" class="w-40 border-home-900 border p-4 rounded" type="text" placeholder="Property Id">

                <button class="w-40 text-white text-center py-3 bg-yellow-600 rounded uppercase">search</button>

            </form>
        </div>

        {{-- related rent and sell post  --}}
        <div class="grid grid-cols-4 gap-5 items-baseline">
            {{-- left side  --}}
            <div class="col-span-3">
                {{-- filter bar  --}}
                <div class="flex justify-between items-center py-8 mb-5">
                    <div>
                        <a href="/agents/{{ $agent->id }}/sale" class="text-xl tracking-wide underline-offset-8   {{ $type=='sale'? "underline decoration-yellow-600" : '' }}">Sale</a> |
                        <a href="/agents/{{ $agent->id }}/rent" class="text-xl tracking-wide underline-offset-8 {{ $type=='rent'? "underline decoration-yellow-600" : '' }} ">Rent</a>

                    </div>
                    <div>
                        <label class="text-lg mr-4" for="sort-box">Sort by</label>
                        <select class="w-52 px-4 py-2 border-l-2 border-l-home-900 border" name=""
                            id="sort-box">
                            <option value="recommended">recommended</option>
                            <option value="high-low">Price (High - Low)</option>
                            <option value="low-high">Price (Low - High)</option>
                            <option value="new-old">Date (New - Old)</option>
                            <option value="new-old">Date (Old - New)</option>
                        </select>
                    </div>
                </div>

                {{-- card container --}}
                <div class="space-y-10">
                    {{-- single card --}}
                    @foreach ($properties as $property)
                        <x-agent-product-card :type="$type" :logo="$agent->company_logo" :property="$property"></x-agent-product-card>
                    @endforeach
                    {{ $properties->links() }}
                </div>
            </div>

            {{-- right side  --}}
            <div>
                <x-alert></x-alert>
                <form action="/agent/{{ $agent->id }}/enquiry" method="POST">
                    @csrf

                    <div class="p-3 py-4 shadow-lg space-y-3">
                        <p class="py-3 border-y  border-y-home-900 text-home-900 font-semibold text-xl ">Send Enquiry</p>
                        <div>
                            <label class="block" for="">Name<span class="text-yellow-600">*</span></label>
                            <input name="name" class="border rounded w-full px-2 py-3" type="text" placeholder="type your name">
                        </div>
                        <div>
                            <label class="block" for="">Email<span class="text-yellow-600">*</span></label>
                            <input name="email" class="border rounded w-full px-2 py-3" type="text" placeholder="name@gmail.com">
                        </div>
                        <div>
                            <label class="block" for="">Phone available<span
                                    class="text-yellow-600">*</span></label>
                            <input name="phone" class="border rounded w-full px-2 py-3" type="text" placeholder="eg.332434324">
                        </div>
                        <div>
                            <label class="block" for="">Message<span class="text-yellow-600">*</span></label>
                            <textarea name="description" class="border w-full" name="" id="" cols="20" rows="5"></textarea>
                        </div>
                        <div class="flex items-start gap-3">
                            <input class="h-7 w-7 bg-home-900" type="checkbox">
                            <label class="block text-slate-500 " for="">
                                Please send me latest news,updates & special offers
                            </label>
                        </div>
                        <div>
                            <button class="w-full py-3 bg-home-600 rounded text-white">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
</x-layout>


@section('javascript')
    <script>
        const container = document.querySelector('.parent-container') ;
        const locationBtn = document.querySelector('.location-btn');
        
        container.addEventListener('click', function(){
            this.classList.remove('flex');
            this.classList.add('hidden');
        });
        locationBtn.addEventListener('click',function(){
            container.classList.remove('hidden');
            container.classList.add('flex');
        })
        
    </script>
@endsection

@yield('javascript')
