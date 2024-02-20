@props(['type','faq'=>null])


    
    <div class="w-[500px] mx-auto mt-20">
        <h4 class=" text-gray-300 text-2xl underline underline-offset-8 mb-10 capitalize">{{ $type }} FAQ (Frequently asked question)</h4>
        <form  action="{{ $type=='create' ? '/adminAgents/faq' : '/adminAgents/faq/'.$faq->id }}" method="POST">
            @csrf
            @if ($type=="edit")
               
                @method('PATCH')
            @endif
            <div>
                <label class="block text-white" for="">Enter Question customer usually asked *</label>
                <input class="w-full rounded bg-home-900 mt-4 text-white" value="{{ old('question',$faq?->question) }}" type="text" name="question">
                <x-error name="question"></x-error>
            </div>

            <div class="mt-5">
                <label class="block text-white" for="">Enter any answer *</label>
                <input  class="w-full text-white rounded bg-home-900 mt-4" value="{{ old('answer',$faq?->answer) }}" type="text" name="answer">
                <x-error name="answer"></x-error>
            </div>
           
            <div class="mt-10">
                <button type="submit" class="w-full py-3 rounded uppercase text-white bg-yellow-600">{{ $type }}</button>
            </div>
        </form>
    </div>
