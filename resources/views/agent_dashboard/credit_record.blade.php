<x-agent-dashboard-layout>
    <div class="w-[85%]">

        <h4 class="text-2xl text-gray-300 tracking-wide mb-10 underline underline-offset-8">Credit Point Transcation</h4>
        <div class="p-4 text-center bg-home-900 rounded-lg">
            <p class="text-white">Current Credit Point Balance = <span class="text-xl text-yellow-600">0</span></p>
        </div>


        <div class="relative overflow-x-auto mt-10">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Account Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Plan Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Point
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Discount
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transcations as $transcation)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $transcation->acc_name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $transcation->creditPackage->level }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transcation->creditPackage->point }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transcation->creditPackage->discount }}%
                        </td>
                        <td class="px-6 py-4">
                            {{ $transcation->transcation_price }} kyats
                        </td>
                        <td>
                            {{ $transcation->status }}
                        </td>
                    </tr>
                    @endforeach
                   
                    
                </tbody>
            </table>
        </div>

    </div>
</x-agent-dashboard-layout>
