


<div class="border border-white p-5 rounded-lg relative">
    @if ($property->trashed())
        
    <div class="w-full h-full absolute top-0 right-0 bg-black bg-opacity-90 flex justify-center items-center flex-col p-4 text-center">
        <i class="fa fa-eye-slash text-5xl text-white" aria-hidden="true"></i>

        <p class="text-red-500 text-lg"> Property get reported and remove temporary from display list</p>
        <p class="text-orange-500 capitalize">contact with admin to resolve this problem</p>
    </div>
    @endif
    <h4 class="text-white text-xl capitalize mb-4">{{ $property->title }}</h4>
    <div class="flex items-start justify-between">
        <div>

            <p  class="capitalize text-yellow-600">{{ $property->township }} | {{ $property->region }}</p>
            <p class="text-white mb-4">{{ $property->price }}lakh (kyat) | {{ $property->type }}</p>
        </div>
        @if ($property->isSold)
            
        <div >
           
            <p class="px-6 py-2 rounded-lg text-white bg-red-600">Sold Out</p>
        </div>
        @endif
    </div>

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
        <form action="/properties/{{ $property->id }}/sale">
            @csrf
            <button class="p-2 bg-blue-700 text-white rounded-lg"><i class="fas fa-search"></i> View Detail</button>
        </form>
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

       
            <button data-btn="{{ $property->id }}" {{ $property->is_featured ? 'disabled' : '' }} class="p-2 {{ $property->is_featured ? ' opacity-55':'' }} open-modal bg-yellow-700 text-white rounded-lg"><i class="fa-solid fa-star"></i> To Make Featured Ad</button>
       
       <form action="/adminAgents/sales/{{ $property->id }}/checkList" method="GET">
        
           <button class="p-2 bg-blue-700 text-white rounded-lg"><i class="fa-solid fa-dollar-sign"></i>
            Check Transcation <span class="text-red-600 p-1 w-10 h-10 rounded-full bg-white">{{ $property->transcations()->where('status','pending')->get()->count() }}</span></button>
       </form>

    </div>
    <div class="flex gap-1">
        
       
    </div>
</div>