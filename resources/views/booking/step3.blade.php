<x-booking-layout :total="$total_days" :checkin="$check_in" :checkout="$check_out" :guest="$guest" :property="$property">
    <div class="w-[55%]">
        <div class="w-full flex justify-between mb-5 items-center">
            <div class="text-3xl font-bold">Choose your payment
                method</div>
            <div class="font-light italic">Step 3 of 3</div>
        </div>
        <form action="/booking/checkout" method="POST">
            @csrf
            <div class="w-full relative">
    
                <div class="w-full bg-white px-5 ">
                    <div class="w-full px-[30px] pt-5">
                        <div class="mb-3 flex justify-between">
                            <p class="font-semibold text-lg">How would you like to pay?</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M12.22 19.85c-.18.18-.5.21-.71 0a.504.504 0 0 1 0-.71l3.39-3.39l-1.41-1.41l-3.39 3.39c-.19.2-.51.19-.71 0a.504.504 0 0 1 0-.71l3.39-3.39l-1.41-1.41l-3.39 3.39c-.18.18-.5.21-.71 0a.513.513 0 0 1 0-.71l3.39-3.39l-1.42-1.41l-3.39 3.39c-.18.18-.5.21-.71 0a.513.513 0 0 1 0-.71L9.52 8.4l1.87 1.86c.95.95 2.59.94 3.54 0c.98-.98.98-2.56 0-3.54l-1.86-1.86l.28-.28c.78-.78 2.05-.78 2.83 0l4.24 4.24c.78.78.78 2.05 0 2.83zm9.61-6.78a4.008 4.008 0 0 0 0-5.66l-4.24-4.24a4.008 4.008 0 0 0-5.66 0l-.28.28l-.28-.28a4.008 4.008 0 0 0-5.66 0L2.17 6.71a3.992 3.992 0 0 0-.4 5.19l1.45-1.45a2 2 0 0 1 .37-2.33l3.54-3.54c.78-.78 2.05-.78 2.83 0l3.56 3.56c.18.18.21.5 0 .71c-.21.21-.53.18-.71 0L9.52 5.57l-5.8 5.79c-.98.97-.98 2.56 0 3.54c.39.39.89.63 1.42.7a2.458 2.458 0 0 0 2.12 2.12a2.458 2.458 0 0 0 2.12 2.12c.07.54.31 1.03.7 1.42c.47.47 1.1.73 1.77.73c.67 0 1.3-.26 1.77-.73z"/></svg>
                        </div>
                        <p class="font-light mb-5">Safe, secure transactions. Your personal information is protected.</p>
                    </div>
                    <div x-data="{ subMenuOpen: false }"
                        class>
                        <button
                            @click="subMenuOpen = !subMenuOpen"
                            class=" w-full px-[30px] py-2 text-sm text-gray-700  relative rounded-md">
                            <div class="w-full flex items-center gap-3">
                                <input type="radio" value="no-payment" class="w-[20px] h-[20px]" id="radio" name="payment_type">
                                <label for="radio" class="font-semibold text-lg">No payment method</label>
                            </div>
                            <p
                                class="w-full text-start px-[25px] mt-3">Starting
                                at $81/mo or 0% APR with Affirm. See if you
                                qualify</p>
                        </button>
                        <div x-show="subMenuOpen"
                            @click.away="subMenuOpen = false"
                            class="w-full">
                            <div
                                class="w-[90%] bg-[#F5F4F3] mx-auto mb-[40px] px-[20px] py-[10px] rounded-md">
                                <p>you will be pay when you stay</p>
                                
                            </div>
                        </div>
                    </div>
    
                    <div x-data="{ subMenuOpen: false }"
                        class="border-y-2">
                        <button
                            @click="subMenuOpen = !subMenuOpen"
                            class=" w-full px-[30px] py-2 text-sm text-gray-700  relative rounded-md">
                            <div class="w-full flex items-center gap-3 relative">
                                <input type="radio" value="credit"  class="w-[20px] h-[20px] " id="radio1" name="payment_type">
                                <label for="radio1" class="font-semibold text-lg">Credit Card</label>
                                <div class="flex gap-3 absolute right-[7px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill-rule="evenodd" clip-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 4335 4335" id="visa-card"><defs><linearGradient id="a" x1="2167.46" x2="2167.46" y1="3573.9" y2="845.69" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#E5097F"></stop><stop offset="1" stop-color="#96336D"></stop></linearGradient><linearGradient id="b" x1="1115.54" x2="1649.92" y1="773.65" y2="3645.95" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#E8388C"></stop><stop offset="1" stop-color="#97326D"></stop></linearGradient></defs><g><rect width="4267" height="2728" x="34" y="868" fill="#898989" rx="262" ry="262"></rect><rect width="4267" height="2728" x="34" y="846" fill="url(#a)" rx="262" ry="262"></rect><path fill="url(#b)" d="M296 3574h1369L2732 846H297c-144 0-262 118-262 262v2204c0 144 118 262 262 262z"></path><g><path fill="#2b2a29" d="M585 1407c-5-7-10-19-14-27-14-28-49-72-71-90-19-16-47-39-70-48 1 6 4 15 6 21l94 339h121l134-311c6-14 41-92 44-104H708l-108 276c-2 3-1 2-3 4-1-7-11-55-13-59zm954-104c0 11 12 61 15 76 6 24 11 50 17 75h-91l59-151zm-231 301c132 0 109 10 125-30 4-11 8-24 13-34h144c1 11 5 22 7 33 3 14 4 30 12 30 113 0 102 7 96-22-2-10-3-16-6-26-4-18-8-35-12-52l-47-212c-7-35-15-71-24-106-29 0-106-6-128 10-21 16-38 65-48 89-10 22-19 42-29 65-9 22-18 42-28 63-22 48-57 136-79 178-3 6-8 12 2 12zm-274-293v13c0 48 55 87 91 102 9 4 18 8 27 13 98 53-4 112-122 65-6-3-21-10-28-10-1 13-5 31-8 45l-7 46c0 11 91 23 112 23 61 0 107-4 154-36 63-43 92-142-7-202-36-22-94-37-94-69 0-42 104-42 159-13 1-17 15-72 15-91-31-15-77-17-115-17-81 0-178 49-178 131zm-231 290h114l61-363c1-9 3-17 4-25 2-9 4-17 4-28H872c0 14-55 323-61 363l-9 53z"></path><path fill="#2b2a29" d="M431 1241c23 10 51 33 70 48 22 18 57 62 71 90 4 8 9 20 14 27 0-12-27-132-31-154-14-70-18-67-117-67H313v7c0 5 4 4 25 10 24 7 75 27 93 39z"></path></g><path fill="#fefefe" d="M581 1402c-5-7-10-19-14-27-14-28-49-72-71-90-19-16-47-39-70-48 1 6 4 15 6 21l94 339h121l134-311c6-14 41-92 44-104H704l-108 276c-2 3-1 2-3 4-1-7-11-55-13-59zm954-104c0 11 12 61 15 76 6 24 11 50 17 75h-91l59-151zm-231 301c132 0 109 10 125-30 4-11 8-24 13-34h144c1 11 5 22 7 33 3 14 4 30 12 30 113 0 102 7 96-22-2-10-3-16-6-26-4-18-8-35-12-52l-47-212c-7-35-15-71-23-106-29 0-106-6-128 10-21 16-38 65-48 89-10 22-19 42-29 65-9 22-18 42-28 63-22 48-57 136-79 178-3 6-8 12 2 12zm-274-293v13c0 48 55 87 91 102 9 4 18 8 27 13 98 53-4 112-122 65-6-3-21-10-28-10-1 13-5 31-8 45l-7 46c0 11 91 23 112 23 61 0 107-4 154-36 63-43 92-142-7-202-36-22-94-37-94-69 0-42 104-42 159-13 1-17 15-72 15-91-31-15-77-17-115-17-81 0-178 49-178 131zm-231 290h115l61-363c1-9 3-17 4-25 2-9 4-17 4-28H869c0 14-55 323-61 363l-9 53z"></path><path fill="#c5c6c6" d="M426 1237c23 10 51 33 70 48 22 18 57 62 71 90 4 8 9 20 14 27 0-12-27-132-31-154-14-70-18-67-117-67H308v7c0 5 4 4 25 10 24 7 75 27 93 39z"></path><g><path fill="#e63d24" d="m3055 2904 6-26c33-8 82-12 94 19 4 12-11 86-12 109h-32c-1-7 1-8-1-13-8 5-22 21-49 15-37-8-35-63 3-79 17-7 40-7 60-7-1-31-41-21-69-16zm103 72c12 3 66 13 60-11-3-14-37-15-46-33-11-21 2-45 17-53 18-9 49-5 71-4l-6 27c-19-1-41-8-48 8-3 21 65 16 44 72-7 18-17 22-38 24-23 3-35 1-56-2l2-28zm-140 30h-35c4-22 8-43 12-65 3-17 10-52 10-67l-56 132h-31l-9-131c-6 10-22 110-25 130l-32 1c9-54 24-107 30-162 11-3 44-1 57-1l2 105c8-6 19-41 24-51 7-16 17-38 22-54h59c-9 52-24 109-28 163zm407 184c5-10 12-8 16-18-8 0-28 1-33-1-6-2-14-13-17-18h56c15 0 12 1 19-8 5-7 9-9 12-16h-109l-10-18 133-1c4-8 11-15 13-25h-160l-9-19h181l10-24h-198c-6-3-7-13-9-19l214-1 7-24h-57l-2 6c-7 5-28 2-38 2 6-43 18-83 23-132h33l-2 19c12-6 5-18 41-19l-13 36c-21 0-27 6-32 25h37l3-9c3-22 6-27 13-45l-1-15c-10-2-219-2-232 0l-1 7 20 1c-1 30-4 29-11 30h-15l-5 29 26 1c21-86 96-66 112-38 6 11 7 29 4 42-4 19 0 13-83 13-4 18 11 27 25 29 21 4 33-4 50-8l-5 30c-18 8-49 9-68 3-22-7-30-20-37-42-1-2-1-1-2-6v-4h-26c-3 10-3 17 1 24l21 1-7 27c-11 7-40 6-49-4-13-14 4-80 9-104 3-15 6-39 9-53h28c9 1 4-2 6 3h225c0-7-4-19-6-25h-220c1-7 2-16 8-19h206l-7-24h-192l7-19h175l-12-24h-151c2-6 8-17 14-20h124c-5-8-12-17-17-24h-92c4-7 9-14 14-19h55c-7-13-21-21-27-31-5-1-32-24-38-28-37-24-71-39-114-50-110-28-224-7-311 65-46 38-79 74-106 129-8 16-13 29-20 46-27 69-23 162 0 229 3 9 6 16 9 24 5 14 27 54 36 66 24 33 46 60 80 85 41 31 64 41 110 59 8 3 17 5 25 7 78 20 180 11 250-27 8-4 13-7 21-11 7-4 13-8 21-13 12-7 27-21 39-29z"></path><path fill="#ef7f1a" d="M4020 2986c10 8-4 28-16 22l-6-4v-2l1-18c-6 6-4 12-6 9l-2 2c2-26 28-20 28-9zm-340 301h-13c-21 0-42-2-62-6-41-7-90-26-123-48-8-5-14-8-21-13-9-7-30-21-37-30 5-10 12-8 16-18-8 0-28 1-33-1-6-2-14-13-17-18h56c15 0 12 1 19-8 5-7 9-9 12-16h-109l-10-18 133-1c4-8 11-15 13-25h-160l-9-19h181l10-24h-198c-6-3-7-13-9-19l214-1 7-24h-57l-2 6 5-29c4 3-1 1 5 3h52c11 24 60 41 93 25 2-17 5-21 7-33-21 4-34 14-57 1-15-9-21-28-16-49 8-33 24-49 57-46 15 1 18 5 30 7l4-30c-18-14-64-16-95 8-12 9-11 14-20 23l-1-15c-10-2-219-2-232 0l4-20h225c0-7-4-19-6-25h-220c1-7 2-16 8-19h206l-7-24h-192l7-19h175l-12-24h-151c2-6 8-17 14-20h124c-5-8-12-17-17-24h-92c4-7 9-14 14-19h55c-7-13-21-21-27-31l38-30c7-5 13-9 21-13 23-15 43-24 69-33 44-16 104-26 149-21 78 8 160 38 217 91 32 30 55 56 77 93 33 55 52 118 52 187 0 64-10 93-28 143-5 15-26 52-36 66-23 33-52 64-83 87-40 30-64 42-112 59l-41 11c-5 1-11 1-14 2-17 3-34 4-51 5zm80-299-1 18-33-1-1-11c-8 5-9 9-22 12-67 18-79-75 3-81h23l7-3c8-32-48-18-66-16 5-26 2-36 59-33 69 4 30 82 30 116zm11 17c7-43 20-87 24-132h33l-1 19c9-6 15-20 41-19-4 14-9 16-12 36-29 1-31 8-37 36-4 20-7 38-10 60h-38zm183-116c5-8 8-36 9-47h38c-7 44-26 120-29 163h-36l1-14-1 1-11 8c-32 17-71 1-71-48 0-70 58-90 87-73 6 4 7 7 13 11z"></path><path fill="#fefcfd" d="M3018 3006c4-54 19-111 28-163h-59c-5 16-15 38-22 54-4 10-16 45-24 51l-2-105c-14 0-46-2-57 1-7 55-21 108-30 162l32-1c2-20 19-120 25-130l9 131h31l56-132c0 15-7 50-10 67-3 22-8 43-12 65h35zM3890 2945c0-48 56-59 56-18 0 58-56 66-56 20v-2zm65-56c-6-3-7-7-13-11-29-17-87 2-87 73 0 49 39 65 71 48l11-8 1-1-1 14h36c3-43 21-118 29-163h-38c-2 11-5 38-9 47zM3115 2945c4 11-4 25-10 30-25 19-51-11-24-26 9-5 22-6 34-4zm-59-41c28-5 68-15 69 16-20 0-44 0-60 7-37 16-39 71-3 79 26 6 41-10 49-15 2 6 0 6 1 13h32c1-22 16-97 12-109-12-31-61-27-94-19l-6 26zM3732 2948c-1 19-15 42-38 33-13-5-19-38 38-33zm-6 46c3 4 2 3 2 11h30c-1-7-1-11 2-16 0-33 39-112-30-116-57-3-55 7-59 33 18-2 74-16 66 16l-7 3h-23c-82 6-70 100-3 81 13-4 14-7 22-12zM3366 2924c0-31 47-34 46-1-11 3-34 2-46 1zm-37 10-1 28c7 23 15 35 37 42 19 6 50 5 68-3l5-30c-17 5-29 12-50 8-14-2-30-11-25-29 84 0 79 6 83-13 3-13 3-31-4-42-16-28-91-48-112 38z"></path><path fill="#fefcfd" d="M3548 2881c-7 18-10 23-13 45l1 28 8 23c11 24 60 41 93 25 2-17 5-21 7-33-21 4-34 14-57 1-15-9-21-28-16-49 8-33 24-49 57-46 15 1 18 5 30 7l4-30c-18-14-64-16-95 8-12 9-11 14-20 23zM3158 2976l-2 28c22 3 33 5 56 2 21-3 32-7 38-24 21-56-47-51-44-72 7-16 29-9 48-8l6-27c-22-1-53-6-71 4-15 8-28 33-17 53 9 18 43 19 46 33 6 25-47 14-60 11zM3300 2951l3-19 5-29c4 0 12 1 15 0 7-1 9 0 11-30l-20-1 1-7 4-20c-2-5 3-2-6-3h-28c-4 13-6 37-9 53-5 25-22 91-9 104 9 9 38 11 49 4l7-27-21-1c-5-7-4-14-1-24zM3482 3004l5-29 4-21 4-20c5-19 11-25 32-25l13-36c-35 1-28 13-41 19l2-19h-33c-5 49-17 89-23 132 10 0 31 3 38-2zM3772 3006h38c3-22 7-40 10-60 5-28 8-34 37-36 2-20 8-22 12-36-26-1-32 12-41 19l1-19h-33c-4 45-17 89-24 132z"></path><path fill="#ef7f1a" d="M3890 2945v2c0 46 56 38 56-20 0-41-56-30-56 18z"></path><path fill="#e63d24" d="M3115 2945c-12-2-25-1-34 4-27 15-1 45 24 26 6-5 14-19 10-30z"></path><path fill="#ef7f1a" d="M3732 2948c-57-6-51 27-38 33 23 9 37-13 38-33z"></path><path fill="#e63d24" d="M3486 2975c4 3-1 1 5 3h52l-8-23h-45l-4 21zM3366 2924c12 1 35 3 46-1 1-33-45-30-46 1z"></path><path fill="#ed7b1b" d="m3495 2934-4 20h44v-28l-3 9zM3300 2951h26v4c1 5 1 4 2 6l1-28-26-1-3 19z"></path><path fill="#f9bd84" d="M4004 3008c-5-5 6 0-4-4l3-2-3-18 12 2 3-1 1-1c0 5-1 3 4 2-1-11-26-17-28 9 1-1 1-2 2-2 3 4 0-3 6-9l-1 18v2l6 4z"></path><path fill="#fde6cd" d="M4012 2986c0 4 1 7-5 7-6-1-4-2-4-8l9 1zm-9 16v-7c10 1 3-2 8 4 2 3 3 5 5 7l-12 2c12 6 27-14 16-22 0 4 1 6 0 9-1 5-1 4-3 7-8-9-1-5-2-17l-3 1-12-2 3 18z"></path><path fill="#f0811a" d="m4003 3003-3 2c10 4-1-1 4 4l12-2c-1-2-2-4-5-7-5-5 2-3-8-4v7z"></path><path fill="#fbca9a" d="m3726 2993 1 11 33 1 1-18c-3 5-3 9-2 16h-30c0-8 0-7-2-11z"></path><path fill="#f0811a" d="M4020 2986c-5 1-4 3-4-2l-1 1c1 12-6 7 2 17 2-3 3-1 3-7v-9z"></path><path fill="#f0831f" d="m4012 2986-9-1c0 6-2 7 4 8s5-3 5-7z"></path></g></g></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill-rule="evenodd" clip-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 4335 4335" id="master-card"><defs><linearGradient id="a" x1="2167.46" x2="2167.46" y1="868.38" y2="3596.59" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#1D4C80"></stop><stop offset="1" stop-color="#173A63"></stop></linearGradient></defs><g><g><rect width="4267" height="2728" x="34" y="868" fill="url(#a)" rx="262" ry="262"></rect><path fill="#e41d2c" d="m1172 2206 19-75c73-22 222-32 250 47 16 46-30 237-39 293l-71 1c-16-20-3 17-14-32-68 61-213 51-202-72 11-122 117-106 232-124-2-78-100-57-176-39zm535-12c-65 0-75-14-132 11 7 71 44 43 95 77 97 64-7 262-238 177l13-72c65 13 98 26 148-2 12-101-167-35-117-197 27-88 146-76 244-67l-14 73zm-996-153 153 5 16 240 83-192c28-69 9-54 185-52l-79 429-86-1 47-308-127 310-103-3c-3-60-8-271-24-311l-52 312-90-1 77-428zm1459 911 42-50c-84-11-99 13-137-55l193-2c12-20 32-39 42-62-220-15-282 41-317-55h353l39-61-436-2-20-51 470-2c27-15 27-32 34-63l-445-1c-80 1-85 19-100-54h560l18-62-164-2-8 42-94-4 59-349 89 12c0 2 2 9 2 12 0 2 1 5 1 6l5 18c25-30 41-52 99-50l-30 81c-17 22-67-3-88 57l98 4c11-63 23-82 41-133l1-30-613 1-2 22c33 0 32-6 51 10l-9 59c-62 15-60-22-66 59 9 15-2 7 17 12l39 1c63-205 251-160 294-96 23 34 46 146-11 155l-191 2c9 101 125 80 200 55-3 42 0 76-39 90-31 11-96 8-130 0-84-19-120-61-126-152l-36-1c-33-15-7 0-24-41-14 84-52 138 52 126-6 50 1 67-54 73-160 19-108-88-82-231 41-228 9-200 125-198l596 1-12-62-576-2 11-50 545-3c-14-85-17-64-215-64h-302c21-73 10-53 206-53h265l-28-63-384-1 26-52 321-2c-41-84-39-60-266-64 29-72 80-54 169-54-25-40-43-37-58-71-37-19-70-53-107-79-283-200-667-221-975-71-277 134-549 444-546 873 4 613 542 1060 1151 956 286-49 358-165 476-230z"></path><path fill="#f8b02b" d="M2823 2128c310-63 259 90 234 214-8 37-8 110-37 130-7 0-48 1-52-1-28-11-15 22-19-29-84 48-217 59-201-75 13-107 121-124 231-119-4-79-76-66-176-41l21-79zm306-9 83 1c1 2 2 5 2 7l13 37c15-23 43-43 87-44l-12 71-41 16c-82 27-77 130-99 265h-93l60-353zm441-76h85l-73 430c-95 1-72 6-102-30-62 92-248 7-191-183 42-142 184-180 254-96l28-122zm-1399-540c15 34 34 31 58 71-89 0-140-19-169 54 227 4 225-20 266 64l-321 2-26 52 384 1 28 63h-265c-195 0-185-19-206 53h302c198 0 201-21 215 64l-545 3-11 50 576 2 12 62-596-1-8 56 613-1-1 30c46-44 38-67 124-92 71-20 116-5 186 10l-15 92c-120-36-198-27-226 97-31 133 74 183 185 130-10 97-26 121-140 106-79-10-103-48-138-95h-143l-8 55 164 2-18 62h-560c15 73 20 55 100 54l445 1c-8 30-7 48-34 63l-470 2 20 51 436 2-39 61h-353c35 95 97 40 317 55-10 23-30 42-42 62l-193 2c37 67 53 44 137 55l-42 50c143 105 254 193 485 233 210 36 429-4 598-87 732-361 712-1401-6-1745-258-123-600-134-867 6-129 67-160 115-208 144z"></path><path fill="#fefefe" d="m634 2470 90 1 52-312c16 40 21 251 24 311l103 3 127-310-47 308 86 1 79-429c-176-2-157-17-185 52l-83 192-16-240-153-5-77 428zM3420 2391c-75-77-11-205 59-188 69 17 56 186-59 188zm122-227c-70-84-211-46-254 96-57 189 129 275 191 183 30 36 7 30 102 30l73-430h-85l-28 122zM2855 2392c-14-67 48-93 107-81 3 68-45 105-107 81zm-32-263-21 79c100-24 173-37 176 41-110-5-218 12-231 119-17 134 117 123 201 75 4 51-9 18 19 29 4 2 45 1 52 1 30-19 30-93 37-130 26-125 76-277-234-214zM1331 2308c2 34-4 60-26 77-15 11-60 24-78 7-56-51 49-85 103-84zm-159-102c76-18 174-39 176 39-115 18-221 2-232 124-12 123 133 133 202 72 11 49-2 12 14 32l71-1c9-57 55-247 39-293-28-80-176-70-250-47l-19 75zM2001 2256c13-51 35-72 94-64 21 30 21 21 25 64h-119zm-106 5-4 54c6 91 43 132 126 152 34 8 99 11 130 0 39-13 36-48 39-90-75 25-191 46-200-55l191-2c57-9 34-120 11-155-43-64-231-109-294 96zM2477 2128c-18 51-30 70-41 133v55l17 61c35 47 59 85 138 95 114 15 130-9 140-106-112 53-216 3-185-130 29-125 107-133 226-97l15-92c-70-14-115-29-186-10-86 24-78 48-124 92zM1720 2121c-98-8-217-21-244 67-50 162 128 96 117 197-51 28-83 15-148 2l-13 72c231 85 334-112 238-177-51-34-88-5-95-77 57-26 66-11 132-11l14-73z"></path><path fill="#fefefe" d="m1832 2273 7-24c6-81 4-44 66-59l9-59c-19-16-18-10-51-10l2-22 8-56c-116-2-84-30-125 198-26 143-78 250 82 231 54-6 48-23 54-73-103 12-65-42-52-126zM2302 2432l8-55 10-60 18-60c22-60 72-35 88-57l30-81c-59-2-75 20-99 50l-5-18c0-1-1-4-1-6s-2-10-2-12l-89-12-59 349 94 4 8-42zM3069 2472h93c22-135 17-238 99-265l41-16 12-71c-44 1-72 21-87 44l-13-37c-1-2-1-5-2-7l-83-1-60 353z"></path><path fill="#f8b02b" d="M3420 2391c116-2 129-171 59-188-71-17-134 111-59 188z"></path><path fill="#e41d2c" d="M1331 2308c-54-1-159 33-103 84 18 16 63 3 78-7 22-16 27-43 26-77zM2310 2376l143 1-17-61h-116z"></path><path fill="#f8b02b" d="M2855 2392c63 23 110-13 107-81-60-11-121 15-107 81zM2320 2316h116v-55l-98-5z"></path><path fill="#e41d2c" d="M2001 2256h119c-3-42-4-34-25-64-59-8-81 13-94 64z"></path><path fill="#f8b02b" d="M1832 2273c17 41-9 26 24 41l36 1 4-54-39-1c-20-4-9 3-17-12l-7 24z"></path></g></g></svg>
                                </div>
                            </div>
                            <p
                                class="w-full text-start px-[25px] mt-3">Starting
                                at $81/mo or 0% APR with Affirm. See if you
                                qualify</p>
                        </button>
                        <div x-show="subMenuOpen"
                            @click.away="subMenuOpen = false"
                            class="w-full">
                            <div class="w-full  mb-[50px]">
                                <p class="text-red-700 mb-2">Required fields</p>
                                <div class="w-full grid grid-cols-2 gap-3">
                                    <div class><input
                                            class="w-full border-2 border-brown-700 shadow-sm  rounded-md px-[7px] py-[10px] outline-blue-600"
                                            type="text"
                                            placeholder="First Name"></div>
                                    <div class><input
                                            class="w-full border-2 border-brown-700 shadow-sm  rounded-md px-[7px] py-[10px] outline-blue-600"
                                            type="text"
                                            placeholder="Last Name"></div>
                                            <div class="col-span-2 relative"><input type="text"
                                                class="w-full border-2 border-brown-700 shadow-sm  rounded-md px-[7px] py-[10px] outline-blue-600"
                                                placeholder="Card Number">
                                            <div class="absolute right-[10px] top-[8px] text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1q2.075 0 3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm0-2h12V10H6zm6-3q.825 0 1.413-.587T14 15q0-.825-.587-1.412T12 13q-.825 0-1.412.588T10 15q0 .825.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3q-1.25 0-2.125.875T9 6zM6 20V10z"/></svg></div>
                                            </div>
                                        <div class="col-span-1"><input type="text" class="w-full border-2 border-brown-700 shadow-sm  rounded-md px-[7px] py-[10px] outline-blue-600"
                                                placeholder="Expiration MM/YY"></div>
                                        <div><input type="text" class="w-full border-2 border-brown-700 shadow-sm  rounded-md px-[7px] py-[10px] outline-blue-600"
                                                placeholder="Security Code"></div>
                                </div>
                                <div class="w-full mt-[30px]">
                                    <p class="font-bold text-lg mb-4">Billing address</p>
                                    <div class="w-full grid grid-cols-6 gap-3">
                                        <div class="col-span-3"><input
                                            class="w-full border-2 border-brown-700 shadow-sm  rounded-md px-[7px] py-[10px] outline-blue-600"
                                            type="text"
                                            placeholder="Street"></div>
                                        <div class="col-span-3">
                                            <select class="w-full border-2 border-brown-700 shadow-sm  rounded-md px-[7px] py-[10px] outline-blue-600">
                                                <option value="Myanmar" class="font-bold">Country</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Myanmar">Myanmar</option>
                                            </select>
                                        </div>
                                        <div class="col-span-2">
                                            <input
                                            class="w-full border-2 border-brown-700 shadow-sm  rounded-md px-[7px] py-[10px] outline-blue-600"
                                            type="text"
                                            placeholder="City">
                                        </div>
                                        <div class="col-span-2">
                                            <input
                                            class="w-full border-2 border-brown-700 shadow-sm  rounded-md px-[7px] py-[10px] outline-blue-600"
                                            type="text"
                                            placeholder="Zip code">
                                        </div>
                                        <div class="col-span-2">
                                            <select class="w-full border-2 border-brown-700 shadow-sm  rounded-md px-[7px] py-[10px] outline-blue-600">
                                                <option value="Myanmar" class="font-bold">State</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Myanmar">Myanmar</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
                <script
                    src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"
                    defer></script>
            </div>
            <div class="w-full bg-white mt-3 px-[40px] py-[30px]">
                <p class="flex gap-2 mb-[20px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M8 14q.425 0 .713-.288T9 13q0-.425-.288-.712T8 12q-.425 0-.712.288T7 13q0 .425.288.713T8 14m4 0q.425 0 .713-.288T13 13q0-.425-.288-.712T12 12q-.425 0-.712.288T11 13q0 .425.288.713T12 14m4 0q.425 0 .713-.288T17 13q0-.425-.288-.712T16 12q-.425 0-.712.288T15 13q0 .425.288.713T16 14m-4 8q-1.875 0-3.512-.712t-2.85-1.925q-1.213-1.213-1.925-2.85T3 13q0-1.875.713-3.512t1.924-2.85q1.213-1.213 2.85-1.925T12 4q1.875 0 3.513.713t2.85 1.925q1.212 1.212 1.925 2.85T21 13q0 1.875-.712 3.513t-1.925 2.85q-1.213 1.212-2.85 1.925T12 22M5.6 2.35L7 3.75L2.75 8l-1.4-1.4zm12.8 0l4.25 4.25l-1.4 1.4L17 3.75zM12 20q2.925 0 4.963-2.037T19 13q0-2.925-2.037-4.962T12 6Q9.075 6 7.038 8.038T5 13q0 2.925 2.038 4.963T12 20"/></svg>
                    <span class="font-bold text-md">Free cancellation </span>until <span class="text-blue-600 text-md font-semibold"> {{ date('M d,Y',strtotime($cancel_date)) }}</span></p>
                <p class="mb-[10px] font-light">When you book this property, your reservation will be confirmed instantly.</p>
                <p class="font-light">We'll send your confirmation email to <span>fehwoehfh@gmail.com.</span> </p>
            </div>
            <div class="w-full flex justify-center mt-5 relative">
                <button type="submit"
                    class="w-[40%] bg-[#002349] rounded-full hover:bg-[#245ABC] py-4 text-white">Agree
                    & continue</button>
                    <div class="flex absolute left-[10px] items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="text-blue-700" viewBox="0 0 1024 1024"><path fill="currentColor" d="M685.248 104.704a64 64 0 0 1 0 90.496L368.448 512l316.8 316.8a64 64 0 0 1-90.496 90.496L232.704 557.248a64 64 0 0 1 0-90.496l362.048-362.048a64 64 0 0 1 90.496 0"/></svg>
                        <a href="{{ url()->previous() }}" class="text-blue-700  text-lg  underline top-[13px]">Back</a>
    
                    </div>
            </div> 
        </form>
    </div>
</x-booking-layout>