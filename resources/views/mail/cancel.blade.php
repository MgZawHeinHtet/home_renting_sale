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
        <div class="w-[100vw] p-5">
            <div class="w-100vw mb-3">
            <div class="w-full bg-[#002349] text-white flex justify-between px-[20px] py-[10px] items-center">
                <p class="text-xl font-bold">Real Estate Management System</p>
                <div class="">
                    <p>Confirmation number: <span>{{ $booking->booking_number }}</span></p>
                </div>
            </div>
            </div>
            <div class="w-full mb-[30px] ">
                <p class="text-3xl font-bold mb-5">Your Booking has been successfully cancelled for free</p>
                <p class="mb-3">Dear ,{{ $booking->first_name . ' '.$booking->last_name }}</p>
                <p class="mb-[40px]">We can confirm that your reservation at {{ $booking->property->agent->company_name }} has been cancelled.You don't need to take futher action but if you have any queries for the property, their contact details are {{ $booking->property->agent->phone }}.The property is responsible for payment and they'll handle any refunds (if applicable) automatically.</p>
                <div>
                    <p class="text-xl font-bold text-blue-400 mb-2">Myanmar Home Renting and Sale Management System</p>
                    <div class="w-full flex items-center mb-2">
                        <p class="w-[80%] text-md">{{ $booking->property->region }},{{ $booking->property->township }}</p>
                        <p class="w-[20%] text-red-700">CANCELLED</p>
                    </div>
                    <p class="font-bold">Phone: <span class="text-blue-600">{{ $booking->property->agent->phone }}</span></p>
                    <a href="" class="font-bold text-blue-600">Email System</a>
                </div>
            </div>
            <div class="w-full mb-5">
                <div class="w-full flex justify-between py-4">
                    <p class="font-bold">You booked for</p>
                    <p>{{ $booking->guest }} people</p>
                </div>
                <div class="w-full flex justify-between border-y py-4">
                    <p class="font-bold">Check-in</p>
                    <p>{{ date('D d M Y',strtotime($booking->check_in)) }}</p>
                </div>
                <div class="w-full flex justify-between border-y py-4">
                    <p class="font-bold">Check-out</p>
                    <p>{{ date('D d M Y',strtotime($booking->check_out)) }}</p>
                </div>
                <div class="w-full flex justify-between border-y py-4">
                    <p class="font-bold">Booking number</p>
                    <p>{{ $booking->booking_number }}</p>
                </div>
               
            </div>
            <div class="w-full flex justify-between bg-gray-300 py-4 px-2 mb-[20px]">
                <p class="font-bold text-green-700 ">Free cancellatiion</p>
                <p>0 <span class="font-bold">MMK</span></p>
            </div>
            <div class="w-full border-2 mb-[20px] border-green-700 flex items-center px-[50px] bg-green-100 py-5">
                <div class="w-[20%] text-green-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M20 15.5c-1.25 0-2.45-.2-3.57-.57a1.02 1.02 0 0 0-1.02.24l-2.2 2.2a15.045 15.045 0 0 1-6.59-6.59l2.2-2.21a.96.96 0 0 0 .25-1A11.36 11.36 0 0 1 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1c0 9.39 7.61 17 17 17c.55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1M19 12h2a9 9 0 0 0-9-9v2c3.87 0 7 3.13 7 7m-4 0h2c0-2.76-2.24-5-5-5v2c1.66 0 3 1.34 3 3"/></svg>
                </div>
                <div class="w-[80%]">
                    <p>You may have already been charged for all or part of your stay by {{ $booking->property->agent->company_name }}- this is perfectly normal. You should receive your money back shortly, though you can also contact the property for more information:</p>
                    <p class="font-bold">Phone: {{ $booking->property->agent->phone }}</p>
                </div>
            </div>
            <div class="w-full border-b mb-[20px] flex items-center px-[50px]  py-5">
                <div class="w-[20%] text-green-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-700" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2m1 15h-2v-2h2zm0-4h-2V7h2z"/></svg>
                </div>
                <div class="w-[80%]">
                    <p>You might still receive notifications about this booking while our system is updating, but your booking is definitely cancelled.</p>
                </div>
            </div>
            <div class="w-full flex px-[50px] items-center">
                <div class="w-[20%] text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="translate-x-[-16px]" width="70" height="70" viewBox="0 0 24 24"><path fill="currentColor" d="M5 5h2v3h10V5h2v5h2V5c0-1.1-.9-2-2-2h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h5v-2H5zm7-2c.55 0 1 .45 1 1s-.45 1-1 1s-1-.45-1-1s.45-1 1-1"/><path fill="currentColor" d="M20.3 18.9c.4-.7.7-1.5.7-2.4c0-2.5-2-4.5-4.5-4.5S12 14 12 16.5s2 4.5 4.5 4.5c.9 0 1.7-.3 2.4-.7l2.7 2.7l1.4-1.4zm-3.8.1c-1.4 0-2.5-1.1-2.5-2.5s1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5s-1.1 2.5-2.5 2.5"/></svg>
                </div>
                <div class="w-[80%]">
                    <p class="font-bold">Still search for your next trip?</p>
                    <p class="mb-3">Get access to lower mobile-only prices by booking on the website.</p>
                    <a href="" class="text-blue-700 underline mb-3">Get the Website >>></a>
                </div>
            </div>
 
    </div>
</body>
</html>