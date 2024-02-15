<x-layout>

    <div style="font-family: 'Inter', sans-serif;">
        <!-- navber start -->


        <!-- first section start -->
        <div class="relative overflow-hidden">
            <div class="w-full h-full absolute bg-[rgba(0,0,0,0.2)] z-0"></div>
            <div class="xl:px-[160px] lg:px-[60px] sm:px-[30px] px-[20px] pt-[70px] pb-[140px]"
                style="background-image:url('https://assets-global.website-files.com/650adcad05bc07eb4bae8d2a/650aeddee15bcf9447f9a682_photo-3.jpg'); background-position: center; background-size: cover;">
                <div
                    class="z-10 relative mb-[40px] border broder-white flex items-center gap-3 justify-center text-white rounded-xl w-[200px] ">
                    <div class="w-[13px] h-[13px] bg-white rounded-full"></div>
                    <p>
                        Welcome to Property</p>
                </div>
                <h1
                    class="relative z-10 pb-[30px] md:text-[68px] text-[33px] font-[600] text-white xl:w-[600px] lg:w-[350px] leading-none">
                    Where
                    dream homes become a reality.</h1>
                <p class="xl:w-full lg:w-[400px] relative z-10 text-[21px] font-[400] text-white pb-[60px]">Discover
                    more
                    than 1,000+ property showcases.</p>
                <button
                    class="relative z-10 first-btn flex bg-[#002349] rounded justify-center items-center px-[25px] py-[20px] gap-3 text-white">
                    <p class="text-[17px] font-[600]">Post a property</p>
                    <svg class="first-btn-icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                        viewBox="0 0 16 16">
                        <path fill="currentColor"
                            d="M3.707 13.707L12 5.414V9a1 1 0 0 0 2 0V3a1.002 1.002 0 0 0-1-1v-.001H7a1 1 0 0 0 0 2h3.586l-8.293 8.293a.997.997 0 0 0 0 1.414a.999.999 0 0 0 1.414 0z" />
                    </svg>
                </button>
            </div>
            <div class="absolute bottom-0 w-full">
                <img src="https://assets-global.website-files.com/650adcad05bc07eb4bae8d2a/650aecc6785676a1148c1157_wave-haikei%20(3).svg"
                    alt>
            </div>
        </div>

        <!-- third section start -->
        <div class="xl:px-[160px] lg:px-[60px] md:px-[30px] px-[0] pb-10">
            <div
                class="z-10 relative mb-[40px] mx-auto border-2 border-green-600 flex items-center gap-3 justify-center text-white rounded-xl w-[200px] ">
                <div class="w-[13px] h-[13px] bg-green-600 rounded-full"></div>
                <p class="text-[#00693d] font-[500]">
                    Featured Property</p>
            </div>
            <h1 class="text-center text-[43px] font-[600] pb-10">Our choice
                of popular real estate</h1>
            <div class="gap-5 grid lg:grid-cols-3 grid-cols-1 ">

                @foreach ($rent_properties as $property)
                    <x-home-rent-card :property="$property"></x-home-rent-card>
                @endforeach



            </div>
            <div class="flex items-center justify-center pt-5">
                <form action="/properties/rent">

                    <button
                        class="border px-[20px] py-[10px] hover:scale-[1.05] rounded-lg bg-[#002349] text-white">Browse
                        all properties</button>
                </form>
            </div>
        </div>

        <div class="w-full xl:px-[160px] lg:px-[60px] md:px-[30px] px-[0] pb-10 relative">
            <div class="w-full grid grid-cols-2 gap-4">
                @foreach ($sale_properties as $property)
                    <x-home-sale-card :property="$property"></x-home-sale-card>
                @endforeach

            </div>
            <div class="flex items-center justify-center pt-5 mb-4">
                <form action="/properties/sale">
                    <button
                        class="border px-[20px] hover:scale-[1.05] py-[10px] rounded-lg bg-[#002349] text-white">Browse
                        all properties</button>
                </form>
            </div>
        </div>


        <div class="xl:px-[160px] px-[40px] mb-[100px]">
            <div
                class="relative mb-[30px] mx-auto border-2 border-green-600 flex items-center gap-3 justify-start text-white rounded-xl w-[150px] ">
                <div class="w-[13px] h-[13px] bg-green-600 rounded-full ms-4"></div>
                <p class="text-[#00693d] font-[500]">
                    From News</p>
            </div>
            <h1 class="text-center text-[43px] font-[600] pb-3">The latest
                News</h1>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1  gap-7">
                @foreach ($newses as $news)
                    <x-home-news-card :news="$news"></x-home-news-card>
                @endforeach
            </div>
        </div>
        <!-- nine section end -->
        <!-- ten section -->
        <div class="bg-gray-200 px-2 py-10">

            <div id="features" class="mx-auto max-w-6xl">
                <p class="text-center text-base font-semibold leading-7 text-primary-500">Feature</p>
                <h2 class="text-center font-display text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">
                    OUR SERVICE </h2>
                <ul class="mt-16 grid grid-cols-1 gap-6 text-center text-slate-700 md:grid-cols-3">
                    <li class="rounded-xl bg-white px-6 py-8 shadow-sm">

                        <img src="https://www.svgrepo.com/show/530438/ddos-protection.svg" alt=""
                            class="mx-auto h-10 w-10">
                        <h3 class="my-3 font-display font-medium">SAFE</h3>
                        <p class="mt-1.5 text-sm leading-6 text-secondary-500">
                            the cutting-edge language model that makes interactions a breeze. With its user-friendly
                            interface,
                            effortlessly tap into the world of AI-generated text.
                        </p>

                    </li>
                    <li class="rounded-xl bg-white px-6 py-8 shadow-sm">

                        <img src="https://www.svgrepo.com/show/530442/port-detection.svg" alt=""
                            class="mx-auto h-10 w-10">
                        <h3 class="my-3 font-display font-medium">EFFICIENT</h3>
                        <p class="mt-1.5 text-sm leading-6 text-secondary-500">
                            Simply input your subject, click the generate button, and the result will appear in
                            seconds just like
                            magick.
                        </p>

                    </li>
                    <li class="rounded-xl bg-white px-6 py-8 shadow-sm">
                        <img src="https://www.svgrepo.com/show/530444/availability.svg" alt=""
                            class="mx-auto h-10 w-10">
                        <h3 class="my-3 font-display font-medium">PROVEN</h3>
                        <p class="mt-1.5 text-sm leading-6 text-secondary-500">
                            We offer advanced customization. You can freely combine options like roles, languages,
                            publish, tones,
                            lengths,
                            and formats.
                        </p>

                    </li>
                    <li class="rounded-xl bg-white px-6 py-8 shadow-sm">
                        <a href="/pricing" class="group">
                            <img src="https://www.svgrepo.com/show/530440/machine-vision.svg" alt=""
                                class="mx-auto h-10 w-10">
                            <h3 class="my-3 font-display font-medium group-hover:text-primary-500">GLOBAL</h3>
                            <p class="mt-1.5 text-sm leading-6 text-secondary-500">We offer a free trial service
                                without login. We
                                provide
                                many payment options including pay-as-you-go and subscription.</p>
                        </a>
                    </li>
                    <li class="rounded-xl bg-white px-6 py-8 shadow-sm">
                        <a href="/templates" class="group">
                            <img src="https://www.svgrepo.com/show/530450/page-analysis.svg" alt=""
                                class="mx-auto h-10 w-10">
                            <h3 class="my-3 font-display font-medium group-hover:text-primary-500">
                                COLLABORATIVE
                            </h3>
                            <p class="mt-1.5 text-sm leading-6 text-secondary-500">We offer many templates covering
                                areas such as
                                writing,
                                education, lifestyle and creativity to inspire your potential. </p>
                        </a>
                    </li>
                    <li class="rounded-xl bg-white px-6 py-8 shadow-sm">
                        <a href="/download" class="group">
                            <img src="https://www.svgrepo.com/show/530453/mail-reception.svg" alt=""
                                class="mx-auto h-10 w-10">
                            <h3 class="my-3 font-display font-medium group-hover:text-primary-500">SECURE</h3>
                            <p class="mt-1.5 text-sm leading-6 text-secondary-500">Our product is compatible with
                                multiple platforms
                                including Web, Chrome, Windows and Mac, you can use MagickPen anywhere.</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

</x-layout>
