<header>
    <nav class="w-full py-3 px-10 bg-home-900 flex items-center justify-end">
            
            @auth
            <div class="">
                @if (auth()->user()->role === 'agent')
                    <a class="text-white mx-3 " href="/adminAgents">Agent Dashobard</a>
           
                  @elseif (auth()->user()->role === "customer")
                  <a class="text-white mx-3 " href="/profile"><i class="fa-solid fa-user mr-1"></i>  Profile</a>
                    @endif
                </div>

            <form action="/logout" method="POST">
                @csrf
                <button class="mx-1 text-white"><i class="fa fa-sign-out" aria-hidden="true"></i>
                    Logout</button>
            </form>
        @else
            <div>
                <a class="text-white" href="">Join</a>
                <span class="mx-1 text-white">/</span>
                <a class="text-white" href="/login">Login</a>
            </div>
        @endauth

        
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
                    <a
                        class="text-base py-6 hover:border-b-4  hover:border-b-yellow-600 tracking-wider text-white uppercase"><i
                            class="fas fa-search mr-3"></i> Search</a>
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
</header>
