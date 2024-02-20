<header>
    <nav class="w-full py-3 px-10 bg-home-900 flex items-center justify-end relative">
        
        @auth
            <div class="flex items-center gap-5">
                @if (auth()->user()->role === 'customer')
                    <div>
                        <x-noti-badge></x-noti-badge>
                    </div>
                    <div><a class="text-white tracking-wide py-4 px-2 hover:bg-gray-600 rounded" href="">List Your
                            Property</a></div>
                    <div class="flex gap-2" id="profile-btn">
                        <div class="w-10 h-10 rounded-full  border-2 border-yellow-600">
                            <img class="w-10 h-10 rounded-full object-cover" src="{{ auth()->user()->profile_img }}"
                                alt="">
                        </div>
                        <div>
                            <p class="text-white capitalize font-bold">{{ auth()->user()->name }}</p>
                            <p class="text-yellow-600 text-sm font-extralight">Genius Level 1</p>
                        </div>
                    </div>
                @else
                    <a class="text-white mx-3 " href="/adminAgents">Agent Dashobard</a>
                @endif
            </div>
        @else
        <p class="text-white mr-3 tracking-wide"><i class="fa-solid fa-phone mr-1"></i> + 95268694224</p>
        <p class="text-white mr-5 tracking-wide"><i class="fa fa-envelope mr-1" aria-hidden="true"></i> sale@gmail.com
        </p>
            <div>
                <a class="text-white" href="/auth/choice">Sign up</a>
                <span class="mx-1 text-white">/</span>
                <a class="text-white" href="/login">Login</a>
            </div>
        @endauth

        {{-- hidden for noti  --}}
        <x-noti-container></x-noti-container>
        {{-- hidden for profile --}}
        <div id="profile-container"
            class="hidden bg-white absolute rounded-lg px-6 py-6 space-y-3 bottom-[-230px] right-5 z-50 shadow-lg">
            <a class="flex gap-3" href="/profile">
                <p><i class="fa-regular fa-user"></i>
                    <p class="flex-1">Manage account</p>
                </p>
            </a>

            <a class="flex gap-3" href="/booking/list">
                <p><i class="fas fa-briefcase"></i>
                    <p class="flex-1">Booking list and staff</p>
                </p>
            </a>

            <a class="flex gap-3" href="/profile/savedProperties">
                <p><i class="far fa-heart"></i>
                    <p class="flex-1">Saved</p>
                </p>
            </a>

            <a class="flex gap-3" href="/profile/schedules">
                <p><i class="fa fa-calendar" aria-hidden="true"></i>
                    <p class="flex-1">Schedule Request Lists</p>
                </p>
            </a>

            <a class="flex gap-3" href="/calculator">
                <p><i class="fa-solid fa-calculator"></i>
                    <p class="flex-1"> Interest Calculator</p>
                </p>
            </a>

            <form class="flex gap-3" action="/logout" method="POST">
                @csrf
                <p>

                    <i class="fas fa-sign-out mr-2"></i>
                    <button class="flex-1">Sign Out</button>
                </p>
            </form>

        </div>
    </nav>
    <nav
        class="py-3 sm:px-5 md:container-space lg:px-10 bg-home-600 flex justify-between items-center hover:border-b-2 hover:border-b-yellow-200">
        <div>
            <h4 class="text-2xl font-semibold font-serif tracking-tighter text-white capitalize">
                Home rental and Selling
                <span class="block text-sm font-thin text-slate-50 opacity-90">Management System</span>
            </h4>
        </div>
        <div class="sm:hidden md:hidden hidden lg:flex">
            <ul class="flex  gap-10 ">
                <li class="">
                    <a href="/"
                        class="text-base py-6 hover:border-b-4  hover:border-b-yellow-600 tracking-wider text-white uppercase"><i
                            class="fas fa-house mr-3"></i> Home</a>
                </li>
                <li>
                    <a href="/properties/sale"
                        class="text-base py-6 hover:border-b-4 hover:border-b-yellow-600 tracking-wider text-white uppercase">
                        Properties</a>
                </li>
                <li>
                    <a href="/news"
                        class="text-base py-6 hover:border-b-4 hover:border-b-yellow-600 tracking-wider text-white uppercase">
                        News</a>
                </li>
                <li>
                    <a href="/agents"
                        class="text-base py-6 hover:border-b-4 hover:border-b-yellow-600 tracking-wider text-white uppercase">
                        Agents</a>
                </li>
                <li>
                    <a href="/faq"
                        class="text-base py-6 hover:border-b-4 hover:border-b-yellow-600 tracking-wider text-white uppercase">
                        FAQ</a>
                </li>
                <li>
                    <a href="/contact_us"
                        class="border border-yellow-600 text-base hover:text-white-600 hover:bg-yellow-600 py-4 px-6 tracking-wider text-white uppercase rounded transition-all duration-300">Contact
                        us</a>
                </li>
            </ul>
        </div>
        <div class="sm:block md:block lg:hidden">
            <button class="text-white text-3xl "><i class="fas fa-bars"></i></button>
        </div>
    </nav>

    <script>
        const profileBtn = document.getElementById('profile-btn');
        const profileContainer = document.getElementById('profile-container');
        const noitContainer = document.getElementById('noti-container')
        const notiBtn = document.getElementById('noti-btn');

        notiBtn.addEventListener('click', function() {
            noitContainer.classList.toggle('hidden');
        })

        profileBtn.addEventListener('click', function() {
            profileContainer.classList.toggle('hidden')
        })
    </script>
</header>
