<x-layout>
    <div class="max-w-[1024px] mx-auto mt-16">
        <section class="px-5 mb-10">
            <div class="flex flex-col md:flex-row text-[14px] gap-5 pb-10">
                <div class="w-full md:w-1/2  py-5">
                    <div class="  flex justify-center items-center gap-1 bg-blue-100 text-blue-800 p-2 rounded-md mb-5">
                        <i class="fa-solid fa-circle-check"></i>
                        <span class="">Select an account type</span>
                    </div>
                    <div class="flex flex-wrap gap-5 mb-5 text-[16px] text-nowrap">
                        <div class=" bg-yellow-600 hover:bg-yellow-600  text-white rounded-md p-2 cursor-pointer">
                            <i class="fa-solid fa-user"></i>
                            <a href="/userSignup">Normal Account</a>
                        </div>
                        <div class=" bg-yellow-600 hover:bg-yellow-600  text-white rounded-md p-2 cursor-pointer">
                            <i class="fa-solid fa-user-group"></i>
                            <a href="/agentSignup" class="">Company/Agent Account</a>
                        </div>
                    </div>
                    <div class="my-1">
                        <i class="fa-regular fa-star"></i>
                        <span class="">Note:both account type are free</span>
                    </div>
                    <div class="my-1">
                        <i class="fa-regular fa-star"></i>
                        <span class="">You can post free ads.</span>
                    </div>
                    <div class="my-1">
                        <i class="fa-regular fa-star"></i>
                        <span class="">But company account has more features.</span>
                    </div>
                    <div class="my-1">
                        <i class="fa-regular fa-star"></i>
                        <span class="">Normal account account can be upgrade to company account later.</span>
                    </div>
                    <div class="my-1">
                        <i class="fa-regular fa-star"></i>
                        <span class="">You can read detail difference between normal and company account <a
                                class="text-blue-500">here</a></span>
                    </div>
                </div>
                <div class="w-full md:w-1/2  py-5">
                    <div class="text-center font-medium text-xl">
                        <span class="text-yellow-600 border-b-2 border-blue-400 py-1">Testimonials</span>
                    </div>
    
                    @php
                    $testimonials = [
                    [
                    'description' => 'We were getting 40 to 50 customers before we advertised with iMyanmarHouse.com. Now we
                    are getting 300 to 400 customers by advertising on iMyanmarHouse.com. We thank iMyanmarHouse.com for
                    that.',
                    'name' => 'Mr. Kyi Lwin Director QHome Development '
                    ],
                    [
                    'description' => 'Since we started advertising online, we worked together with iMyanmarHouse.com and
                    everything is great. We are getting leads very quickly and effectively so that we can close more deals.
                    ',
                    'name' => 'Mr. Soe Wunna Kyal Sin Lin Real Estate'
                    ],
                    [
                    'description' => 'We usually close the deals for rent quickly when we advertise on iMyanmarHouse.com.
                    We’re very pleased to work with them. Everything is doing great with them. .',
                    'name' => 'Mr. Soe Wunna Kyal Sin Lin Real Estate '
                    ],
                    ];
                    $agencies = [
                    ['profile' => 'https://d2qjfpig6fsa51.cloudfront.net/user/7654113-1591294344.png'],
                    ['profile' => 'https://d2qjfpig6fsa51.cloudfront.net/user/1534977-1540550260.jpg'],
                    ['profile' => 'https://d2qjfpig6fsa51.cloudfront.net/user/1676139-1541492872.jpg'],
                    ['profile' => 'https://d2qjfpig6fsa51.cloudfront.net/user/10426538-1682303667.jpg'],
                    ['profile' => 'https://d2qjfpig6fsa51.cloudfront.net/user/1674209-1594116995.jpg'],
                    ['profile' => 'https://d2qjfpig6fsa51.cloudfront.net/user/7654113-1591294344.png'],
                    ['profile' => 'https://d2qjfpig6fsa51.cloudfront.net/user/3671219-1592632613.png'],
                    ['profile' => 'https://d2qjfpig6fsa51.cloudfront.net/user/9552230-1621934593.jpg'],
                    ['profile' => 'https://d2qjfpig6fsa51.cloudfront.net/user/1676139-1541492872.jpg'],
                    ['profile' => 'https://d2qjfpig6fsa51.cloudfront.net/user/3671219-1592632613.png'],
                    ['profile' => 'https://d2qjfpig6fsa51.cloudfront.net/user/1674209-1594116995.jpg'],
                    ['profile' => 'https://d2qjfpig6fsa51.cloudfront.net/user/9995388-1621946632.jpg'],
                    ['profile' => 'https://d2qjfpig6fsa51.cloudfront.net/user/1534977-1540550260.jpg'],
                    ['profile' => 'https://d2qjfpig6fsa51.cloudfront.net/user/10426538-1682303667.jpg'],
                    ];
                    @endphp
    
                    <div class="relative overflow-hidden pt-10 pb-8">
                        <div class="flex transition-transform duration-300 ease-in-out relative">
                            @foreach ($testimonials as $index => $testimonial)
                            <div
                                class="relative  testimonial-slide transition-transform duration-300 ease-in-out flex-shrink-0 w-full h-auto p-5 rounded-md border-[1px] shadow-md">
                                <p>{{$testimonial['description']}}</p>
                                <p class="text-right pt-3">{{$testimonial['name']}}</p>
                                <div class="absolute -top-5 text-3xl text-gray-400 left-0 z-10 visible">
                                    <i class="fa-solid fa-quote-left "></i>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
    
                    <div class="flex justify-center">
                        @foreach ($testimonials as $index => $testimonial)
                        <div class="testimonial-dot cursor-pointer my-0 mx-1 text-gray-400 {{ $index === 0 ? 'text-gray-800' : '' }}"
                            onclick="changeTestimonial({{ $index }})">
                            <i class="fas fa-circle text-[8px]"></i>
                        </div>
                        @endforeach
                    </div>
                    <p class="text-right text-blue-500">Read more</p>
                </div>
            </div>
            <div class="">
                <div class="text-center font-medium text-xl">
                    <span class="text-yellow-600 text-xl tracking-wide border-b-2 border-blue-400 py-1">Partnerships with Home renting and selling management system</span>
                </div>
                <h3 class=" text-blue-500 text-xl text-center py-5">Over <span class="font-[500]">{{ $agents->count() }}</span> Real Estate
                    Agencies</h3>
                <div class="grid grid-cols-2  md:grid-cols-5 lg:grid-cols-7 gap-2 md:gap-3">
                    @foreach ($agents as $agency)
                    <div class=" h-32 border-[1px] border-gray-600">
                        <img src="{{ $agency->company_logo }}" alt="" class=" w-full h-full">
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    
        <script>
            function changeTestimonial(index) {
                        const slides = document.querySelectorAll('.testimonial-slide');
                        const dots = document.querySelectorAll('.testimonial-dot');
    
                        slides.forEach(slide => {
                            slide.style.transform = `translateX(-${index * 100}%)`;
                        });
                        dots.forEach(dot => {
                            dot.classList.remove('text-gray-800');
                        });
                        dots[index].classList.add('text-gray-800');
                    }
        </script>
    </div>
</x-layout>