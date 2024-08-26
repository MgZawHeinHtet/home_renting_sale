@props(['type', 'amenities', 'rules', 'property' => null])

<div class="w-[900px] p-5 py-8 bg-home-900 mx-auto rounded">
    <form class="text-white"
        action="{{ $type === 'create' ? '/adminAgents/post-ad-rent' : '/adminAgents/show-ad-rent/' . $property->id }}"
        method="POST">
        @csrf
        @if ($type === 'edit')
            @method('PATCH')
        @endif
        <h2 class="text-center text-white text-xl tracking-wide mb-5 capitalize">For Rent Property {{ $type }}
        </h2>
        <div class="grid grid-cols-2 gap-5 capitalize t ext-white">
            <div class="space-y-2 col-span-2">
                <label class="block text-white" for="">Property Title</label>
                <input value="{{ old('title', $property?->title) }}" name="title" type="text"
                    class="w-full bg-home-600 rounded">
                <x-error name="title"></x-error>
            </div>
            <div class="space-y-2">
                <label class="block text-white" for="">region,State</label>
                <select name="region" class="p-2 w-full region  bg-home-600 rounded" id="">
                    <option value="">Pls select one</option>
                </select>
                <x-error name="region"></x-error>
            </div>
            <div class="space-y-2">
                <label class="block text-white" for="">township</label>
                <select name="township" class="p-2 w-full township  bg-home-600 rounded" id="">
                    <option value="" selected>Pls select one</option>

                </select>
                <x-error name="township"></x-error>
            </div>
            <div class="space-y-2">
                <label class="block text-white" for="">Category</label>
                @php
                    $property_type = old('type', $property?->category);
                @endphp
                <select class="p-2 w-full  bg-home-600 rounded" name="category" id="">
                    <option value="">Pls select one</option>
                    <option class="capitalize" {{ $property_type === 'apartment' ? 'selected' : '' }} value="apartment">
                        apartment
                    </option>
                    <option class="capitalize" {{ $property_type === 'mini condo' ? 'selected' : '' }}
                        value="mini condo">mini
                        condo
                    </option>
                    <option class="capitalize" {{ $property_type === 'condo' ? 'selected' : '' }} value="condo">condo
                    </option>
                    <option class="capitalize" {{ $property_type === 'house' ? 'selected' : '' }} value="house">house
                    </option>
                    <option class="capitalize" {{ $property_type === 'land' ? 'selected' : '' }} value="land">land
                    </option>

                </select>
                <x-error name="category"></x-error>
            </div>
            <div class="space-y-2">
                <label class="block text-white" for="">Rent Price Per Month</label>
                <input value="{{ old('price', $property?->price) }}" name="price" type="text"
                    class="w-full bg-home-600 rounded">
                <x-error name="price"></x-error>
            </div>

            <div>
                <div class="grid grid-cols-2 gap-2">

                    <div class="space-y-2">
                        <label class="block text-white" for="">Limit amount of people</label>
                        <input value="{{ old('people', $property?->people) }}" name="people" type="number"
                            class="w-full bg-home-600 rounded">
                        <x-error name="people"></x-error>
                    </div>
                    <div class="space-y-2">
                        <label class="block text-white" for="">Map</label>
                        <input value="{{ old('map', $property?->map) }}" name="map" type="text"
                            class="w-full bg-home-600 rounded" placeholder="eg-34324.324,32423">
                        <x-error name="map"></x-error>
                    </div>

                </div>
            </div>
            <div>
                <div class="grid grid-cols-2 gap-2">

                    <div class="space-y-2">
                        <label class="block text-white" for="">area</label>
                        <input value="{{ old('area', $property?->area) }}" name="area" type="text"
                            class="w-full bg-home-600 rounded">
                        <x-error name="area"></x-error>
                    </div>
                    <div class="space-y-2">
                        <label class="block text-white" for="">area unit</label>
                        <select name="area_unit" class="p-2 w-full bg-home-600 rounded" name="areaType" id="area_type">
                            <option value="" selected>Pls select one</option>
                            <option value="sqft"
                                {{ old('area_unit', $property?->area_unit) == 'sqft' ? 'selected' : '' }}>
                                sqrt</option>
                            <option value="acre"
                                {{ old('area_unit', $property?->area_unit) == 'acre' ? 'selected' : '' }}>acre
                            </option>
                        </select>
                        <x-error name="area_unit"></x-error>
                    </div>

                </div>
            </div>

            <div class="space-y-2 col-span-2">
                <label class="block text-white" for="">Number of Bathrooms </label>
                <input value="{{ old('bathroom', $property?->bathroom) }}" name="bathroom" type="number"
                    class="w-full bg-home-600 rounded">
                <x-error name="bathroom"></x-error>
            </div>
            <div class="space-y-2 col-span-2">
                <label class="block text-white" for="">Number of Bedrooms </label>

                <input value="{{ old('bedroom', $property?->bedroom) }}" name="bedroom" type="number"
                    class="w-full bg-home-600 rounded">
                <x-error name="bedroom"></x-error>
            </div>
            <div class="space-y-2 col-span-2">
                <label class="block text-white" for="">Description </label>
                <textarea id="tiny" class="w-full bg-home-600 rounded" name="description" id="" cols="30"
                    rows="10"> {{ old('description', $property?->description) }}</textarea>
                <x-error name="description"></x-error>
            </div>

            <div class="space-y-5 col-span-2">
                <label class="block text-lg text-white" for="">Amenities </label>
                <div class="flex flex-wrap gap-6">
                    @php
                        $oldAmenities = json_decode($property?->amenities);

                    @endphp
                    @foreach ($amenities as $key => $amenity)
                        <div>
                            <input value="<i class='{{ $amenity->icon }} mr-1'></i>{{ $amenity->title }}"
                                type="checkbox" name="amenities[]" @if (isset($oldAmenities))
                            @if (!is_string($oldAmenities))
                                
                            @foreach ($oldAmenities as $oldAmenity)
                                {{ $oldAmenity === "<i class='$amenity->icon mr-1'></i>$amenity->title" ? 'checked' : '' }}
                            @endforeach
                            @endif
                    @endif

                    >
                    <label for="">{{ $amenity->title }}</label>
                </div>
                @endforeach
            </div>
        </div>
        <hr class="col-span-2">
        <div class="space-y-5 col-span-2">
            <label class="block text-lg text-white" for="">House rules </label>
            <div class="flex flex-wrap gap-6">
                @php
                    $oldRules = json_decode($property?->house_rules);

                @endphp
                @foreach ($rules as $key => $rule)
                    <div>
                        <input value="<i class='{{ $rule->icon }}  mr-1'></i>{{ $rule->title }}" type="checkbox"
                            name="house_rules[]" @if (isset($oldRules))
                            @if (!is_string($oldRules))
                        @foreach ($oldRules as $oldRule)
                            {{ $oldRule === "<i class='$rule->icon  mr-1'></i>$rule->title" ? 'checked' : '' }}
                        @endforeach
                        @endif
                @endif
                <label for="">{{ $rule->title }}</label>
            </div>
            @endforeach
        </div>
