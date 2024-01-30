<x-agent-dashboard-layout>
    <div class="">

        <h3 class="text-2xl text-gray-300 underline underline-offset-8 decoration-yellow-600">Post Advertisments</h3>
        <div class="border mt-10 p-3 py-5 space-y-5">
            <div class="grid grid-cols-2">
                <p class="text-sky-200 text-lg">Number of total listings allowed to post</p>
                <span class="text-lg text-sky-200 text-center">{{ $allowed_ad }}</span>
            </div>
            <div class="grid grid-cols-2">
                <p class="text-yellow-200 text-lg">Number of  listings you already post</p>
                <span class="text-lg text-sky-200 text-center">{{ $posted_ad }}</span>
            </div>
            <div class="grid grid-cols-2">
                <p class="text-green-200 text-lg">Number of  listings avilable to post</p>
                <span class="text-lg text-sky-200 text-center">{{ $allowed_ad - $posted_ad }}</span>
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