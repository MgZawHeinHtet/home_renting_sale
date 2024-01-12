<x-profile-layout>
    <div class="space-y-5 mt-8 relative">
        <h6 class="uppercase text-sm font-semibold text-gray-400">Personal Setting /</h6>
        <h4 class="text-4xl font-bold text-white tracking-wide">Account</h4>

        <div class="absolute top-0 right-0">
            <button class="setting-toogle outline-none border-none hover:animate-spin"><i
                    class="fa fa-cog text-4xl text-yellow-600" aria-hidden="true"></i>
            </button>
        </div>

        {{-- profile-show  --}}
        <div class="profile-show">

            <div class="mb-10 flex gap-10 items-center">
                <div><img class="w-36 h-36 rounded-full shadow object-cover ring-1 p-3 ring-yellow-600"
                        src="{{ $user->profile_img }}" alt=""></div>

            </div>

            <div class="grid grid-cols-2 w-[75%] gap-x-12 gap-y-5">
                <div class="col-span-1">
                    <label class="block mb-3 uppercase font-semibold tracking-wide text-gray-400" for="">Full
                        Name</label>
                    <p class="text-base tracking-wide text-gray-500 w-full py-3 ring-1 ring-slate-400 rounded-lg px-3">
                        {{ $user->name }}</p>
                </div>
                <div>
                    <label class="block mb-3 uppercase font-semibold tracking-wide text-gray-400"
                        for="">Email</label>
                    <p class="text-base tracking-wide text-gray-500 w-full py-3 ring-1 ring-slate-400 rounded-lg px-3">
                        {{ $user->email }}</p>
                </div>
                <div>
                    <label class="block mb-3 uppercase font-semibold tracking-wide text-gray-400"
                        for="">Address</label>
                    <p class="text-base tracking-wide text-gray-500 w-full py-3 ring-1 ring-slate-400 rounded-lg px-3">
                        {{ $user->address ?? 'pls fill the address' }}</p>
                </div>
                <div>
                    <label class="block mb-3 uppercase font-semibold tracking-wide text-gray-400" for="">Date Of
                        Birth</label>
                    <p class="text-base tracking-wide text-gray-500 w-full py-3 ring-1 ring-slate-400 rounded-lg px-3">
                        {{ $user->dob ?? 'D:M:Y' }}</p>
                </div>
                <div class="">
                    <label class="block mb-3 uppercase font-semibold tracking-wide text-gray-400"
                        for="">Gender</label>
                    <p class="text-base tracking-wide text-gray-500 w-full py-3 ring-1 ring-slate-400 rounded-lg px-3">
                        {{ $user->gender ?? 'No Gender' }}</p>

                </div>

            </div>


        </div>

        {{-- edit setting  --}}
        <div class="profile-edit hidden">
            <form action="/profile/user/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-10 flex gap-10 items-center">
                    <div><img class="w-36 h-36 rounded-full shadow object-cover p-3 ring-1 ring-yellow-600"
                            src="{{ $user->profile_img }}" alt=""></div>
                    <div><label for="photo" class="px-6 py-3 rounded-lg bg-yellow-600 text-white">Choose
                            Image</label> <input class="hidden" type="file" name="profile_img" id="photo"></div>
                    <x-error name="profile_img"></x-error>
                </div>

                <div class="grid grid-cols-2 w-[75%] gap-x-12 gap-y-5">
                    <div class="col-span-1">
                        <label class="block mb-3 uppercase font-semibold tracking-wide text-gray-300"
                            for="">Full Name</label>
                        {{-- <p class="text-base tracking-wide text-gray-800">Zaw Hein Htet</p> --}}
                        <input value="{{ old('name', $user->name) }}" name="name"
                            class="bg-gray-300 ring-1 focus-visible:outline-none focus:border-yellow-500 focus:ring-yellow-500 w-full ring-gray-200 py-2 px-4 rounded-lg"
                            type="text">
                        <x-error name="name"></x-error>
                    </div>
                    <div>
                        <label class="block mb-3 uppercase font-semibold tracking-wide text-gray-300"
                            for="">Email</label>
                        {{-- <p class="text-base tracking-wide text-gray-800">zaw@gmial.com</p> --}}
                        <input value="{{ old('email', $user->email) }}" name="email"
                            class="bg-gray-300 ring-1 focus-visible:outline-none focus:border-yellow-500 focus:ring-yellow-500 w-full ring-gray-200 py-2 px-4 rounded-lg"
                            type="email">
                        <x-error name="email"></x-error>
                    </div>
                    <div>
                        <label class="block mb-3 uppercase font-semibold tracking-wide text-gray-300"
                            for="">Address</label>
                        {{-- <p class="text-base tracking-wide text-gray-800">Zaw-hein-htet</p> --}}
                        <input value="{{ old('address', $user->address) }}" name="address"
                            class="bg-gray-300 ring-1 focus-visible:outline-none focus:border-yellow-500 focus:ring-yellow-500 w-full ring-gray-200 py-2 px-4 rounded-lg"
                            type="text">
                        <x-error name="address"></x-error>
                    </div>
               
                    <div>
                        <label class="block mb-3 uppercase font-semibold tracking-wide text-gray-300"
                            for="">Date Of Birth</label>
                        {{-- <p class="text-base tracking-wide text-gray-800">6/6/7</p> --}}
                        <input value="{{ old('dob', $user->dob) }}"
                            class="bg-gray-300 ring-1 focus-visible:outline-none  focus:bg-green-500 focus:ring-yellow-500 w-full ring-gray-200 py-1.5 px-4 rounded-lg"
                            type="date" name="dob">
                        <x-error name="dob"></x-error>
                    </div>
                    <div class="">
                        <label class="block mb-3 uppercase font-semibold tracking-wide text-gray-300"
                            for="">Gender</label>
                        {{-- <p class="text-base tracking-wide text-gray-800">Male</p> --}}

                        <input class="w-5 h-5 accent-yellow-500" type="radio" id="g1"
                            {{ $user->gender == 'male' ? 'checked' : '' }} value="male" name="gender">
                        <label class="pb-8 text-gray-400" for="g1">Male</label>
                        <input {{ $user->gender == 'female' ? 'checked' : '' }} class="ml-10 w-5 h-5 accent-yellow-500"
                            type="radio" id="g2" value="female" name="gender">
                        <label class=" text-gray-400" for="g2">Female</label>
                        <x-error name="gender"></x-error>
                    </div>

                </div>
                <div class="mt-10">
                    <button class="px-10  py-2 text-white bg-yellow-600 text-semibold rounded-lg">Save &
                        Continue</button>
                </div>
            </form>
        </div>



    </div>
    <hr class="my-12">

    <div class="grid grid-cols-3 gap-10">
        <div class="col-span-1">
            <h4 class="text-lg font-semibold tracking-wide text-yellow-600 mb-2">Change Password</h4>
            <p class="text-gray-400">Update your password associated with your account.</p>
        </div>
        <div class="col-span-2">
            <form class="space-y-5" action="/profile/user/{{ $user->id }}/password" method="POST">
                @csrf
                @method('PATCH')
                <div>
                    <label class="block text-base font-semibold text-yellow-600 tracking-wide mb-3" for="">Current
                        password</label>
                    <input name="current-password" value="{{ old('current-password') }}"
                        class="w-full outline-none ring-1 ring-slate-400 bg-gray-300 focus:ring-yellow-500 py-2 rounded-lg px-4"
                        type="password">
                    <x-error name="current-password"></x-error>
                </div>
                <div>
                    <label class="block text-base font-semibold text-yellow-600 tracking-wide mb-3" for="">New
                        password</label>
                    <input value="{{ old('new-password') }}" name="new-password"
                        class="w-full outline-none ring-1 ring-slate-400 bg-gray-300 focus:ring-green-500 py-2 rounded-lg px-4"
                        type="password">
                    <x-error name="new-password"></x-error>
                </div>
                <div>
                    <label name="confirm-password" class="block text-base font-semibold text-yellow-600 tracking-wide mb-3"
                        for="">Confirm
                    password</label>
                    <input name="confirm-password" value="{{ old('confirm-password') }}"
                        class="w-full outline-none ring-1 ring-slate-400 bg-gray-300 focus:ring-green-500 py-2 rounded-lg px-4"
                        type="password">
                    <x-error name="confirm-password"></x-error>
                </div>
                <div>
                    <button type="submit"
                        class="px-6 py-2 bg-yellow-600 rounded-lg text-white font-bold">Save</button>
                </div>
            </form>
        </div>
    </div>

    <hr class="my-12">

    <div class="grid grid-cols-3 gap-10">
        <div class="col-span-1">
            <h4 class="text-lg font-semibold tracking-wide text-yellow-600 mb-2">Delete account</h4>
            <p class="text-gray-400">No longer want to use our service?You can delete your account here.This action is
                not revisible.All information related to this account will be deleted permantely.</p>
        </div>
        <div class="col-span-2">
            <form class="space-y-5" action="">

                <div>
                    <button class="px-6 py-2 text-white rounded-lg bg-red-500 font-bold">Yes, I deleted my
                        account</button>
                </div>
            </form>
        </div>
    </div>
</x-profile-layout>

@section('javascript')
    <script>
        const settingBtn = document.querySelector(".setting-toogle");
        const profileShow = document.querySelector(".profile-show");
        const profileEdit = document.querySelector(".profile-edit");
        settingBtn.addEventListener('click', function() {
            
            profileShow.classList.toggle('hidden');
            profileEdit.classList.toggle('hidden');
        })
    </script>
@endsection

@yield('javascript')
