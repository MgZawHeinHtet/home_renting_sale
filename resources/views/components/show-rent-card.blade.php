<div class="p-3 bg-home-900 rounded-lg">
    <img class="rounded h-44 object-cover w-full" src="{{ $property->rentPropertyImage->count() ? $property->rentPropertyImage[0]->image : 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDyBdayoG4JDHSMsTQma1TmHHXu0L5Dtt37NDtHVHK1r-wk_40PzMtynJd9g5SL_n6ekE&usqp=CAU'}}">
    
    <h4 class="mt-2 text-white text-lg capitalize tracking-wide line-clamp-1">{{ $property->title }}</h4>
    <p class="text-gray-400 mb-4">{{ $property->township }},{{ $property->region }}  ({{ $property->area }} {{ $property->area_unit }})</p>
    <div class="border-t border-t-gray-600 flex justify-between pt-3">
        <div class="flex gap-2">
            <a class="p-1 bg-gray-50 bg-opacity-15 rounded block text-center" href="/adminAgents/images-upload/{{$property->id}}/rent"> <i class="fa-solid fa-image w-5 h-5 y text-gray-300"></i></a>
            
            <button data-btn="{{ $property->id }}" {{ $property->is_featured ? 'disabled':'' }} class="p-1 open-modal {{ $property->is_featured ? 'bg-yellow-600 opacity-55': 'bg-opacity-15 ' }} bg-gray-50  rounded text-center"><i class=" fas fa-star w-5 h-5  text-gray-300"></i></button>
           
            <form action="/adminAgents/post-ad-rent/{{ $property->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="p-1 bg-gray-50 bg-opacity-15 rounded text-center"><i class="fas fa-trash w-5 h-5  text-gray-300"></i></button>
            </form>
        </div>
        <div class="flex gap-2">
            <a class="p-1 bg-gray-50 bg-opacity-15 rounded block text-center" href="/adminAgents/show-ad-rent/{{ $property->id }}/edit"> <i class="fa fa-pencil w-5 h-5 text-gray-300" aria-hidden="true"></i>
            </a>
            
            <form action="/properties/{{ $property->id }}/rent" method="GET">
                <button class="p-1 bg-gray-50 bg-opacity-15 rounded text-center"><i class="fas fa-search text-gray-300"></i> <span class="text-gray-300 text-sm">Visit page</span></button>
            </form>
        </div>
    </div>
</div>