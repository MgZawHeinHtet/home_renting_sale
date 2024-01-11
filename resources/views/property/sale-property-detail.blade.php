<x-layout>
    <div class="container mx-auto">

        <section class="flex flex-row justify-between p-5 lg:p-7 ">
            <div class="w pr-10">
                <h1 class="text-[28px] font-[500]">Condo For Sale in Ahlon</h1>
                <p class="text-[18px] font-[500] pb-5">4 bedroom, 3 bathroom Condo for sale in Ahlon, Yangon</p>
    
                <!-- Image -->
                @php
                    $properties = [
                        [
                            'thumbnails' => ['https://www.shweproperty.com/property-img/f258e7cc3872a19ec1f87ccb5e3c340893554783i7u7u5y1i5p35547s5174ff5c37670b5f6cf46f5aa0f6c4f9', 'https://www.shweproperty.com/property-img/943a68b6182c633537ced614c759b70693554783i7u7u5y1i5p35547s5174ff5c37670b5f6cf46f5aa0f6c4f9', 'https://www.shweproperty.com/property-img/5c9920643fd1c9c92c26ac3ff76cbf4593554783i7u7u5y1i5p35547s5174ff5c37670b5f6cf46f5aa0f6c4f9', 'https://www.shweproperty.com/property-img/d8dbab5164f7ed3a7c049e890ffcdd4693554783i7u7u5y1i5p35547s5174ff5c37670b5f6cf46f5aa0f6c4f9', 'https://www.shweproperty.com/property-img/92ddcbbe5ed978baf2f9e29cbcd7904693554783i7u7u5y1i5p35547s5174ff5c37670b5f6cf46f5aa0f6c4f9'],
                        ],
                    ];
                    $currentImageIndex = 0;
                @endphp
                <div class="relative py-5">
                    <!-- Main Image Section -->
                    <div class="flex justify-center">
                        <div class="relative overflow-hidden w-full">
                            <img id="mainImage" src="{{ $properties[0]['thumbnails'][0] }}" alt="Main Image"
                                class="w-full h-96 object-cover">
                            <i class="fas fa-chevron-left text-xl cursor-pointer absolute top-1/2 transform -translate-y-1/2 left-4 z-10 opacity-50 bg-[#002349] text-white px-2 pointer-events-none"
                                onclick="prevImage()" id="leftIcon"></i>
                            <i class="fas fa-chevron-right text-xl cursor-pointer absolute top-1/2 transform -translate-y-1/2 right-4 z-10 opacity-{{ count($properties[0]['thumbnails']) > 1 ? '100' : '50' }} bg-[#002349] text-white px-2 pointer-events-{{ count($properties[0]['thumbnails']) > 1 ? 'auto' : 'none' }}"
                                onclick="nextImage()" id="rightIcon"></i>
                        </div>
                    </div>
    
                    <!-- Thumbnails Section -->
                    <div class="flex justify-center mt-5">
                        <div class="w-full flex flex-wrap justify-center">
                            @foreach ($properties[0]['thumbnails'] as $index => $thumbnail)
                                <img src="{{ $thumbnail }}" alt="Thumbnail {{ $index }}"
                                    class="w-16 h-16 cursor-pointer mb-2 md:mb-0 md:mr-2 @if ($index === $currentImageIndex) border-2 border-[#002349] @endif"
                                    onclick="changeImage('{{ $thumbnail }}', {{ $index }})">
                            @endforeach
                        </div>
                    </div>
                </div>
    
    
                <div class="flex justify-between py-2 text-[18px] font-[500]">
                    <h3 class="">Ahlon, Yangon</h3>
                    <h3 class=""><span class=" text-[#002349] font-bold">For Rent </span>30 Lakhs</h3>
                </div>
                <div class="flex justify-between py-2">
                    <ul class=" list-none flex text-[12px] text-[#2e3238]">
                        <li class="border-solid border-r-[1px] pr-2 flex justify-center items-center gap-2"><i
                                class="fa fa-home text-[#002349]" aria-hidden="true"></i><span>Condo</span></li>
                        <li class="border-solid border-r-[1px] px-2 flex justify-center items-center ">2360 ft<span
                                class=" -translate-y-2 ">2</span></li>
                        <li class="border-solid border-r-[1px] px-2 flex justify-center items-center gap-2 "><i
                                class="fa-solid fa-bed"></i><span class=" -translate-y-2 ">4</span></li>
                        <li class="border-solid border-r-[1px] px-2 flex justify-center items-center gap-2 "><i
                                class="fa-solid fa-bath"></i><span class=" -translate-y-2 ">3</span></li>
                    </ul>
                    <p class=" border-solid border-[#ccc] border-2 font-[500] text-[14px] px-2">Property
                        ID: S-1361176</p>
                </div>
                <div class="flex justify-between py-2">
                    <div class="flex justify-center items-center gap-2 text-[#002349] text-[14px] "><i
                            class="fa-solid fa-bolt " aria-hidden="true"></i><span>Premium</span></div>
                    <p class="  text-[14px] px-2 text-[#2e3238]">Posted Date : 02 Jan 2024</p>
                </div>
    
                <div class=" text-[#65738b] text-[14px]">
                    <div class="mb-4">
                        အလုံမြို့နယ် ကမ်းနားလမ်းမပေါ်မှာတည်ရှိတဲ့ ပိုင်ဆိုင်မှုခိုင်မာသော Shwe Zabu Date Luxury Condo မှ
                        ရောင်းရန်ရှိသော အသင့်နေ အခန်း
                    </div>
                    <div class="mb-4">
                        <p class=""">#အရောင်းဈေးနှုန်း၇၅၀၀သိန်ညှိနှိုင်း</p>
                        <p class="">#Forsale7500Lmmk(negotiate)</p>
                    </div>
    
                    <div class=" mb-4">
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
                </div>
    
                <!-- Property Details -->
                <div class=" border-t-[1px] border-solid mt-2 py-2">
                    <h3 class="">Property Details</h3>
                    <p class="text-[14px]"><span class="font-bold">Property Name : </span> အလုံမြို့နယ်
                        ကမ်းနားလမ်းမပေါ်မှာတည်ရှိတဲ့ ပိုင်ဆိုင်မှုခိုင်မာသော Shwe Zabu Date Luxury Condoမှ ရောင်းရန်ရှိသော
                    </p>
                </div>
    
                <div class="grid grid-cols-3 text-[#65738b]">
                    @foreach ([['icon' => 'fa-solid fa-house', 'property' => 'TYPE', 'value' => 'Condo'], ['icon' => 'fa-brands fa-codepen', 'property' => 'AREA', 'value' => '2360 ft2'], ['icon' => 'fa-solid fa-bed', 'property' => 'BED ROOM', 'value' => '2'], ['icon' => 'fa-solid fa-bath', 'property' => 'BATH ROOM', 'value' => '3'], ['icon' => 'fa-regular fa-user', 'property' => 'OWNERSHIP', 'value' => '']] as $property)
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
    
            <div class=" py-5">
                <div class="flex items-center gap-3 text-[14px] pb-7 font-[500] ">
                    <i class="fas fa-chevron-left cursor-pointer"></i>
                    <h3>BACK TO SEARCH</h3>
                </div>
                <div class="bg-white rounded-lg py-4 flex items-center gap-5 ">
                    <div
                        class=" overflow-hidden w-[85px] h-[85px] relative border-solid border-[2px] border-[#e0e0e0] rounded-full">
                        <img class=" absolute top-0 left-0 object-cover"
                            src="https://www.shweproperty.com/logo/df4051519f4c3f59cd1fc1911e7d39a69322354e7s12t12eu7l5y1s5p35174ff5c37670b5f6cf46f5aa0f6c4f9" />
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
                        class="resize-none mb-2 outline-none relative w-full h-[100px] p-[15px] border-[#e0e0e0] border-solid border-[2px] rounded-md text-[13px]"
                        type="text" value="" />Hello, I am interested in this property posted on ShweProperty.com and would
                    like to request more information. Could you please contact me back as soon as possible? Thank
                    you.</textarea>
                    <label class="relative inline-flex items-center cursor-pointer ">
                        <input type="checkbox" value="" class="sr-only peer " checked>
                        <div
                            class="w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-600 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[#002349]">
                        </div>
                        <span class="ms-3 text-[13px] font-medium text-gray-900 dark:text-gray-300">Keep me updates with
                            real estate news</span>
                    </label>
                    <button
                        class=" text-center bg-[#002349] text-white w-full rounded-md h-[42px] cursor-pointer text-[14px] font-600">Send
                        Now</button>
                </form>
            </div>
        </section>
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

{{-- <!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
</head>

<body class=" container mx-auto ">
    
        <script src="{{ asset('js/property.js') }}"></script>
</body>

</html> --}}
