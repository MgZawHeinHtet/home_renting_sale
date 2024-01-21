@props(['type', 'amenities','rules'])

<div class="w-[900px] p-5 py-8 bg-home-900 mx-auto rounded">
    <form class="text-white" action="/adminAgents/post-ad-rent" method="POST">
        @csrf
        <h2 class="text-center text-white text-xl tracking-wide mb-5">For Rent Property</h2>
        <div class="grid grid-cols-2 gap-5 capitalize t ext-white">
            <div class="space-y-2 col-span-2">
                <label class="block text-white" for="">Property Title</label>
                <input   name="title" type="text" class="w-full bg-home-600 rounded">
                <x-error name="title"></x-error>
            </div>
            <div class="space-y-2">
                <label class="block text-white" for="">region,State</label>
                <select name="state" class="p-2 w-full  bg-home-600 rounded" id="">
                    <option value="" >Pls select one</option>
                    <option value="yangon" >Yangon</option>
                </select>
                <x-error name="state"></x-error>
            </div>
            <div class="space-y-2">
                <label class="block text-white" for="">township</label>
                <select name="township" class="p-2 w-full  bg-home-600 rounded"  id="">
                    <option value="" selected>Pls select one</option>
                    <option value="hmawbi">Hmawbi</option>
                </select>
                <x-error name="township"></x-error>
            </div>
            <div class="space-y-2">
                <label class="block text-white" for="">Category</label>
                <select class="p-2 w-full  bg-home-600 rounded" name="category" id="">
                    <option value="" >Pls select one</option>
                    <option value="apartment">Apartment</option>
                </select>
                <x-error name="category"></x-error>
            </div>
            <div class="space-y-2">
                <label class="block text-white" for="">Rent Price Per Month</label>
                <input name="price" type="text" class="w-full bg-home-600 rounded">
                <x-error name="price"></x-error>
            </div>
            
            <div>
                <div class="grid grid-cols-2 gap-2">
    
                    <div class="space-y-2">
                        <label class="block text-white" for="">Limit amount of people</label>
                        <input name="people" type="number" class="w-full bg-home-600 rounded">
                        <x-error name="people"></x-error>
                    </div>
                    <div class="space-y-2">
                        <label class="block text-white" for="">Map</label>
                        <input name="map" type="text" class="w-full bg-home-600 rounded" placeholder="eg-34324.324,32423">
                        <x-error name="map"></x-error>
                    </div>
    
                </div>
            </div>
            <div>
                <div class="grid grid-cols-2 gap-2">
    
                    <div class="space-y-2">
                        <label class="block text-white" for="">area</label>
                        <input name="area" type="text" class="w-full bg-home-600 rounded">
                        <x-error name="area"></x-error>
                    </div>
                    <div class="space-y-2">
                        <label class="block text-white" for="">area unit</label>
                        <select name="area_unit" class="p-2 w-full bg-home-600 rounded" name="areaType" id="area_type">
                            <option value="" selected>Pls select one</option>
                            <option value="l*w">
                                Length x Width</option>
                            <option value="au">Area
                                Unit</option>
                        </select>
                        <x-error name="area_unit"></x-error>
                    </div>
    
                </div>
            </div>
    
            <div class="space-y-2 col-span-2">
                <label class="block text-white" for="">Number of Bathrooms </label>
                <input name="bathroom" type="number" class="w-full bg-home-600 rounded">
                <x-error name="bathroom"></x-error>
            </div>
            <div class="space-y-2 col-span-2">
                <label class="block text-white" for="">Number of Bedrooms </label>
                <input name="bedroom" type="number" class="w-full bg-home-600 rounded">
                <x-error name="bedroom"></x-error>
            </div>
            <div class="space-y-2 col-span-2">
                <label class="block text-white" for="">Description </label>
                <textarea  class="w-full bg-home-600 rounded" name="description" id="" cols="30" rows="10"></textarea>
                <x-error name="description"></x-error>
            </div>
    
            <div class="space-y-5 col-span-2">
                <label class="block text-lg text-white" for="">Amenities </label>
                <div class="flex flex-wrap gap-6">
                    @foreach ($amenities as $amenity)
                        <div>
                            <input value="<i class='{{ $amenity->icon }} mr-1'></i>{{ $amenity->title }}" type="checkbox" name="amenities[]">
                            <label  for="">{{ $amenity->title }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
            <hr class="col-span-2">
            <div class="space-y-5 col-span-2">
                <label class="block text-lg text-white" for="">House rules </label>
                <div class="flex flex-wrap gap-6">
                    @foreach ($rules as $rule)
                        <div>
                            <input value="<i class='{{ $rule->icon }} mr-1'></i>{{ $rule->title }}" type="checkbox" name="house_rules[]">
                            <label for="">{{ $rule->title }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
    
            <div class="space-y-2 col-span-2">
                <label class="block text-white" for="">What's nearby </label>
                <input name="nearby" type="text" class="w-full py-5 bg-home-600 rounded" placeholder="eg.20km from shop,47km from school">
                <x-error name="nearby"></x-error>
            </div>
    
            <div class="space-y-2">
                <label class="block text-white" for="">Check-In(24hour format)</label>
                <input name="check_in" type="text" class="w-full bg-home-600 rounded" placeholder="eg-12:00">
                <x-error name="check_in"></x-error>
    
            </div>
            <div class="space-y-2">
                <label class="block text-white" for="">Check-Out (24hour format)</label>
                <input name="check_out" type="text" class="w-full bg-home-600 rounded" placeholder="eg-12:00">
                <x-error name="check_out"></x-error>
            </div>
        </div>
        <button class="fixed bottom-10 animate-bounce right-10 w-20 h-20 shadow text-white rounded-full bg-yellow-600">Submit</button>
    </form>
</div>


