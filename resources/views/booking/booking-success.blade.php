<x-layout>
    <section class="container w-full flex items-center justify-center  h-[70%]  mx-auto">
        
        <div style="width: 700px" class="h-[400px] space-y-6 relative mt-20 shadow-xl flex flex-col items-center justify-center p-20 rounded overflow-hidden">
            <img class="absolute w-[100%] h-[50%] top-0 z-0 object-cover"  src="https://luxurychicagocondos.com/wp-content/uploads/2019/02/Landmark-42-1.png" alt="">
            <div class="h-96  w-full text-center z-10">
                <i class="fa-solid fa-circle-check  fa-5x text-home-600 animate-bounce"></i>
            </div>
            <div class="text-center z-10 p-2">
                <h4 class="text-lg font-semibold tracking-wide text-gray-700 mb-1 mt-10">Thank you for Renting!</h4>
                <p class="text-sm/7 text-center  tracking-wide">Your renting was successed and Be happy to live in new place. <br> From Our System
                </p>
            </div>
            <div class="flex z-10">
                    <a href="/booking/list" class="rounded w-40 text-center py-2 px-2 shadow mr-3">View Renting</a>
            
                <form action="/properties/rent" method="GET">
                    <button class="rounded py-2 px-2 bg-home-600 uppercase text-white">continue Renting</button>
                </form>
            </div>
        </div>
    </section>
</x-layout>