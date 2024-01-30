@props(['type','news'=>null])


<div class="w-[60%] mx-auto">
    <h3 class="text-xl text-center text-gray-300 capitalize tracking-wide underline underline-offset-8">{{ $type }} News</h3>

    <form class="mt-10 space-y-7" action="{{ $type === 'create' ? '/adminAgents/news' : '/adminAgents/news/'.$news?->id }} " enctype="multipart/form-data" method="POST">
        @csrf
        @if ($type==="edit")
            @method('PATCH')
        @endif
        <div class="flex items-center">
            <label for="" class="w-32 text-xl text-gray-300">Title</label>
            <div class="flex-1">

                <input name="title" value="{{ old('title',$news?->title) }}" class="w-full rounded border-yellow-600 bg-home-900 text-gray-300" type="text">
                
                    <x-error name="title"></x-error>
               
            </div>
        </div>
        
        <div class="flex ">
            <label for="" class="w-32 text-xl text-gray-300">Cover Image</label>
            <div class="flex-1">

                <input name="photo" class="w-full rounded border border-yellow-600 bg-home-900 text-gray-300" type="file">
                <x-error name="photo"></x-error>

                @if($news?->photo){
                    
                    <div>
                        <img class="w-24 h-24 object-cover rounded" src="{{ $news->photo }}" alt="">
                    </div>
                @endif
            </div>
            
        </div>
        <div class="flex">
            <label for="" class="w-32 text-xl text-gray-300">Description</label>
            
            <div class="flex-1">
                <textarea class="w-full h-72 rounded bg-home-900 border-yellow-600" name="description" id="" cols="30" rows="10">
                    {!! old('description',$news?->description) !!}
                </textarea>
                <x-error name="description"></x-error>
            </div>

        </div>
        <div class="flex items-center">
            <label for="" class="w-32 text-xl text-gray-300">Is Posted</label>
            <div class="flex-1">

                <input value="{{ old('isPosted',$news?->isPosted) }}" name="isPosted" class="w-full rounded border-yellow-600 bg-home-900 text-gray-300" type="text">
                <x-error name="isPosted"></x-error>
            </div>

        </div>
        <div class="flex items-center">
            <label class="w-32" for=""></label>
            <button class="flex-1 bg-yellow-600 py-4 px-6 rounded-lg text-white uppercase">{{ $type }}</button>
        </div>
    </form>
</div>