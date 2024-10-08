<x-layout>


    <div class="px-20 mx-auto">

        @if ($property->map == 'true')
            <div
                class="overlay hidden w-screen h-screen  items-center justify-center fixed top-0 left-0 z-50 bg-black bg-opacity-50">
                <div class="shadow rounded w-[1000px] h-[600px] z-50" id="map"></div>
            </div>
        @endif


        <section class="w-full flex flex-col lg:flex-row justify-between p-5 lg:p-7 gap-8 ">

            <div class="flex-1 ">
                <x-alert></x-alert>
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class=" text-[26px] md:text-[28px] font-[500]  text-home-900">{{ $property->title }}</h1>
                        <p class="text-[16px] md:text-[18px] font-[500] pb-5">{{ $property->bedroom }} bedroom,
                            {{ $property->bathroom }} bathroom {{ $property->type }} for {{ $property_type }} in
                            {{ $property->township }}, {{ $property->region }}
                        </p>
                    </div>
                    <div class="space-x-4 flex items-center">
                        <form action="/properties/{{ $property->id }}/saveSale" method="POST">
                            @csrf
                            @if (!auth()->user()?->isSavedProperties($property) ?? null)
                                <button><i class="fa-regular fa-bookmark text-2xl text-yellow-600"></i></button>
                            @else
                                <button>
                                    <i class="fa-solid fa-bookmark text-3xl text-red-600 rotate-3"></i>
                                </button>
                            @endif
                        </form>
                        @if ($property->map == 'true')
                            <button class="map-btn"><i class="fas fa-map text-2xl  text-yellow-600"></i></button>
                        @endif
                        <form action="/properties/{{ $property->id }}/report" method="GET">
                            <button><i class="fas fa-exclamation-triangle text-2xl text-yellow-800"></i></button>
                        </form>
                    </div>
                </div>

                <!-- Image -->
                @php
                    $imageUrls = [];
                    foreach ($property->salePropertyImage as $image) {
                        $imageUrls[] = $image->image;
                    }

                @endphp
                <div class="relative overflow-hidden">
                    <!-- Main image -->
                    <div id="fullWidthImages" class="flex transition-transform duration-300 ease-in-out">
                        @foreach ($imageUrls as $index => $image)
                            <img src="{{ $image }}" alt="Full Width Image"
                                class=" flex-shrink-0 w-full h-[450px] object-center object-cover"
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
                    <div id="smallImages"
                        class="overflow-x-scroll no-scrollbar flex justify-start gap-2 cursor-pointer">
                        @foreach ($imageUrls as $index => $image)
                            <img src="{{ $image }}"
                                class="w-16 h-16 small-image @if ($index === 0) border-[#002349] border-solid border-2 @endif"
                                alt="Small Image" data-index="{{ $index }}">
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-wrap gap-2 flex-row justify-between py-2 text-[14px] md:text-[18px] font-[500]">
                    <h3 class="">{{ $property->township }}, {{ $property->region }}</h3>
                    <h3 class=""><span class=" text-[#002349] font-bold">For Sale </span>{{ $property->price }}
                        Lakhs
                    </h3>
                </div>
                <div class="flex flex-wrap flex-row gap-2 justify-between py-2">
                    <ul class=" list-none flex flex-wrap text-[12px] text-[#2e3238]">
                        <li class="border-solid border-r-[1px] pr-2 flex justify-center items-center gap-2"><i
                                class="fa fa-home text-[#002349]"
                                aria-hidden="true"></i><span>{{ $property->type }}</span></li>
                        <li class="border-solid border-r-[1px] px-2 flex justify-center items-center ">
                            {{ $property->area }} ft<span class=" -translate-y-2 ">2</span></li>
                        <li class="border-solid border-r-[1px] px-2 flex justify-center items-center gap-2 "><i
                                class="fa-solid fa-bed"></i><span
                                class=" -translate-y-2 ">{{ $property->bedroom }}</span></li>
                        <li class="border-solid border-r-[1px] px-2 flex justify-center items-center gap-2 "><i
                                class="fa-solid fa-bath"></i><span
                                class=" -translate-y-2 ">{{ $property->bathroom }}</span></li>
                    </ul>
                    <p class=" border-solid border-[#ccc] border-2 font-[500] text-[14px] px-2">Property
                        ID: {{ $property->propertyNumber }}</p>
                </div>
                <div class="flex flex-wrap justify-between gap-2  py-2">
                    <div class="flex justify-center items-center gap-2 text-[#002349] text-[14px] "><i
                            class="fa-solid fa-bolt " aria-hidden="true"></i><span>Premium</span> <span
                            class="text-blue-600  rounded-lg {{ $property->installment ? '' : 'hidden' }}"><i
                                class="fas fa-check"></i> Bank Installment</span></div>
                    <p class=" flex-0  text-[14px] px-2 text-[#2e3238]">Posted Date :
                        {{ $property->created_at->format('d M Y') }}</p>
                </div>

                <div class="my-6">
                    {!! $property->description !!}
                </div>


                <div class=" border-t-[1px] border-solid mt-2 py-2">
                    <h3 class="">Property Details</h3>
                    <p class="text-[14px]"><span class="font-bold">Property Name : </span>
                        {{ $property->title }}
                    </p>
                </div>

                <div class="grid grid-cols-3 text-[#65738b]">
                    @foreach ([['icon' => 'fa-solid fa-house text-xl', 'property' => 'TYPE', 'value' => " $property->type"], ['icon' => 'fa-brands fa-codepen text-xl', 'property' => "$property->areaType", 'value' => " $property->width ' * $property->length '"], ['icon' => 'fa-solid fa-bed text-xl', 'property' => 'BED ROOM', 'value' => "$property->bedroom"], ['icon' => 'fa-solid fa-bath text-xl', 'property' => 'BATH ROOM', 'value' => "$property->bathroom"], ['icon' => 'fa-regular fa-user text-xl', 'property' => 'Furnishing Type', 'value' => "$property->furnished"]] as $property_icon)
                        <div class="bg-white rounded-lg p-4 flex items-center gap-4 ">
                            <!--  property_icon content -->
                            <i class="{{ $property_icon['icon'] }} text-[#002349]"></i>
                            <div class="text-[10px] flex flex-col"><span
                                    class="text-base">{{ $property_icon['property'] }}</span>
                                <span class="">{{ $property_icon['value'] }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
                <form class=" w-full my-5 py-5" method="POST" action="/properties/{{ $property->id }}/schedule">
                    @csrf
                    <input type="hidden" name="agent_id" value="{{ $property->agent->id }}">

                    <h3 class="pb-3 border-b-[1px] text-lg border-gray-300 font-[500]">Schedule a Viewing</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 py-5 mb-5">
                        <div class=" flex flex-col gap-3">
                            <label for="types" class=" text-sm font-medium">Viewing Type</label>
                            <select id="types" name="viewType"
                                class=" p-2 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:outline-0">
                                <option selected>Select</option>
                                <option value="in person">In Person</option>
                                <option value="video chat">Video Chat</option>

                            </select>
                            <x-error name="viewType"></x-error>
                        </div>
                        <div class=" flex flex-col gap-3">
                            <label for="date" class=" text-sm font-medium">Date</label>
                            <input id="date" type="date" name="date"
                                class=" p-2 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:outline-0"
                                placeholder="Select Viewing Date" />
                            <x-error name="date"></x-error>

                        </div>
                        <div class=" flex flex-col gap-3">
                            <label for="time" class=" text-sm font-medium">
                                Time
                            </label>
                            <input name="time"
                                class=" p-2 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:outline-0"
                                type="time">
                            <x-error name="time"></x-error>
                            {{-- <select id="time"
                                class=" p-2 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:outline-0">
                                <option selected>10:00 am</option>
                                <option value="11">11:00 am</option>
                                <option value="12">12:00 pm</option>
                                <option value="13">1:00 pm</option>
                                <option value="14">2:00 pm</option>
                                <option value="15">3:00 pm</option>
                            </select> --}}
                        </div>
                    </div>
                    <h3 class="pb-3 border-b-[1px] border-gray-300 font-[400] text-md">Your Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 pt-5 pb-3">
                        <div class=" flex flex-col gap-3">
                            <label for="name" class=" text-sm font-medium">Name</label>
                            <input name="name"
                                class=" p-2 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:outline-0"
                                placeholder="Enter Your Name" />
                            <x-error name="name"></x-error>
                        </div>
                        <div class=" flex flex-col gap-3">
                            <label for="phone" class=" text-sm font-medium">Phone</label>
                            <input name="phone"
                                class=" p-2 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:outline-0"
                                placeholder="Enter Your Phone" />
                            <x-error name="phone"></x-error>

                        </div>
                        <div class=" flex flex-col gap-3">
                            <label for="email" class=" text-sm font-medium">Email</label>
                            <input name="email"
                                class=" p-2 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:outline-0"
                                placeholder="Enter Your Email" />
                            <x-error name="email"></x-error>
                        </div>
                    </div>
                    <div class=" flex flex-col gap-3">
                        <label for="message" class=" text-sm font-medium">Message</label>
                        <textarea name="message" rows="6"
                            class=" p-2 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:outline-0 h-100"
                            placeholder="Enter Your Message"></textarea>
                        <x-error name="message"></x-error>
                    </div>
                    <div class=" flex gap-3 py-3">
                        <input type="checkbox" class="term-use" />
                        <label for="message" class=" text-sm font-normal">By submitting this form I agree to Terms of
                            Use</label>
                    </div>
                    <button disabled="disabled"
                        class="schedule-btn text-center opacity-20 bg-[#002349] text-wrap text-white w-auto px-5 py-2 rounded-md cursor-pointer text-[12px] md:text-[14px] font-600">Submit
                        A Viewing Request</button>
                </form>
            </div>

            <div class="w-full lg:w-1/4 py-5 relative">
                <div class="flex items-center gap-3 text-[14px] pb-7 font-[500] ">
                    <i class="fas fa-chevron-left cursor-pointer"></i>
                    <h3>BACK TO SEARCH</h3>
                </div>
                <div class="">

                    {{-- @dd($property->agent->company_logo) --}}

                    <div class="bg-white rounded-lg py-4 flex items-center gap-5 ">
                        <div
                            class=" overflow-hidden w-[85px] h-[85px] relative border-solid border-[2px] border-[#e0e0e0] rounded-full">
                            <img class=" w-full h-full top-0 left-0 object-cover"
                                src="{{ $property->agent->company_logo }}" />
                        </div>
                        <div class="text-[10px] flex flex-col flex-1 ">
                            <a
                                class=" pb-[5px] text-[16px] font-[500] cursor-pointer hover:underline text-blue-500">{{ $property->agent->company_name }}</a>
                            <a
                                class="flex justify-center items-center gap-[1px]  w-full h-[44px] border-[#0da50c] border-solid border-[1px] rounded-md">
                                <i
                                    class="fa-solid fa-phone h-[42px] w-[44px] bg-[#0da50c] border-[#0da50c] border-solid border-[1px] flex justify-center items-center text-white text-[16px]"></i>
                                <span
                                    class="flex justify-center items-center flex-1 text-center text-[16px] font-[500] w-full h-full text-[#0da50c] hover:bg-[#0da50c] hover:text-white transition-all ease-in">{{ $property->phoneNumber }}</span>
                            </a>
                        </div>
                    </div>
                    {{-- Form --}}
                    <form action="/properties/{{ $property->id }}/enquiry" method="POST">
                        @csrf
                        <input type="hidden" name="agent_id" value="{{ $property->agent->id }}">
                        <input value="{{ old('name', auth()->user()?->name) }}"
                            class="mb-2 outline-none relative w-full h-[48px] px-[15px] border-[#e0e0e0] border-solid border-[2px] rounded-md text-[13px]"
                            type="text" placeholder="Name*" name="name" required />
                        <x-error name="name"></x-error>
                        <input value="{{ old('phone') }}"
                            class="mb-2 outline-none relative w-full h-[48px] px-[15px] border-[#e0e0e0] border-solid border-[2px] rounded-md text-[13px]"
                            type="text" placeholder="Mobile Number" name="phone" required />
                        <x-error name="phone"></x-error>
                        <input value="{{ old('email', auth()->user()?->email) }}"
                            class="mb-2 outline-none relative w-full h-[48px] px-[15px] border-[#e0e0e0] border-solid border-[2px] rounded-md text-[13px]"
                            type="text" placeholder="Email Address" name="email" required />
                        <x-error name="email"></x-error>

                        <textarea
                            class="no-scrollbar resize-none mb-2 outline-none relative w-full h-[100px] p-[15px] border-[#e0e0e0] border-solid border-[2px] rounded-md text-[13px]"
                            type="text" name="description" />{{ old('description', 'Hello, I am interested in this property posted on ShweProperty.com and would like to request more information. Could you please contact me back as soon as possible? Thank you.') }}</textarea>
                        <x-error name="description"></x-error>

                        {{-- <label class="relative inline-flex mr-5 cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div
                                class="w-9 h-5 md:w-11 md:h-6 bg-gray-400 rounded-full peer dark:bg-gray-400 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-500 after:border after:rounded-full after:h-4 md:after:h-5  after:w-4 md:after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[#002349]">
                            </div>
                            <span class="flex-1 ml-3 text-[13px] font-medium text-gray-900 dark:text-gray-300">Keep me updates
                                with
                                real estate news</span>
                        </label> --}}
                        <button
                            class=" text-center bg-[#002349] text-wrap text-white w-full rounded-md h-[42px] cursor-pointer text-[12px] md:text-[14px] font-600">Send
                            Now</button>
                    </form>
                    <div class="w-full mt-10">
                        <h2 class="px-4 py-2  text-lg">Choose payment method :</h2>
                        <div class="flex items-center justify-between gap-3 px-4 bg-white">
                            <div x-data="{ open: false }" class="relative inline-block text-left">
                                <button @click="open = !open"
                                    class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-gray-100 focus:ring-blue-500">
                                    <img class="w-10 h-10"
                                        src="https://mm.myanmartechpress.com/wp-content/uploads/2019/09/42846641_741047686251381_3734839720207712256_n.jpg"
                                        alt="">
                                </button>
                                <div x-show="open" @click.away="open = false"
                                    class=" absolute w-[325px] mt-2 translate-x-[-13px]  rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 px-2 py-2">
                                    <div class="w-full">
                                        <p class="text-2xl font-bold text-center mb-3 mt-2"> <span
                                                class="text-blue-800">KBZ</span> Mobile Banking System
                                        </p>
                                        <div class="flex w-full justify-center bg-white">
                                            <img src="{{ asset('assets/kpay.jpg') }}" class="w-[250px] h-[250px] "
                                                alt="">
                                        </div>
                                        <div class="w-full mt-4 font-bold ">Fill Your Information</div>
                                        <form action="/properties/sale/{{ $property->id }}/sendTrancation"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="payment_type" value="kbz">
                                            <div class="w-full flex flex-col gap-2 mt-2">
                                                <input type="text" name="name"
                                                    class="w-full shadow-md outline-blue-900 rounded-md py-2 px-2"
                                                    placeholder="KBZ Account Name">
                                                <x-error name="name"></x-error>
                                                <input type="tel" name="phone"
                                                    class="w-full shadow-md outline-blue-900 rounded-md py-2 px-2"
                                                    placeholder="KBZ Account Phone Number">
                                                <x-error name="phone"></x-error>
                                                <input type="text" name="billing_number"
                                                    class="w-full shadow-md outline-blue-900 rounded-md py-2 px-2"
                                                    placeholder="KBZ Billing Number(6digs-12digs)">
                                                <x-error name="billing_number"></x-error>
                                                <div class="mt-2">
                                                    <label for="example1"
                                                        class="block text-sm font-medium text-gray-700">Upload
                                                        Screenshot
                                                        Image</label>
                                                    <input name="photo" id="example1" type="file"
                                                        class="w-full mt-1 shadow-md outline-home-600 rounded-md   block  text-sm file:mr-4 file:rounded-md file:border-0 file:bg-home-600 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-home-900 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
                                                    <x-error name="photo"></x-error>
                                                </div>
                                            </div>
                                            <div class="w-full flex justify-center mb-3"><button
                                                    class="text-white w-full bg-home-600 px-3 py-3 mt-5 rounded-lg">Comfirm</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div x-data="{ open: false }" class="relative inline-block text-left">
                                <button @click="open = !open"
                                    class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-gray-100 focus:ring-blue-500">
                                    <img class="w-10 h-10"
                                        src="https://play-lh.googleusercontent.com/rPq4GMCZy12WhwTlanEu7RzxihYCgYevQHVHLNha1VcY5SU1uLKHMd060b4VEV1r-OQ"
                                        alt="">
                                </button>
                                <div x-show="open" @click.away="open = false"
                                    class="origin-top-left translate-x-[-120px] absolute w-[320px] left-0 mt-2  rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 px-2 py-2">
                                    <div class="w-full">
                                        <p class="text-2xl font-bold text-center mb-3 mt-2"> <span
                                                class="text-yellow-500">WAVE</span> Mobile Banking System
                                        </p>
                                        <div class="flex w-full justify-center bg-gray-200">
                                            <img src="./img/wave.jpg" class="w-[250px] h-[250px] " alt="">
                                        </div>
                                        <div class="w-full mt-4 font-bold ">Fill Your Information</div>
                                        <div class="w-full flex flex-col gap-2 mt-2">
                                            <input type="text"
                                                class="w-full shadow-md outline-blue-900 rounded-md py-2 px-2"
                                                placeholder="Wave Account Name">
                                            <input type="tel"
                                                class="w-full shadow-md outline-blue-900 rounded-md py-2 px-2"
                                                placeholder="Wave Account Phone Number">
                                            <input type="text"
                                                class="w-full shadow-md outline-blue-900 rounded-md py-2 px-2"
                                                placeholder="Wave Billing Number(6digs-12digs)">
                                            <div class="mt-2">
                                                <label for="example1"
                                                    class="block text-sm font-medium text-gray-700">Upload Screenshot
                                                    Image</label>
                                                <input id="example1" type="file"
                                                    class="w-full mt-1 shadow-md outline-blue-900 rounded-md   block  text-sm file:mr-4 file:rounded-md file:border-0 file:bg-blue-700 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-blue-900 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
                                            </div>
                                        </div>
                                        <div class="w-full flex justify-center mb-3"><button
                                                class="text-white bg-[#13598A] px-3 py-3 mt-5 rounded-lg">Comfirm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-data="{ open: false }" class="relative inline-block text-left">
                                <button @click="open = !open"
                                    class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-gray-100 focus:ring-blue-500">
                                    <img class="w-10 h-10"
                                        src="https://cdn.freebiesupply.com/logos/large/2x/cash-1-logo-png-transparent.png"
                                        alt="">
                                </button>
                                <div x-show="open" @click.away="open = false"
                                    class="origin-top-left absolute w-[320px] left-0 translate-x-[-220px] mt-2  rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 px-2 py-2">
                                    <form action="/properties/sale/{{ $property->id }}/sendTrancation" method="POST"
                                        >
                                        @csrf
                                        <input type="hidden" name="payment_type" value="cash">
                                        <div class="w-full px-2 py-2">
                                            <p class="text-2xl font-bold text-center mb-3 mt-2"> <span
                                                    class="text-blue-800">Cash </span>System
                                            </p>
                                            <p>You will be paid in cash down when you meet the property owner in preson.
                                            </p>


                                        </div>
                                        <div class="w-full flex justify-center mb-3"><button
                                                class="text-white bg-home-600 px-3 py-3 mt-5 rounded-lg">Comfirm</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </div>

    </div>
    </div>

</x-layout>

@section('javascript')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>



    <script>
        const fullWidthImages = document.getElementById("fullWidthImages");
        const smallImages = document.getElementById("smallImages");
        const prevButton = document.getElementById("prevButton");
        const nextButton = document.getElementById("nextButton");
        const overlay = document.querySelector('.overlay');
        const mapBtn = document.querySelector('.map-btn');

        document.getElementById("smallImages").scrollLeft = 0;


        let currentIndex = 0;



        // Initially disable the left button
        prevButton.style.opacity = "0.5";
        prevButton.style.pointerEvents = "none";

        // For next button
        nextButton.addEventListener("click", () => {
            currentIndex = currentIndex + 1;
            updateFullWidthImages();
            updateSmallImagesBorder();
            updateButtonState();
        });

        // For prev button
        prevButton.addEventListener("click", () => {
            currentIndex = currentIndex - 1;
            updateFullWidthImages();
            updateSmallImagesBorder();
            updateButtonState();
        });

        smallImages.addEventListener("click", (event) => {
            if (event.target.tagName === "IMG") {
                currentIndex = parseInt(event.target.dataset.index, 10);
                updateFullWidthImages();
                updateSmallImagesBorder();
                updateButtonState();
            }
        });

        function updateFullWidthImages() {
            const translateXValue = `-${currentIndex * 100}%`;
            fullWidthImages.style.transform = `translateX(${translateXValue})`;
        }

        function updateSmallImagesBorder() {
            // Remove border from all small images
            const smallImagesList = smallImages.children;
            for (let i = 0; i < smallImagesList.length; i++) {
                smallImagesList[i].classList.remove(
                    "border-[#002349]",
                    "border-solid",
                    "border-2"
                );
            }

            // Add border to the current small image
            smallImagesList[currentIndex].classList.add(
                "border-[#002349]",
                "border-solid",
                "border-2"
            );
        }

        function updateButtonState() {
            // Disable left button on first render and when there's no image to the left
            prevButton.style.opacity = currentIndex === 0 ? "0.5" : "1";
            prevButton.style.pointerEvents = currentIndex === 0 ? "none" : "auto";

            // Disable right button when there's no image to the right
            nextButton.style.opacity =
                currentIndex === smallImages.children.length - 1 ? "0.5" : "1";
            nextButton.style.pointerEvents =
                currentIndex === smallImages.children.length - 1 ? "none" : "auto";
        }


        const termUse = document.querySelector('.term-use');
        const scheduleBtn = document.querySelector('.schedule-btn');


        //clickable btn when ckeckbox selected

        termUse.addEventListener('change', function(e) {
            if (termUse.checked) {
                scheduleBtn.classList.remove('opacity-20')
                scheduleBtn.removeAttribute('disabled')
            } else {
                scheduleBtn.classList.add('opacity-20')
                scheduleBtn.setAttribute('disabled', 'disabled')
            }
        })


        mapBtn.addEventListener('click', function() {
            overlay.classList.remove('hidden')
            overlay.classList.add('flex')
        })

        overlay.addEventListener('click', function(e) {
            if (e.target != overlay) return;
            e.target.classList.add('hidden');

        })
    </script>
@endsection

@yield('javascript')
