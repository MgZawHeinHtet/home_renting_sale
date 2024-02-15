<x-agent-dashboard-layout>
    <div class="w-[500px] mx-auto">
        <h4 class="text-center text-gray-300 text-2xl underline underline-offset-8 mb-10">Create Amenities Or Rule</h4>
        <form id="form" action="/adminAgents/amenity/store" method="POST">
            @csrf
            <div>
                <label class="block text-white" for="">Enter any title *</label>
                <input class="w-full rounded bg-home-900 mt-4 text-white" value="{{ old('title') }}" type="text" name="title">
                <x-error name="title"></x-error>
            </div>

            <div class="mt-5">
                <label class="block text-white" for="">Enter icon text and color(fontawesome and tailwind) *</label>
                <input placeholder="eg.fas fa-heart text-green-600 " class="w-full text-white rounded bg-home-900 mt-4" value="{{ old('icon') }}" type="text" name="icon">
                <x-error name="icon"></x-error>
            </div>
            <div class="mt-8 ">
                <input value="/adminAgents/amenities/store" class="mr-1 choice-radio" type="radio" name="choice" checked>
                <label class="text-white mr-5 " for="">Amenity</label>
                <input value="/adminAgents/rule/store" class="mr-1 choice-radio" type="radio" name="choice">
                <label  class="text-white" for="">Rule</label>
            </div>
            <div class="mt-5">
                <button class="w-full py-3 rounded text-white bg-yellow-600">Create</button>
            </div>
        </form>
    </div>
</x-agent-dashboard-layout>

@section('javascript')
    <script>
        const radioBtn = document.querySelectorAll('.choice-radio');
        const currentForm = document.getElementById('form');
        
        radioBtn.forEach((btn, index) => {
            btn.addEventListener('click', function(e) {
                
                currentForm.action = e.target.value;
                console.log(currentForm);
            })
        })
    </script>
@endsection

@yield('javascript')