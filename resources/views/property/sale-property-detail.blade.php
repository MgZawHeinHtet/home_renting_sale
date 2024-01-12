<x-layout>
    <div class="container mx-auto">
       

        <section class="w-full flex flex-col lg:flex-row justify-between p-5 lg:p-7 gap-5 ">
            <div class="flex-1 ">
                <h1 class=" text-[26px] md:text-[28px] font-[500]">{{ $property->title }}</h1>
                <p class="text-[16px] md:text-[18px] font-[500] pb-5">{{ $property->bedroom }} bedroom, {{ $property->bathroom }} bathroom {{ $property->type }} for {{ $property_type }} in {{ $property->township }}, {{ $property->region }}
                </p>
    
                <!-- Image -->
                @php
                 $imageUrls = [
                
                ];
                 foreach ($property->salePropertyImage as $image) {
                    $imageUrls[] = $image->image;
                 }

                @endphp
                <div class="relative overflow-hidden">
                    <!-- Main image -->
                    <div id="fullWidthImages" class="flex transition-transform duration-300 ease-in-out">
                        @foreach ($imageUrls as $index => $image)
                        <img src="{{ $image }}" alt="Full Width Image" class=" flex-shrink-0 w-full h-auto"
                            data-index="{{ $index }}">
                        @endforeach
                    </div>
    
                    <!-- Previous Button -->
                    <div id="prevButton"
                        class=" absolute top-[50%]  translate-y-[-50%]  w-[30px] h-[30px] md:w-[40px] md:h-[40px] bg-white bg-opacity-70 rounded-full flex justify-center items-center cursor-pointer left-[10px]">
                        <i class="fas fa-chevron-left text-[#002349]"></i>
                    </div>
    
                    <!-- Next Button -->
                    <div id="nextButton"
                        class=" absolute top-[50%]  translate-y-[-50%] w-[30px] h-[30px] md:w-[40px] md:h-[40px] bg-white bg-opacity-70 rounded-full flex justify-center items-center cursor-pointer right-[10px]">
                        <i class="fas fa-chevron-right text-[#002349]"></i>
                    </div>
                </div>
    
                <!-- Small images -->
                <div class="flex justify-center items-center py-2">
                    <div id="smallImages" class="overflow-x-scroll flex justify-start gap-2 cursor-pointer">
                        @foreach ($imageUrls as $index => $image)
                        <img src="{{ $image }}"
                            class="w-16 h-16 small-image @if ($index === 0) border-[#002349] border-solid border-2 @endif"
                            alt="Small Image" data-index="{{ $index }}">
                        @endforeach
                    </div>
                </div>
    
                <div class="flex flex-wrap gap-2 flex-row justify-between py-2 text-[14px] md:text-[18px] font-[500]">
                    <h3 class="">{{ $property->township }}, {{ $property->region }}</h3>
                    <h3 class=""><span class=" text-[#002349] font-bold">For Sale </span>{{ $property->price }} Lakhs
                    </h3>
                </div>
                <div class="flex flex-wrap flex-row gap-2 justify-between py-2">
                    <ul class=" list-none flex flex-wrap text-[12px] text-[#2e3238]">
                        <li class="border-solid border-r-[1px] pr-2 flex justify-center items-center gap-2"><i
                                class="fa fa-home text-[#002349]" aria-hidden="true"></i><span>{{ $property->type }}</span></li>
                        <li class="border-solid border-r-[1px] px-2 flex justify-center items-center ">{{ $property->area }} ft<span
                                class=" -translate-y-2 ">2</span></li>
                        <li class="border-solid border-r-[1px] px-2 flex justify-center items-center gap-2 "><i
                                class="fa-solid fa-bed"></i><span class=" -translate-y-2 ">{{ $property->bedroom }}</span></li>
                        <li class="border-solid border-r-[1px] px-2 flex justify-center items-center gap-2 "><i
                                class="fa-solid fa-bath"></i><span class=" -translate-y-2 ">{{ $property->bathroom }}</span></li>
                    </ul>
                    <p class=" border-solid border-[#ccc] border-2 font-[500] text-[14px] px-2">Property
                        ID: S-1361176</p>
                </div>
                <div class="flex flex-wrap justify-between gap-2  py-2">
                    <div class="flex justify-center items-center gap-2 text-[#002349] text-[14px] "><i
                            class="fa-solid fa-bolt " aria-hidden="true"></i><span>Premium</span></div>
                    <p class=" flex-0  text-[14px] px-2 text-[#2e3238]">Posted Date : {{ $property->created_at->format('d m ') }}</p>
                </div>
    
                {{-- <div class=" text-[#65738b] text-[14px]">
                    <div class="mb-4">
                        အလုံမြို့နယ် ကမ်းနားလမ်းမပေါ်မှာတည်ရှိတဲ့ ပိုင်ဆိုင်မှုခိုင်မာသော Shwe Zabu Date Luxury Condo မှ
                        ရောင်းရန်ရှိသော အသင့်နေ အခန်း
                    </div>
                    <div class="mb-4">
                        <p class=""">#အရောင်းဈေးနှုန်း၇၅၀၀သိန်ညှိနှိုင်း</p>
                    <p class="">#Forsale7500Lmmk(negotiate)</p>
                </div>
     --}}
                {{-- <div class=" mb-4">
                        <p class="font-bold">💎 Shwe Zabu Date Luxury Condo ၊ အလုံမြို့နယ်</p>
                        <ul class="list-none">
                            <li class="mb-2">✅ အကျယ် ( 2360sqft )</li>
                            <li class="mb-2">✅ 2 master bedrooms</li>
                            <li class="mb-2">✅ 2 single bedrooms</li>
                            <li class="mb-2">✅ Fully Decorated</li>
                        </ul>
                    </div>
                    <div class="mb-4">
                        <p class="font-bold">Facilities 🌲🌲🌲</p>
                        <ul class="list-none">
                            <li class="mb-2">✅ Lift</li>
                            <li class="mb-2">✅ Car Parking</li>
                            <li class="mb-2">✅ Security</li>
                            <li class="mb-2">✅ Generator</li>
                            <li class="mb-2">✅ Swimming Pool / Gym</li>
                            <li class="mb-2">✅ Mini Cinema</li>
                        </ul>
                    </div>
                    <div class="mb-4">
                        <p class="font-bold">2024#CodeCondo1a</p>
                        <p class="font-bold">Contact</p>
                        <p>📳 09420010411</p>
                        <p>📳 09795544104</p>
                        <p>📳 09796878985</p>
                    </div>
                    <div class="mb-4">
                        <p class="">#ShweHtakeTannKhit </p>
                        <p class="">#RealEstateService </p>
                    </div>
                    <p class="mb-4">
                        လူကြီးမင်းတို့ပိုင် အိမ်၊ခြံ၊မြေများကိုလည်းအမြန်ဆုံးရောင်း/ငှားဖြစ်အောင် ဆက်သွယ်အပ်နှံနိုင်ပါသည်
                    </p>
                    <p class="mb-4">
                        ယခုကြော်ငြာများအပြင် အိမ်ခြံမြေကွန်ဒိုတိုက်ခန်းစက်မှုဇုန် ရောင်း/ငှားရန် အခြားနေရာကောင်းများ
                        လည်းရှိပါသဖြင့် ယခုပဲ လူကြီးမင်းတို့ ဆက်သွယ်စုံစမ်းမေးမြန်းနိုင်ပါသည်
                    </p>
                    <p class="">#homeforeverybody </p>
                    <p class="">#shweproperty </p>
                    <p class="">#ShweHtakeTannKhit </p>
                    <p class="">#အိမ်ခြံမြေ </p>
                    <p class="">#အကျိုးဆောင် </p>
                    <p class="">#ရွှေထိပ်တန်းခေတ် </p>
                    <p class="">#realestate </p>
                    <p class="">#Condosale</p>
                </div> --}}
    
                <!-- Property Details -->
                {{-- <div class=" border-t-[1px] border-solid mt-2 py-2">
                    <h3 class="">Property Details</h3>
                    <p class="text-[14px]"><span class="font-bold">Property Name : </span> အလုံမြို့နယ်
                        ကမ်းနားလမ်းမပေါ်မှာတည်ရှိတဲ့ ပိုင်ဆိုင်မှုခိုင်မာသော Shwe Zabu Date Luxury Condoမှ ရောင်းရန်ရှိသော
                    </p>
                </div> --}}
    
                <div class="grid grid-cols-3 text-[#65738b]">
                    @foreach([
                    ['icon' => 'fa-solid fa-house', 'property' => 'TYPE', 'value' => 'Condo'],
                    ['icon' => 'fa-brands fa-codepen', 'property' => 'AREA', 'value' => '2360 ft2'],
                    ['icon' => 'fa-solid fa-bed', 'property' => 'BED ROOM', 'value' => '2'],
                    ['icon' => 'fa-solid fa-bath', 'property' => 'BATH ROOM', 'value' => '3'],
                    ['icon' => 'fa-regular fa-user', 'property' => 'OWNERSHIP', 'value' => ''],
                    ] as $property)
                    <div class="bg-white rounded-lg p-4 flex items-center gap-2 ">
                        <!--  property content -->
                        <i class="{{ $property['icon'] }} text-[#002349]"></i>
                        <div class="text-[10px] flex flex-col "><span class="">{{ $property['property'] }}</span>
                            <span class="">{{ $property['value'] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
    
            <div class="w-full lg:w-1/4 py-5">
                <div class="flex items-center gap-3 text-[14px] pb-7 font-[500] ">
                    <i class="fas fa-chevron-left cursor-pointer"></i>
                    <h3>BACK TO SEARCH</h3>
                </div>
                <div class="bg-white rounded-lg py-4 flex items-center gap-5 ">
                    <div
                        class=" overflow-hidden w-[85px] h-[85px] relative border-solid border-[2px] border-[#e0e0e0] rounded-full">
                        <img class=" absolute top-0 left-0 object-cover"
                            src="" />
                    </div>
                    <div class="text-[10px] flex flex-col flex-1 ">
                        <a class=" pb-[5px] text-[16px] font-[500] cursor-pointer hover:underline text-blue-500">Shwe Htake
                            Tann Khit</a>
                        <a
                            class="flex justify-center items-center gap-[1px]  w-full h-[44px] border-[#0da50c] border-solid border-[1px] rounded-md">
                            <i
                                class="fa-solid fa-phone h-[42px] w-[44px] bg-[#0da50c] border-[#0da50c] border-solid border-[1px] flex justify-center items-center text-white text-[16px]"></i>
                            <span
                                class="flex justify-center items-center flex-1 text-center text-[16px] font-[500] w-full h-full text-[#0da50c] hover:bg-[#0da50c] hover:text-white transition-all ease-in">Call</span>
                        </a>
                    </div>
                </div>
                {{-- Form --}}
                <form>
                    <input
                        class="mb-2 outline-none relative w-full h-[48px] px-[15px] border-[#e0e0e0] border-solid border-[2px] rounded-md text-[13px]"
                        type="text" placeholder="Name*" required />
                    <input
                        class="mb-2 outline-none relative w-full h-[48px] px-[15px] border-[#e0e0e0] border-solid border-[2px] rounded-md text-[13px]"
                        type="text" placeholder="Mobile Number" required />
                    <input
                        class="mb-2 outline-none relative w-full h-[48px] px-[15px] border-[#e0e0e0] border-solid border-[2px] rounded-md text-[13px]"
                        type="text" placeholder="Email Address" required />
                    <textarea
                        class=" resize-none mb-2 outline-none relative w-full h-[100px] p-[15px] border-[#e0e0e0] border-solid border-[2px] rounded-md text-[13px]"
                        type="text" value="" />Hello, I am interested in this property posted on ShweProperty.com and would like to request more information. Could you please contact me back as soon as possible? Thank you.</textarea>
                    <label class="relative inline-flex mr-5 cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer" checked>
                        <div
                            class="w-9 h-5 md:w-11 md:h-6 bg-gray-400 rounded-full peer dark:bg-gray-400 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-500 after:border after:rounded-full after:h-4 md:after:h-5  after:w-4 md:after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[#002349]">
                        </div>
                        <span class="flex-1 ml-3 text-[13px] font-medium text-gray-900 dark:text-gray-300">Keep me updates
                            with
                            real estate news</span>
                    </label>
                    <button
                        class=" text-center bg-[#002349] text-wrap text-white w-full rounded-md h-[42px] cursor-pointer text-[12px] md:text-[14px] font-600">Send
                        Now</button>
                </form>
            </div>
            </div>
    </div>
</x-layout>

@section('javascript')
    <script>
        let currentImageIndex = 0;
        const mainImage = document.getElementById('mainImage');
        const leftIcon = document.getElementById('leftIcon');
        const rightIcon = document.getElementById('rightIcon');
        const thumbnails = document.querySelectorAll('.w-full.flex.flex-wrap.justify-center > img');
        
      

        function changeImage(newImageUrl, index) {
            mainImage.src = newImageUrl;
            currentImageIndex = index;
            toggleIconsVisibility();
        }

        function prevImage() {
        console.log('prev');
            if (currentImageIndex > 0) {
                currentImageIndex--;
                mainImage.src = thumbnails[currentImageIndex].src;
                toggleIconsVisibility();
            }
        }

        function nextImage() {
            if (currentImageIndex < thumbnails.length - 1) {
                currentImageIndex++;
                mainImage.src = thumbnails[currentImageIndex].src;
                toggleIconsVisibility();
            }
        }

        function toggleIconsVisibility() {
            leftIcon.style.opacity = currentImageIndex === 0 ? '0.5' : '1';
            leftIcon.style.pointerEvents = currentImageIndex === 0 ? 'none' : 'auto';

            rightIcon.style.opacity = currentImageIndex === thumbnails.length - 1 ? '0.5' : '1';
            rightIcon.style.pointerEvents = currentImageIndex === thumbnails.length - 1 ? 'none' : 'auto';

            thumbnails.forEach((thumbnail, index) => {
                if (index === currentImageIndex) {
                    thumbnail.classList.add('border-2', 'border-[#002349]');
                } else {
                    thumbnail.classList.remove('border-2', 'border-[#002349]');
                }
            });
        }

        // Initially set the border for the first thumbnail
        thumbnails[currentImageIndex].classList.add('border-2', 'border-[#002349]');
    </script>
@endsection

@yield('javascript')


