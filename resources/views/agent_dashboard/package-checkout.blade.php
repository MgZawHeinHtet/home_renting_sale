<x-agent-dashboard-layout>
    <form action="/adminAgents/credit/{{ $id }}/checkout" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="w-[35%]  mx-auto space-y-5 mt-10">

            <p class="text-gray-300 font-bold capitalize text-lg tracking-wider">To purchase package,put transcition
                screenshot</p>

            <input type="text" name="acc_name" class="w-full rounded shadow" placeholder="Enter Bank Account Name">
            <x-error name="acc_name"></x-error>
            <div class="space-y-2">

                <label class="text-gray-300 block" for="">Transcation ScreenShot</label>
                
                <input name="transcation_photo" class="w-full bg-gray-300 shadow" type="file" >
                <x-error name="transcation_photo"></x-error>
            </div>
            <button class="uppercase w-full py-2 rounded text-gray-300  bg-yellow-700">Submit</button>
        </div>

        
    </form>
    <div class="w-[35%] mx-auto space-y-5 mt-10">
        <p class="text-gray-300 font-bold tracking-wide">KPay(09268694224) - <button><i class="fa-solid fa-copy text-lg text-yellow-600"></i></button></p>
        <p class="text-gray-300 font-bold tracking-wide">WavePay(09268694224) - <button><i class="fa-solid fa-copy text-lg text-yellow-600"></i></button></p>
        <p class="text-gray-300 font-bold tracking-wide">CB Pay(09268694224) - <button><i class="fa-solid fa-copy text-lg text-yellow-600"></i></button></p>
        <p class="text-gray-300 font-bold tracking-wide">KBZ(09268694224) - <button><i class="fa-solid fa-copy text-lg text-yellow-600"></i></button></p>
    </div>
</x-agent-dashboard-layout>