</div>

<div class="space-y-2 col-span-2">
    <label class="block text-white" for="">What's nearby </label>
    <input value="{{ old('nearby', $property?->nearby) }}" name="nearby" type="text"
        class="w-full py-5 bg-home-600 rounded" placeholder="eg.20km from shop,47km from school">
    <x-error name="nearby"></x-error>
</div>

<div class="space-y-2">
    <label class="block text-white" for="">Check-In(24hour format)</label>
    <input value="{{ old('check_in', $property?->check_in) }}" name="check_in" type="text"
        class="w-full bg-home-600 rounded" placeholder="eg-12:00">
    <x-error name="check_in"></x-error>

</div>
<div class="space-y-2">
    <label class="block text-white" for="">Check-Out (24hour format)</label>
    <input value="{{ old('check_out', $property?->check_out) }}" name="check_out" type="text"
        class="w-full bg-home-600 rounded" placeholder="eg-12:00">
    <x-error name="check_out"></x-error>
</div>
</div>
<button
    class="fixed bottom-10 animate-bounce right-10 w-20 h-20 shadow text-white rounded-full bg-yellow-600">Submit</button>
</form>
</div>

@section('javascript')
    <script>
        const region = document.querySelector('.region');
        const township = document.querySelector('.township')
        var config = {
            cUrl: 'https://api.countrystatecity.in/v1/countries',
            ckey: 'NHhvOEcyWk50N2Vna3VFTE00bFp3MjFKR0ZEOUhkZlg4RTk1MlJlaA=='
        }

        let old_region = '{{ $property?->region }}';

let old_township = '{{ $property?->township }}';
        fetch(`${config.cUrl}/mm/states`, {
                headers: {
                    "X-CSCAPI-KEY": config.ckey
                }
            })
            .then(response => response.json())
            .then(data => {


                data.forEach(state => {
                    region.innerHTML +=
                        `<option ${ old_region == state.name ? 'selected' : '' } data-iso2="${state.iso2}" value="${ state.name }"> ${state.name}</option>`

                })
            })

        region.addEventListener('click', function(e) {
            e.preventDefault();
            const component = e.target.options[e.target.selectedIndex];

            const selectedRegion = e.target.options[e.target.selectedIndex].dataset.iso2;


            detachCity(selectedRegion)

        })

        function detachCity(region) {
            fetch(`${config.cUrl}/mm/states/${region}/cities`, {
                    headers: {
                        "X-CSCAPI-KEY": config.ckey
                    }
                })
                .then(response => response.json())
                .then(data => {
                    township.innerHTML = ""

                    data.forEach(state => {
                        township.innerHTML += `<option ${ old_township == state.name ? 'selected' : '' }  value="${ state.name }"> ${state.name}</option>`

                    })
                })
        }
    </script>
@endsection

@yield('javascript')
