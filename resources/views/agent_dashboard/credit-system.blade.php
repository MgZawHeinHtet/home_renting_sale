<x-agent-dashboard-layout>
    <div class="w-[85%]">

        <h4 class="text-2xl text-gray-300 tracking-wide mb-10 underline underline-offset-8">Credit System</h4>
        <div class="p-4 text-center bg-home-900 rounded-lg">
            <p class="text-white">Current Credit Point Balance = <span class="text-xl text-yellow-600">0</span></p>
        </div>
        <div class="border mt-10 px-10 py-10 rounded-lg">
            <p class="text-gray-300 font-bold  tracking-wide ">You can use the Credits when making your advertisements featured posts. Featured posts get more than 7 times of views than normal posts. The more Credits you buy, the more discount you will get.</p>
        </div>
        <div class="mt-10 flex gap-10">
            <a href="/adminAgents/credit/add">
                <div class="bg-home-900 w-[280px] h-[180px] text-center rounded-lg flex justify-center items-center flex-col gap-5">
                    <i class="fa-solid fa-square-plus text-[70px] text-yellow-600"></i>
                    <p class="font-bold text-yellow-700">Credit Point Add</p>
                </div>
            </a>
            <a href="/adminAgents/credit/record">
                <div class="bg-home-900 w-[280px] h-[180px] text-center rounded-lg flex justify-center items-center flex-col gap-5">
                    <i class="fas fa-chart-bar text-[70px] text-yellow-600"></i>
                    <p class="font-bold text-yellow-700">Credit Point Transcation</p>
                </div>
            </a>
        </div>
    </div>
</x-agent-dashboard-layout>