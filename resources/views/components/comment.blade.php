@php
    $is_agent = $comment->user->role === "agent"
@endphp
<div class="">
    <div class="flex items-center gap-5">
        <img class="w-24 h-24 rounded-full border-2 border-home-900 p-1 object-cover block"
            src="{{$is_agent ? $comment->user->company_logo : $comment->user->profile_img }}" alt="">
        <div class="space-y-2">
            <div class="flex items-center">
                <span class="text-lg font-semibold mr-3 text-home-900">{{$is_agent ? $comment->user->company_name : $comment->user->name }}</span><span
                    class="text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
                    @can('view',$comment)
                        
                    <button
                        data-set="{{ $comment->id }}" class="text-sky-600 edit-btn">| Edit
                    </button>
                     <form action="/news/comment/{{ $comment->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600">| Delete</button>
                    </form>
                    @endcan
            </div>

            <p class="tracking-wide text-gray-500 description-{{ $comment->id }}">{{ $comment->description }}</p>
            <div class="hidden edit-form" data-set="{{ $comment->id }}">
                <form action="/news/comment/{{ $comment->id }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="edit" class="border p-2 rounded-lg border-home-600"
                        value="{{ $comment->description }}">
                    <button class="py-2 px-4 text-white rounded-lg bg-home-600">Save</button>
                </form>
            </div>
        </div>
    </div>  
</div>
