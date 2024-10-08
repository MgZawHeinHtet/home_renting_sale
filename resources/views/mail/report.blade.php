<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @vite(['resources/css/app.css'])
</head>
<body class="font-serif  overflow-x-hidden p-0 m-0">

    <div class="w-full  py-[50px]">
        <div class="bg-[#002349] w-100vw px-[20px] py-[10px] rounded-lg" >
            <p class="text-white font-bold capitalize   text-lg text-center mb-[30px]">Report mail from real estate management system</p>
            <div class="bg-white rounded-t-lg px-[20px] mb-[30px]">
                <div class="w-full flex border-b items-center">
                    <div class="w-[90%] flex items-center pt-[10px]">
                        <div class="w-[5%] me-[10px] font-semibold">To:</div>
                        <div class="w-[95%]"><input type="text" class="w-full outline-none">{{ $email }}</div>
                    </div>
                    <div class="w-[10%]">Cc Bcc</div>
                    </div>
                    <div class="border-b pt-[10px]">
                        <p class="font-bold">Re: ActionAble x Winger</p>
                    </div>
                    <div class="w-full mt-[10px]">
                        <p class="mb-5 font-bold">
                            Hi {{ $name }},
                        </p>
                        <p class="mb-5 text-md text-gray-600">
                            Your property {{ $title }} got many report from client.Check you are property and fixed it.
                        </p>
                        <p class="mb-5 text-md text-gray-600">
                            If we got report again for this property.we will delete it.
                        </p>
                        <p class="mb-5">Thank You</p>
                        <p class="font-semibold">Best,</p>
                        <p class="mb-5 font-bold">Admin</p>
                    </div>
            </div>
        </div>
    </div>

</body>
</html>
