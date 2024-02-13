<x-agent-dashboard-layout>
    <div class="relative">
        <div
            class="absolute bottom-[-50px] animate-bounce right-0 w-12 h-12 rounded-full bg-yellow-600 flex items-center justify-center">
            <button class="show-btn">
                <i class="fa-solid fa-cart-shopping text-gray-950 text-lg"></i>
            </button>
        </div>

        {{-- alert box to buy or not --}}
        <div class="alert-container hidden w-screen h-screen bg-black bg-opacity-50 z-50 fixed top-0 right-0  justify-center items-center">
            <div class="w-[520px] flex flex-col  items-center p-6 h-52 bg-white shadow-lg z-50 rounded-lg ">
                <p class="text-2xl mb-5">Warning 😉</p>
                <p>You can buy 10 chance for allowed_posts by using 5 credit points.</p>
                <p class="text-yellow-600 capitalize mt-1">Posting property and get a profit</p>
                <div class="flex gap-10 mt-5">
                    <button class="cancelBtn px-6 py-2 text-red-600">Exit</button>
                    <form action="/adminAgents/allowPosts/buy" method="POST">
                        @csrf
                        <button class="px-6 py-2 text-green-800">Buy</button>
                    </form>
                </div>
            </div>
        </div>

        <h3 class="text-2xl text-gray-300 underline underline-offset-8 decoration-yellow-600">Post Advertisments</h3>
        <div class="border mt-10 p-3 py-5 space-y-5">
            <div class="grid grid-cols-2">
                <p class="text-sky-200 text-lg">Number of total listings allowed to post</p>
                <span class="text-lg text-sky-200 text-center">{{ $allowed_ad }}</span>
            </div>
            <div class="grid grid-cols-2">
                <p class="text-yellow-200 text-lg">Number of listings you already post</p>
                <span class="text-lg text-sky-200 text-center">{{ $posted_ad }}</span>
            </div>
            <div class="grid grid-cols-2">
                <p class="text-green-200 text-lg">Number of listings available to post</p>
                <span
                    class="text-lg text-sky-200 text-center">{{ $allowed_ad > $posted_ad ? $allowed_ad - $posted_ad : '0' }}</span>
            </div>
        </div>
        <div class="p-2 flex justify-center bg-yellow-200 rounded mt-10">
            <p><i class="fa-solid fa-circle-check"></i> Choose One</p>
        </div>
        <div class="grid grid-cols-3 justify-center gap-20  mt-10">
            <a href="/adminAgents/post-ad-sale">

                <div class=" h-[200px]   text-center bg-home-900 rounded-lg p-6">
                    <i class="fas fa-ad text-[100px] text-gray-300"></i>
                    <p class="text-xl text-gray-300 mt-3">Post Ad For Sale</p>
                </div>
            </a>
            <a href="/adminAgents/post-ad-rent">

                <div class=" h-[200px] text-center bg-home-900 rounded-lg p-6">
                    <i class="fas fa-ad text-[100px] text-gray-300"></i>
                    <p class="text-xl text-gray-300 mt-3">Post Ad For Rent</p>
                </div>
            </a>
        </div>
    </div>
</x-agent-dashboard-layout>


@section('javascript')
<script>
    const cancelBtn = document.querySelector('.cancelBtn');
    const alertContainer = document.querySelector('.alert-container');
    const showBtn = document.querySelector('.show-btn');
    cancelBtn.addEventListener('click', function (){

        alertContainer.classList.remove('flex');
        alertContainer.classList.add('hidden');
    })

    showBtn.addEventListener('click', function(){
        alertContainer.classList.remove('hidden');
        alertContainer.classList.add('flex');
    })
</script>
@endsection

@yield('javascript')