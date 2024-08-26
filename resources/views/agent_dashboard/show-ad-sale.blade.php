<x-agent-dashboard-layout>
    <div class="w-full space-y-5">
        <h4 class="text-white text-xl capitalize underline underline-offset-8">My Advertisments-for sale</h4>
        <div
            class="alert-container hidden w-screen h-screen bg-black bg-opacity-50 z-50 fixed top-0 right-0  justify-center items-center">

        </div>
        <h6 class="text-white text-xl tracking-wider ">Total Sale Ads - (<span
                class="text-yellow-600">{{ $properties->count() }}</span>)</h6>
        <x-alert></x-alert>
        <div class="grid grid-cols-2 gap-12">
            @foreach ($properties as $property)
                <x-show-sale-card :property="$property"></x-show-sale-card>
            @endforeach


        </div>
    </div>
</x-agent-dashboard-layout>


@section('javascript')
    <script>
        const openModal = document.querySelectorAll('.open-modal');
        const alertContainer = document.querySelector('.alert-container');

        function showAlert(id) {
           
            alertContainer.classList.add('flex');
            alertContainer.classList.remove('hidden');
            alertContainer.innerHTML = `<div class="w-[520px] flex flex-col  items-center p-6 h-52 bg-white shadow-lg z-50 rounded-lg ">
                <p class="text-2xl mb-5">Warning 😉</p>
                <p>To make  property to featured  you need to use 1 credit point</p>
                <p class="text-yellow-600 capitalize mt-1">Posting property and get a profit</p>
                <div class="flex gap-10 mt-5">
                    <button class="cancelBtn px-6 py-2 text-red-600">Exit</button>
                    <form action="/adminAgents/propertySales/${id}/makeFeatured" method="POST">
                     @csrf
                        <button class="px-6 py-2 text-green-800">Confirm</button>
                    </form>
                </div>
            </div>
            `
            const cancelBtn = document.querySelector('.cancelBtn');

            cancelBtn.addEventListener('click', function(){
                alertContainer.classList.add('hidden');
            alertContainer.classList.remove('flex');
            })
        }
    
        openModal.forEach(btn =>
            btn.addEventListener('click', function(e) {
                
                showAlert(e.target.getAttribute('data-btn'))
            })
        )
    </script>
@endsection

@yield('javascript')
