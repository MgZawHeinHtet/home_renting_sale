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
