<x-agent-dashboard-layout>

    <div class="w-[80%] mx-auto">

        <h4 class="text-2xl text-gray-300 mb-5">Edit Account Information</h4>
        <hr class="mb-5">
    
        <form class="space-y-5" action="/adminAgents/profile" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label class="block text-gray-300 mb-2" for="">Company Name</label>
                <input value="{{ old('company_name',$user?->company_name) }}" name="company_name" class="rounded w-full bg-home-900 outline-none text-white" type="text" placeholder="-">
                <x-error name="company_name"></x-error>
            </div>
            <div>
                <label class="block text-gray-300 mb-2" for="">Name</label>
                <input value="{{ old('name',$user?->name) }}" name="name" class="rounded w-full bg-home-900 outline-none text-white" type="text" placeholder="-">
                <x-error name="name"></x-error>
            </div>
            <div>
                <label class="block text-gray-300 mb-2" for="">Upload Profile Image</label>
                <input name="company_logo" class="rounded w-full bg-home-900 outline-none text-white" type="file" placeholder="-">
                <div class="mt-5 ">
                    <img src="{{ $user?->company_logo }}" alt="NO PHOTO UPLOAD" class="w-28 h-28 rounded border border-dashed p-1 object-cover">
                </div>
            </div>
            <div>
                <label class="block text-gray-300 mb-2"  for="">Main Phone</label>
                <input value="{{ old('phone',$user?->phone) }}" name="phone" class="rounded w-full bg-home-900 outline-none text-white" type="text" placeholder="-">
                <x-error name="phone"></x-error>

            </div>
            <div class="grid grid-cols-3 gap-10">
                <div>
                    <label class="block text-gray-300 mb-2" for="">2nd Contact No(Optional)</label>
                    <input value="{{ old('phone2',$user?->phone2) }}" name="phone2" class="rounded w-full bg-home-900 outline-none text-white" type="text" placeholder="-">
                     
                </div>
                <div>
                    <label class="block text-gray-300 mb-2" for="">3rd Contact No(Optional)</label>
                    <input value="{{ old('phone3',$user?->phone3) }}" name="phone3" class="rounded w-full bg-home-900 outline-none text-white" type="text" placeholder="-">
                </div>
                <div>
                    <label class="block text-gray-300 mb-2" for="">4rd Contact No(Optional)</label>
                    <input value="{{ old('phone4',$user?->phone4) }}" name="phone4" class="rounded w-full bg-home-900 outline-none text-white" type="text" placeholder="-">
                </div>
            </div>
            <div>
                <label class="block text-gray-300 mb-2" for=""> Map Location(Latitude and Logitude)</label>
                <input value="{{ old('location_map',$user?->location_map) }}" name="location_map" class="rounded w-full bg-home-900 outline-none text-white" type="text" placeholder="-">
              
            </div>
            <div>
                <label class="block text-gray-300 mb-2" for="">Address</label>
                <input value="{{ old('address',$user?->address) }}" name="address" class="rounded w-full bg-home-900 outline-none text-white" type="text" placeholder="-">
                <x-error name="address"></x-error>

            </div>
            <div>
                <label class="block text-gray-300 mb-2" for="">Facebook Link</label>
                <input value="{{ old('facebook_link',$user?->facebook_link) }}" name="facebook_link" class="rounded w-full bg-home-900 outline-none text-white" type="text" placeholder="-">
                <x-error name="facebook_link"></x-error>
            </div>
            <div>
                <label class="block text-gray-300 mb-2" for="">Description</label>
                <input value="{{ old('description',$user?->description) }}" name="description" class="rounded w-full bg-home-900 outline-none py-10 text-white" type="text" placeholder="-">
                <x-error name="description"></x-error>
            </div>
            <button class="bg-yellow-600 rounded-lg px-7 py-3 text-white">Save Now!</button>
        </form>
    </div>

</x-agent-dashboard-layout>