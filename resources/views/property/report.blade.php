<x-layout>
    <div class="container-space my-20">
        <div class="w-[600px] mx-auto">
            <form action="/properties/{{ $property->id }}/report/send" method="POST">
                @csrf
                <h2 class="font-bold text-lg mb-5">Write detail to know why you report.</h2>
                <textarea name="message" class="placeholder:text-gray-100 border rounded-lg w-full outline-none mb-5 p-2" id="" cols="30" rows="9">To report ({{ $property->title }})
                </textarea>
                <x-error name="message"></x-error>
                <div class="flex gap-3">
    
                  
                        <a href="/properties/{{ $property->id }}/sale" class="inline-block px-6 py-3 bg-home-600 text-white rounded">Back</a>
                    
                    <button class="px-6 py-3 bg-red-600 text-white rounded">Report</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>