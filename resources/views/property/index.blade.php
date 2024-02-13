<x-layout>
    <div
        class="md:px-[50px] px-[30px] mt-5 w-[100vw] flex xl:flex-row md:flex-col flex-row xl:gap-[50px] gap-[30px] sticky top-0 bg-white py-5 shadow-sm z-40">


        <div class="text-gray-800 flex gap-3 items-center border-b-2 xl:w-[35%] md:w-[100%] w-[90%]">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14" />
            </svg>
            <form class="flex-1" action="/properties/{{ $type }}">

                <input type="text" name="search_input" class="w-full border-0 outline-none md:text-[14px] text-[10px]"
                    placeholder="Country, City, Address, Postal Code or ID">
            </form>
        </div>

        <div class="md:hidden block w-[10%] text-[#A2B0CE]">
            <svg xmlns="http://www.w3.org/2000/svg" id="menu-buttom" class="menu-buttom" onclick="menu()" width="32"
                height="32" viewBox="0 0 1024 1024">
                <path fill="currentColor"
                    d="M160 448a32 32 0 0 1-32-32V160.064a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V416a32 32 0 0 1-32 32zm448 0a32 32 0 0 1-32-32V160.064a32 32 0 0 1 32-32h255.936a32 32 0 0 1 32 32V416a32 32 0 0 1-32 32zM160 896a32 32 0 0 1-32-32V608a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32v256a32 32 0 0 1-32 32zm448 0a32 32 0 0 1-32-32V608a32 32 0 0 1 32-32h255.936a32 32 0 0 1 32 32v256a32 32 0 0 1-32 32z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" id="close-buttom" class="close-buttom hidden" onclick="close()"
                width="32" height="32" viewBox="0 0 1024 1024">
                <path fill="currentColor"
                    d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504L738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512L828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496L285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512L195.2 285.696a64 64 0 0 1 0-90.496" />
            </svg>
        </div>
        <div id="menu" class="xl:w-[65%] w-[100%] md:flex xl:gap-[40px] gap-[20px]  hidden">
            <div class="flex">
                <form action="/properties/sale">
                    <button
                        class="border-[1px] px-3 py-1 shadow-lg border-[black] {{ $type === 'sale' ? 'bg-[#002349] text-white' : '' }}   font-bold text-[13px] tracking-widest">BUY</button>
                </form>
                <form action="/properties/rent">
                    <button
                        class="border-[1px] px-3 py-1 shadow-lg border-[black] {{ $type === 'rent' ? 'bg-[#002349] text-white' : '' }} font-bold text-[13px] tracking-widest">RENT</button>
                </form>
            </div>

            <div class>
                <button
                    class="border-[1px] px-3 py-1 shadow-lg border-[black] font-bold text-[13px] tracking-widest">PRICE
                    RANGE</button>
            </div>
            <div class>
                <button
                    class="border-[1px] px-3 py-1 shadow-lg border-[black] font-bold text-[13px] tracking-widest">BEDS
                    & BATHS</button>
            </div>
            <div class>
                <button
                    class="border-[1px] px-3 py-1 shadow-lg border-[black] font-bold text-[13px] tracking-widest">HOME
                    TYPE</button>
            </div>
            <div class>
                <button
                    class="border-[1px] px-3 py-1 shadow-lg border-[black] font-bold text-[13px] tracking-widest">FILTER</button>
            </div>
        </div>
    </div>
    {{-- mobile --}}
    <div id="hidden-menu"
        class="hidden-menu px-[20px] py-[10px] w-[100%] hidden flex-col  gap-[10px] absolute bg-white">
        <div class="flex">
            <button
                class="border-[1px] px-3 py-1 shadow-lg border-[black] bg-[#002349] text-white font-bold text-[13px] tracking-widest">BUY</button>
            <button
                class="border-[1px] px-3 py-1 shadow-lg border-[black] font-bold text-[13px] tracking-widest">RENT</button>
        </div>

        <div class>
            <button class="border-[1px] px-3 py-1 shadow-lg border-[black] font-bold text-[13px] tracking-widest">PRICE
                RANGE</button>
        </div>
        <div class>
            <button class="border-[1px] px-3 py-1 shadow-lg border-[black] font-bold text-[13px] tracking-widest">BEDS
                & BATHS</button>
        </div>
        <div class>
            <button class="border-[1px] px-3 py-1 shadow-lg border-[black] font-bold text-[13px] tracking-widest">HOME
                TYPE</button>
        </div>
        <div class>
            <button
                class="border-[1px] px-3 py-1 shadow-lg border-[black] font-bold text-[13px] tracking-widest">FILTER</button>
        </div>
    </div>
    <!-- first section -->
    <div class="pt-[40px] lg:px-[50px] px-[30px]">
        <p class="text-lg font-semibold pb-3">Viewing {{ $properties->count() }} of {{ $properties->total() }} Homes
            for {{ request('type') }} in All locations</p>
        <p class="text-md font-family text-[#666666 pb-[40px]">Showing
            listings marketed by all brokers in the searched area.</p>
        <div class="pb-[50px]">
            <button class="flex gap-2 text-[13.5px] font-bold tracking-widest justify-center items-center">SORT:
                EXCLUSIVE (DEFAULT)
                <svg xmlns="http://www.w3.org/2000/svg" class="hidden" width="27" height="27"
                    viewBox="0 0 24 24">
                    <path fill="currentColor" d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6l-6 6z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class width="27" height="27" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6l-6-6z" />
                </svg>
            </button>
        </div>
    </div>

    <!-- second section -->
    <div
        class="grid xl:grid-cols-3 lg:grid-cols-2 md:grid-cols-2 grid-cols-1   lg:px-[50px] px-[30px] gap-x-5 gap-y-[50px]">
        @foreach ($properties as $property)
            <a href="/properties/{{ $property->id }}/{{ $type }}">
                <x-property-card :type="$type" :property="$property"></x-property-card>
            </a>
        @endforeach


    </div>
    <div class="text-center my-14">

        {{ $properties->links() }}
    </div>
</x-layout>
