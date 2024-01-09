@props(['type', 'property' => null])


<div class="w-full p-5">
    <h2 class="text-3xl text-center text-white mb-10 capitalize">
        For Sale {{ $type }}
    </h2>
    <form class="w-[80%]  space-y-5"
        action="{{ $type === 'create' ? '/adminAgents/post-ad-sale' : '/adminAgents/show-ad-sale/' . $property?->id }}"
        method="POST">
        @csrf
        @if ($type === 'edit')
            @method('PATCH')
        @endif
        <div class="flex gap-10">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right" for="">Title</label>
            <div class="flex-1 space-y-2">
                <input value="{{ old('title', $property?->title) }}" name="title" type="text"
                    class="w-full border-l-4 border-l-yellow-600 outline-none">
                <x-error name="title"></x-error>
            </div>
        </div>
        <div class="flex gap-10">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right" for="">Type</label>
            <div class="flex-1 space-y-2">
                @php
                    $property_type = old('type', $property?->type);
                @endphp
                <select class="p-2 w-full border-l-4 border-l-yellow-600 outline-none" name="type"
                    id="property-type">

                    <option value="" selected>Please Select One</option>
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
                    <option class="capitalize" {{ $property_type === 'shop,office' ? 'selected' : '' }}
                        value="shop,office">
                        shop,office</option>
                    <option class="capitalize" {{ $property_type === 'industrial zone' ? 'selected' : '' }}
                        value="industrial zone">
                        industrial zone</option>
                    <option class="capitalize"
                        {{ $property_type === 'hotel,resturant &other business' ? 'selected' : '' }}
                        value="hotel,resturant & other business">hotel,resturant & other business
                    </option>

                </select>
                <x-error name="type"></x-error>
                {{-- if select land  --}}
                <p class="hidden text-white mt-1 noti-text">Please fill one or more fields among Price,Price Per Sqrt
                    ft,Price
                    Per Acre.</p>
            </div>
        </div>

        {{-- type apartment ,mini condo , condo , house --}}

        <div class="hidden gap-10 floor transition-all duration-700">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right" for="">Floor</label>

            <div class="flex-1 space-y-2">
                <select class="w-full border-l-4 border-l-yellow-600  p-2" name="floor" id="">
                    <option value="" selected>pls select floor</option>
                    <option value="1" {{ old('floor', $property?->floor) ? 'selected' : '' }}>1 floor</option>
                    @for ($i = 2; $i <= 20; $i++)
                        <option class="capitalize" value="{{ $i }}"
                            {{ old('floor', $property?->floor) === $i . ' floors' ? 'selected' : '' }}>
                            {{ $i }} floors</option>
                    @endfor
                </select>
                <x-error name="floor"></x-error>
            </div>
        </div>

        <div class="flex gap-10">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right" for="">Price
                Kyats(lakh)</label>
            <div class="flex-1 space-y-2">
                <input name="price" value="{{ old('price', $property?->price) }}" type="text"
                    class="w-full border-l-4 border-l-yellow-600 outline-none">
                <x-error name="price"></x-error>
            </div>
        </div>

        {{-- type land ,industary zone  --}}

        <div class="hidden gap-10 pricePerSqrt">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right" for="">Price Per Sqrt
                Ft(lakh)</label>
            <div class="flex-1 space-y-2">
                <input value="{{ old('pricePerSqrt', $property?->pricePerSqrt) }}" name="pricePerSqrt" type="text"
                    placeholder="optional" class="w-full border-l-4 border-l-yellow-600 outline-none">
                <x-error name="pricePerSqrt"></x-error>
            </div>
        </div>

        <div class="hidden gap-10 pricePerAcre">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right" for="">Price Per Acre
                (lakh)</label>

            <div class="flex-1 space-y-2">
                <input value="{{ old('pricePerAcre', $property?->pricePerAcre) }} name="pricePerAcre" type="text"
                    placeholder="optional" class="w-full border-l-4 border-l-yellow-600 outline-none">
                <x-error name="pricePerAcre"></x-error>
            </div>
        </div>

        {{-- end  --}}
        <div class="flex gap-10">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right" for="">Bank
                Installment</label>

            <div class="flex-1 space-y-2">
                <div class="space-x-2">

                    <input type="radio" name="installment" value=false
                        {{ old('installment', $property?->installment) == false ? 'checked' : '' }}><span
                        class="text-white">No</span><input type="radio" name="installment" value=true
                        {{ old('installment', $property?->installment) == true ? 'checked' : '' }}><span
                        class="text-white">Yes</span>
                </div> <x-error name="installment"></x-error>
            </div>

        </div>
        <div class="flex gap-10">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right" for="">Area
                Type</label>
            <div class="flex-1 space-y-2">

                <select class="p-2 w-full border-l-4 border-l-yellow-600 outline-none" name="areaType" id="area_type">
                    <option value="" selected>Pls select one</option>
                    <option value="l*w" {{ old('areaType', $property?->areaType) == 'l*w' ? 'selected' : '' }}>
                        Length x Width</option>
                    <option value="au" {{ old('areaType', $property?->areaType) == 'au' ? 'selected' : '' }}>Area
                        Unit</option>
                </select>
                <x-error name="areaType"></x-error>
            </div>
        </div>

        {{-- if select area unit  --}}
        <div class="hidden gap-10 area">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right" for="">Area</label>
            <div class="flex-1 space-y-2">
                <input name="area" value="{{ old('area', $property?->area) }}" type="number"
                    class="w-full border-l-4 border-l-yellow-600 outline-none">
                <x-error name="area"></x-error>
            </div>
        </div>

        <div class="hidden gap-10 areaUnit">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right" for="">Area
                Unit</label>
            <div class="flex-1 space-y-2">
                <div class="space-x-2">
                    <input {{ old('areaUnit', $property?->areaUnit) === 'square feet' ? 'checked' : '' }}
                        name="areaUnit" type="radio" value="square feet"><span class="text-white">Square
                        Feet</span>
                    <input {{ old('areaUnit', $property?->areaUnit) === 'acre' ? 'checked' : '' }} name="areaUnit"
                        type="radio" value="acre"><span class="text-white">Acre</span>
                </div> <x-error name="areaUnit"></x-error>
            </div>

        </div>

        {{-- ****** --}}

        {{-- if select length * width  --}}
        <div class="hidden gap-10 widthForm">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right" for="">Width(ft)</label>

            <div class="flex-1 space-y-2">
                <input value="{{ old('width', $property?->width) }}" name="width" type="number"
                    placeholder="eg.12" class="w-full border-l-4 border-l-yellow-600 outline-none">
                <x-error name="width"></x-error>
            </div>

        </div>

        <div class="hidden gap-10 lengthForm">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right"
                for="">length(ft)</label>
            <div class="flex-1 space-y-2">
                <input value="{{ old('length', $property?->length) }}" name="length" type="text"
                    placeholder="eg.12" class="w-full border-l-4 border-l-yellow-600 outline-none">
                <x-error name="length"></x-error>
            </div>
        </div>

        {{-- ****** --}}

        <div class="flex gap-10">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right" for="">Furnished or
                Not</label>
            <div class="flex-1 space-y-2">
                <select class="p-2 w-full border-l-4 border-l-yellow-600 outline-none" name="furnished"
                    id="">
                    <option class="capitalize" value="" selected>Pls select one</option>
                    <option class="capitalize"
                        {{ old('furnished', $property?->furnished) === 'not furnished' ? 'selected' : '' }}
                        value="not furnished">not furnished</option>
                    <option class="capitalize"
                        {{ old('furnished', $property?->furnished) === 'half furnished' ? 'selected' : '' }}
                        value="half furnished">half furnished</option>
                    <option class="capitalize"
                        {{ old('furnished', $property?->furnished) === 'fully furnished' ? 'selected' : '' }}
                        value="fully furnished">fully furnished</option>
                </select>
                <x-error name="furnished"></x-error>
            </div>
        </div>

        <div class="flex gap-10">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right" for="">Bedroom</label>
            <div class="flex-1 space-y-2">
                <select class="p-2 w-full border-l-4 border-l-yellow-600 outline-none" name="bedroom" id="">
                    <option value="">not included</option>
                    <option value="1"
                        {{ old('bedroom', $property?->bedroom) === $i . ' rooms' ? 'selected' : '' }}>1 room</option>
                    @for ($i = 2; $i <= 20; $i++)
                        <option value="{{ $i }}"
                            {{ old('bedroom', $property?->bedroom) === $i . ' rooms' ? 'selected' : '' }}>
                            {{ $i }} rooms</option>
                    @endfor
                </select>
                <x-error name="bedroom"></x-error>
            </div>

        </div>

        <div class="flex gap-10">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right" for="">Bathroom</label>
            <div class="flex-1 space-y-2">
                <select class="p-2 w-full border-l-4 border-l-yellow-600 outline-none" name="bathroom"
                    id="">
                    <option value="">not included</option>
                    <option value="1"
                        {{ old('bathroom', $property?->bathroom) === $i . ' rooms' ? 'selected' : '' }}>1 room</option>
                    @for ($i = 2; $i <= 20; $i++)
                        <option value="{{ $i }}"
                            {{ old('bathroom', $property?->bathroom) === $i . ' rooms' ? 'selected' : '' }}>
                            {{ $i }} rooms</option>
                    @endfor
                </select>
                <x-error name="bedroom"></x-error>
            </div>

        </div>

        <div class="flex gap-10">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right" for="">Region
                ,State</label>
            <div class="flex-1 space-y-2">
                <select class="p-2 w-full border-l-4 border-l-yellow-600 outline-none" name="region" id="">
                    <option value="yangon">Yangon Region</option>
                </select>
                <x-error name="region"></x-error>
            </div>
        </div>

        <div class="flex gap-10">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right" for="">Township</label>

            <div class="flex-1 space-y-2">
                <select name="township" class="p-2 w-full border-l-4 border-l-yellow-600 outline-none" name=""
                    id="">
                    <option value="yangon">Yangon Region</option>
                    <option value="mandalay">sdaf Region</option>
                    <option value="jsdakfds">er Region</option>
                    <option value="yansadfon">sdag Region</option>
                </select>
                <x-error name="township"></x-error>
            </div>
        </div>

        <div class="flex gap-10">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right" for="">Contact Phone
                No.</label>
            <div class="flex-1 space-y-2">
                <input value="{{ old('phoneNumber', $property?->phoneNumber) }}" name="phoneNumber" type="text"
                    placeholder="" class="w-full border-l-4 border-l-yellow-600 outline-none">
                <x-error name="phoneNumber"></x-error>
            </div>
        </div>

        <div class="flex gap-10">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right"
                for="">Description</label>
            <div class="flex-1 space-y-2">
                <textarea name="description" id="" cols="20" rows="8"
                    class="w-full border-l-4 border-l-yellow-600 outline-none">{{ old('description', $property?->description) }}</textarea>
                <x-error name="description"></x-error>
            </div>

        </div>
        <div class="flex gap-10">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right" for="">Google Map
                Location</label>
            <div class="flex-1 space-y-2">
                <div class="space-x-2">
                    <input class="showMap" name="map" type="radio" value=false checked
                        {{ old('map', $property?->map) === 'false' ? '' : '' }}><span class="text-white">NO</span>
                    <input class="showMap" name="map" type="radio" value=true
                        {{ old('map', $property?->map) === 'true' ? 'checked' : '' }}><span
                        class="text-white">Yes</span>
                </div>
                <x-error name="showMap"></x-error>
            </div>

        </div>
        <div class="hidden gap-10 mapForm">
            <label class="w-[30%] text-white font-slate-800 tracking-wide text-right" for="">Location</label>
            <div class="flex-1 space-y-2">
                <input value="{{ old('location', $property?->location) }}" name="location"
                    class="w-full border-l-4 border-l-yellow-600 outline-none  ring-0" type="text"
                    placeholder="Enter latitude and longigtude(eg.12323,23232)"> <x-error name="location"></x-error>
            </div>

        </div>
        <div class="flex gap-10">
            <div class="w-[30%]"></div>

            <button
                class="flex-1 shadow-lg rounded-lg p-3 bg-yellow-600 uppercase text-lg text-white">{{ $type }}</button>
        </div>
    </form>
