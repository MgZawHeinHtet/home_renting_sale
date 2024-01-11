<x-layout>
    <section class="px-28 my-10">
        <div class="grid grid-cols-4 gap-10 items-start">
            <div class="col-span-3 space-y-3">
                <h4 class="font-bold text-xl text-home-900">{{ $detail_news->title }}
                </h4>
                <p class=" text-slate-500">By {{ $detail_news->writer->name }},homerent.com</p>
                <p class=" text-slate-500">Posted at 23 December 2023</p>
                <img class="w-full h-[500px] object-cover rounded"
                    src="{{ $detail_news->photo}}" alt="">
                <div class="pt-5">
                    {{ $detail_news->description }}

                   <h4> Written By : {{ $detail_news->writer->name }} (ShweProperty.com)</h4>
                    <h4>Posted By : {{ $detail_news->poster->name}} (ShweProperty.com)</h4>
                </div>
                <div class="">
                    <form class="relative" action="/news/{{ $detail_news->id}}/comment" method="POST">
                        @csrf
                        <x-error name="description"></x-error>
                        <textarea class="w-full mt-5 p-2 border outline-none rounded-lg border-home-900 border-opacity-50" name="description" id="" cols="30" rows="9" placeholder="Comment here">
                           
                        </textarea>
                        <button class="p-2 block mx-auto bg-yellow-600 rounded text-white absolute bottom-5 right-5">Submit</button>
                    </form>
                </div>
                {{-- comment container --}}
                <div class="space-y-10 clear-both">
                    <div class="">
                        <div class="flex items-center gap-5">
                            <img class="w-24 h-24 object-cover block" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQn5mYnPu_x3LQWrzLUZNkbXw_pRMqCKUo9UN-cmtV2ww&s" alt="">
                            <div class="space-y-2">
                                <span class="text-lg font-semibold mr-3 text-home-900">Zaw Hein Htet</span><span class="text-gray-500">4 min ago</span><span class="text-sky-600">| Edit</span><span class="text-red-600">| Delete</span>
                                <p class="tracking-wide text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius fugiat quisquam, culpa dolorem veniam facere dignissimos, minima, repellat in sunt quasi repellendus cum! Est fuga distinctio deserunt veniam! Cum, debitis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex items-center gap-5">
                            <img class="w-24 h-24 object-cover block" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQn5mYnPu_x3LQWrzLUZNkbXw_pRMqCKUo9UN-cmtV2ww&s" alt="">
                            <div class="space-y-2">
                                <span class="text-lg font-semibold mr-3 text-home-900">Zaw Hein Htet</span><span class="text-gray-500">4 min ago</span><span class="text-sky-600">| Edit</span><span class="text-red-600">| Delete</span>
                                <p class="tracking-wide text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius fugiat quisquam, culpa dolorem veniam facere dignissimos, minima, repellat in sunt quasi repellendus cum! Est fuga distinctio deserunt veniam! Cum, debitis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex items-center gap-5">
                            <img class="w-24 h-24 object-cover block" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQn5mYnPu_x3LQWrzLUZNkbXw_pRMqCKUo9UN-cmtV2ww&s" alt="">
                            <div class="space-y-2">
                                <span class="text-lg font-semibold mr-3 text-home-900">Zaw Hein Htet</span><span class="text-gray-500">4 min ago</span><span class="text-sky-600">| Edit</span><span class="text-red-600">| Delete</span>
                                <p class="tracking-wide text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius fugiat quisquam, culpa dolorem veniam facere dignissimos, minima, repellat in sunt quasi repellendus cum! Est fuga distinctio deserunt veniam! Cum, debitis.</p>
                            </div>
                        </div>
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
