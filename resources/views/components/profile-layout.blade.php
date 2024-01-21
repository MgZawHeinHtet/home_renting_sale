<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite('resources/css/app.css')
</head>
<body class="font-serif overflow-x-hidden bg-home-600">
    <aside class="w-96 h-screen bg-home-900 px-14 py-28 space-y-14 fixed top-0 left-0 z-40 transition-transform -translate-x-full sm:translate-x-0">
        <a href="/" class="text-2xl font-semibold capitalize text-white font-serif">Home rental-selling <br><span class="text-base tracking-tight">Management System</span></a>
        <ul class="space-y-2 font-medium">
            <p class="text-white text-sm mb-4 tracking-wider font-semibold uppercase">Presonal Setting</p>
            <li>
                <a class="font-bold text-gray-400" href="/profile">
                    Account
                </a>
            </li>
        </ul>

        <ul class="space-y-2 font-medium">
            <p class="text-white text-sm mb-4 tracking-wider font-semibold uppercase">Tools and operation</p>
            <li>
                <a class="font-bold text-base text-gray-400" href="/profile/notifications">
                    Notifications
                </a>
            </li>
            <li>
                <a class="font-bold text-base text-gray-400" href="/profile/schedules">
                    Schedule Request Lists
                </a>
            </li>
           
            <li>
                <a class="font-bold text-base text-gray-400" href="/profile/savedProperties">
                    Saved Properties
                </a>
            </li>
        </ul>
    </aside>
    <div class="sm:ml-96">
        <div class="p-20 py-16">
            {{ $slot }}
        </div>
    </div>
    
</body>
</html>