<!DOCTYPE html>
    <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
  
    <div class="min-h-screen  text-gray-900 flex justify-center bg-home-900">
        <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
            <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
                
                <div class="mt-5 flex flex-col items-center">
                    <h1 class="text-2xl xl:text-3xl font-bold">
                        AGENT REGISTRATION FORM
                    </h1>
                    <form action="/agentSignup" method="POST">
                        @csrf
                        <div class="w-full mt-10">
                            <input value="{{ old('email') }}" name="email" type="email" placeholder="Email or Gmail" class="w-full mb-4 outline-none bg-gray-100 text-black px-5 py-3 rounded-md shadow-md">
                            <x-error name="email"></x-error>
                            <input name="password" type="password" value="{{ old('password') }}" placeholder="Password" class="w-full mb-4 outline-none bg-gray-100 text-black px-5 py-3 rounded-md shadow-md">
                            <x-error name="password"></x-error>
                            <input name="confirm-password" value="{{ old('confirm-password') }}" type="password" placeholder="Confirm Password" class="w-full mb-4 outline-none bg-gray-100 text-black px-5 py-3 rounded-md shadow-md">
                            <x-error name="confirm-password"></x-error>
                            <input name="name" value="{{ old('name') }}" type="text" placeholder="Full name" class="w-full mb-4 outline-none bg-gray-100 text-black px-5 py-3 rounded-md shadow-md">
                            <x-error name="name"></x-error>
                            <input name="company_name" value="{{ old('company_name') }}" type="text" placeholder="Company Name" class="w-full mb-4 outline-none bg-gray-100 text-black px-5 py-3 rounded-md shadow-md">
                            <x-error name="company_name"></x-error>
                            <textarea name="address" id="message" rows="2" cols="30" class="mb-4 px-5 block p-2.5 w-full text-sm text-gray-900 bg-gray-100 shadow-md rounded-lg outline-none focus:ring-blue-500 focus:border-blue-500   dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Address">{{ old('address') }}</textarea>
                            <x-error name="address"></x-error>
                            <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="Contact Number" class="w-full mb-4 outline-none bg-gray-100 text-black px-5 py-3 rounded-md shadow-md">
                            <x-error name="phone"></x-error>
    
                            <textarea name="description"  id="message" rows="4" class="block p-2.5 px-5 w-full text-sm text-gray-900 bg-gray-100 shadow-md rounded-lg outline-none focus:ring-blue-500 focus:border-blue-500  dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here...">{{ old('description') }}</textarea>
                            <x-error name="description"></x-error>
                            <div class="w-full flex justify-center">
                                <button class="px-7 py-3 bg-[#002349] text-white mt-5 rounded-md">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                  
                    
                </div>
            </div>
            <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
                <div class=" w-full bg-cover  bg-center bg-no-repeat"
                    style="background-image: url('https://i.pinimg.com/1200x/ac/be/a0/acbea0c8116b7e5732eae7c283a6365c.jpg');">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