</div>

@section('javascript')
    <script>
        const type = document.getElementById('property-type');
        const floor = document.querySelector('.floor');
        const pricePerSqrt = document.querySelector('.pricePerSqrt');
        const pricePerArce = document.querySelector('.pricePerAcre');
        const landAndIndustrial = document.querySelector('.noti-text');
        const areaType = document.querySelector('#area_type');
        const area = document.querySelector('.area');
        const areaUnit = document.querySelector('.areaUnit');
        const widthForm = document.querySelector('.widthForm');
        const lengthForm = document.querySelector('.lengthForm');
        const mapRadio = document.querySelectorAll('.showMap');
        const mapForm = document.querySelector('.mapForm');


        //if type change
        type.addEventListener('change', function(e) {

            e.preventDefault();

            const property_type = e.target.value;

            showOrHideForType(property_type)

        })

        //if type of area change


        areaType.addEventListener('change', function(e) {

            e.preventDefault();

            const selectType = e.target.value;

            showOrHideForArea(selectType);

        })

        // radio btn for map 
        mapRadio.forEach((map, index) => {
            map.addEventListener('click', function(e) {
                const selected = e.target.value;
                showOrHideForMap(selected)
            })
        })

        // reusable function 
        const closeForm = function(item) {

            if (!item.classList.contains('hidden')) {
                item.classList.add('hidden')
            }
        }

        const showForm = function(item) {
            item.classList.add('flex');
            item.classList.remove('hidden')
        }

        const showOrHideForArea = function(selectType) {
            if (selectType === "l*w") {
                showForm(lengthForm);
                showForm(widthForm)
            } else {
                closeForm(lengthForm)
                closeForm(widthForm)
            }

            if (selectType === "au") {
                showForm(area);
                showForm(areaUnit);
            } else {
                closeForm(area);
                closeForm(areaUnit)
            }
        }

        const showOrHideForType = function(property_type) {
            if (property_type === 'apartment' || property_type === "mini condo" || property_type === "condo") {
                showForm(floor)
            } else {
                closeForm(floor)
            }

            if (property_type === 'land' || property_type === "industrial zone") {
                showForm(pricePerArce)
                showForm(pricePerSqrt)
                showForm(landAndIndustrial)
            } else {
                closeForm(pricePerArce);
                closeForm(pricePerSqrt)
                closeForm(landAndIndustrial)
            }
        }

        const showOrHideForMap = function(selected) {
            if (selected === 'true') {
                showForm(mapForm)
            } else {
                closeForm(mapForm)
            }
        }

        const oldAreaType = '{{ old('areaType', $property?->areaType) }}';

        if (oldAreaType) showOrHideForArea(oldAreaType)

        const oldType = '{{ old('type', $property?->type) }}'

        if (oldType) showOrHideForType(oldType)

        const oldMap = '{{ old('map', $property?->map) }}';

        if (oldMap) showOrHideForMap(oldMap)
    </script>
@endsection

@yield('javascript')
