<x-layout>
    <section class="px-28 my-10">
        <div class="grid grid-cols-4 gap-10 items-start">
            <div class="col-span-3 space-y-3">
                <h4 class="font-bold text-xl text-home-900">{{ $detail_news->title }}
                </h4>
                <p class=" text-slate-500">By {{ $detail_news->writer->name }},homerent.com</p>
                <p class=" text-slate-500">Posted at 23 December 2023</p>
                <img class="w-full h-[500px] object-cover rounded" src="{{ $detail_news->photo }}" alt="">
                <div class="pt-2">
                    <div class="flex gap-5 items-center  py-4">
                        <div class="flex gap-2 items-center">
                            <form action="/news/{{ $detail_news->id }}/like" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if (auth()->user()?->isLike($detail_news))
                                    
                                <button><i class="fa fa-thumbs-up text-red-500 text-lg" aria-hidden="true"></i></button>
                                @else
                                <button><i class="fa fa-thumbs-up " aria-hidden="true"></i></button>

                                @endif
                            </form>
                           
                            <span>{{ $detail_news->likedUser->count() }}</span>
                        </div>
                        <div class="space-x-1"><i class="fas fa-eye "></i> <span>{{ $detail_news->view }}</span></div>
                        <div class="space-x-1"><i class="fas fa-comment "></i> <span>{{ $comments->count() }}</span></div>

                    </div>
                    {!! $detail_news->description !!}

                    <h4> Written By : {{ $detail_news->writer->name }} (ShweProperty.com)</h4>
                </div>
                <div class="">
                    <form class="relative" action="/news/{{ $detail_news->id }}/comment" method="POST">
                        @csrf
                        <x-error name="description"></x-error>
                        <textarea class="w-full mt-5 p-2 border outline-none rounded-lg border-home-900 border-opacity-50" name="description"
                            id="" cols="30" rows="9" placeholder="Comment here"></textarea>
                        <button
                            class="p-2 block mx-auto bg-yellow-600 rounded text-white absolute bottom-5 right-5">Submit</button>
                    </form>
                </div>
                {{-- comment container --}}
                <div class="space-y-10 clear-both">


                    @foreach ($comments as $comment)
                        <x-comment :comment="$comment"></x-comment>
                    @endforeach
                    <div>
                        {{ $comments->links() }}
                    </div>
                </div>
            </div>

            <div>
                <div>
                    <h6 class="text-xl font-bold  underline underline-offset-4 mb-5">latest News</h6>
                    <div class="grid grid-cols-2 gap-3">
                        @foreach ($random_news as $news)
                            <x-news-card :news="$news"></x-news-card>
                        @endforeach
                    </div>

                </div>
            </div>

        </div>
    </section>
</x-layout>

@section('javascript')
    <script>
        const edit_container = document.querySelectorAll(".edit-form")
        const btns = document.querySelectorAll('.edit-btn')
        btns.forEach((btn, index) => {
            btn.addEventListener('click', function(e) {
                const data_key = this.getAttribute('data-set')
                document.querySelector(`.description-${data_key}`).classList.remove('hidden')
                edit_container.forEach((item, index) => {
                    item.classList.add('hidden')
                    const container_key = item.getAttribute('data-set')

                    if (data_key === container_key) {
                        document.querySelector(`.description-${container_key}`).classList.add(
                            'hidden')
                    } else {
                        document.querySelector(`.description-${container_key}`).classList.remove(
                            'hidden')
                    }
                    if (item.getAttribute('data-set') === data_key) {
                        item.classList.remove('hidden')
                    }
                })
            })
        })
    </script>
@endsection

@yield('javascript')
