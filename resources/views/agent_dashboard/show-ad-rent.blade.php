<x-agent-dashboard-layout>
    <h2 class="text-2xl capitalize text-yellow-600 tracking-wide mb-5"> Rent Properties <span
            class="text-white">list</span></h2>
    <div
        class="alert-container hidden w-screen h-screen bg-black bg-opacity-50 z-50 fixed top-0 right-0  justify-center items-center">

    </div>
    <div class="grid grid-cols-4 gap-5">
        @foreach ($properties as $property)
            <x-show-rent-card :property="$property"></x-show-rent-card>
        @endforeach
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
                    <form action="/adminAgents/propertyRents/${id}/makeFeatured" method="POST">
                @csrf
                        <button class="px-6 py-2 text-green-800">Confirm</button>
                    </form>
                </div>
            </div>
            `
            const cancelBtn = document.querySelector('.cancelBtn');

            cancelBtn.addEventListener('click', function() {
                alertContainer.classList.add('hidden');
                alertContainer.classList.remove('flex');
            })
        }

        openModal.forEach(btn =>
            btn.addEventListener('click', function(e) {
                if(e.target != btn) return;

                
                showAlert(e.target.getAttribute('data-btn'))
            })
        )
    </script>
@endsection

@yield('javascript')
