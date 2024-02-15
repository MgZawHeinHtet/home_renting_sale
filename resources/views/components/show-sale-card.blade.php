<div class="border border-white p-5 rounded-lg relative">
    <div class="w-full h-full absolute top-0 right-0 bg-black bg-opacity-90 flex justify-center items-center flex-col p-4 text-center">
        <i class="fa fa-eye-slash text-5xl text-white" aria-hidden="true"></i>

        <p class="text-red-500 text-lg"> Property get reported and remove temporary from display list</p>
        <p class="text-orange-500 capitalize">contact with admin to resolve this problem</p>
    </div>
    <h4 class="text-white text-xl capitalize mb-4">{{ $property->title }}</h4>
    <p  class="capitalize text-yellow-600">{{ $property->township }} | {{ $property->region }}</p>
    <p class="text-white mb-4">{{ $property->price }}lakh (kyat) | {{ $property->type }}</p>

    {{-- //conditional image  --}}
    <img class="w-full h-[250px] object-cover rounded-lg" src="{{ $property->salePropertyImage->count() ? $property->salePropertyImage()->first()->image : asset('assets/insteadImg.jpg') }}" alt="">
    <div class="p-2 my-3 rounded-lg bg-yellow-700 text-center">
        <p class="text-sm text-white capitalize"><i class="fa fa-eye" aria-hidden="true"></i>
            Page View <span class="text-lg font-bold">34</span> | Contact click view <span class="text-lg font-bold">34</span> | 
            <i class="fas fa-question-circle"></i> Enquiry <span class="text-lg font-bold">34</span>
        </p>
    </div>
    <div class="mb-3 flex gap-1">
        <form action="/adminAgents/show-ad-sale/{{ $property->id }}/edit" method="get">
            @csrf
            <button class="p-2 bg-yellow-700 text-white rounded-lg"><i class="fas fa-edit"></i> Edit Advertisement</button>
        </form>
        <button class="p-2 bg-blue-700 text-white rounded-lg"><i class="fas fa-search"></i> View Detail</button>
        <form class="" action="/adminAgents/show-ad-sale/{{ $property->id }}" method="POST">   
            @csrf 
            @method('DELETE')
            <button class="p-2 bg-red-700 text-white rounded-lg"><i class="fa-solid fa-xmark"></i> Delete Advertisment</button>
        </form>
    </div>
    <div class="mb-3 flex gap-1">
        <form action="/adminAgents/images-upload/{{ $property->id }}/sale">
            <button class="p-2 bg-orange-700 text-white rounded-lg"><i class="fa-solid fa-circle-plus"></i> Add Photos</button>
        </form>

        <form action="/adminAgents/propertySales/{{ $property->id }}/makeFeatured" method="POST">
            @csrf
            <button {{ $property->is_featured ? 'disabled' : '' }} class="p-2 {{ $property->is_featured ? ' opacity-55':'' }} bg-yellow-700 text-white rounded-lg"><i class="fa-solid fa-star"></i> To Make Featured Ad</button>
       </form>
        <button class="p-2 bg-blue-700 text-white rounded-lg"><i class="fa-solid fa-check "></i> Mark As Sold</button>

    </div>
    <div class="flex gap-1">
        
       
    </div>
</div>