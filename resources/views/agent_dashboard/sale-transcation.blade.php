<x-agent-dashboard-layout>
    <h4 class="text-gray-300 text-xl underline underline-offset-8">Transaction list for <span class="text-yellow-600">{{ $property->title }}</span></h4>

    
    <table class="w-full text-sm mt-8 text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Username
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Billing Number
                </th>
                <th scope="col" class="px-6 py-3">
                    Payment Method
                </th>
                <th scope="col" class=" px-6 py-3">
                    status
                </th>
               <th>Created at</th>
                <th scope="col" class=" px-6 py-3">
                    action
                </th>


            </tr>
        </thead>
        <tbody>
            @if ($transcations->count())

                @foreach ($transcations as $transcation)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td>{{ $transcation->id }}</td>
                        

                        <td class="px-4 py-4">

                            {{ $transcation->name }}

                        </td>
                        <td class="px-6 py-4 ">
                            {{ $transcation->phone }} 
                        </td>
                        <td class="px-6 py-4">
                            {{ $transcation->billing_number }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transcation->payment_type }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transcation->status }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transcation->created_at->diffForHumans() }}
                        </td>

                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                @if ($transcation->payment_type == 'cash')
                                <form action="/adminAgents/transcation/sale/{{ $transcation->id }}/correct" method="POST">
                                    @csrf
                                    <button
                                        class="font-medium mr-3 text-green-600 dark:text-green-500 hover:underline">Confirm </button>
                                </form>
                                @else
                                <form action="/adminAgents/transcation/sale/{{ $transcation->id }}/check" method="GET">
                                   
                                    <button
                                        class="font-medium mr-3 text-green-600 dark:text-green-500 hover:underline">Check </button>
                                </form>
                                @endif
                            </div>

                        </td>
                    </tr>
                @endforeach
            @else
                <tr class="w-full h-[600px] ">
                    <td colspan="8" class="text-center text-lg tracking-wider">No Items found 🤷‍♀️</td>
                </tr>
            @endif
        </tbody>

    </table>
</x-agent-dashboard-layout>