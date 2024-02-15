<x-agent-dashboard-layout>
    <div class="flex justify-between items-center text-normal font-normal capitalize mb-5">
        <h2 class="text-3xl text-slate-400 font-bold underline underline-offset-8">Amenities and Rule Management</h2>
        <a href="/adminAgents/amenitiesAndRule/create" class="py-3 px-4 bg-green-600 text-white rounded-lg" href="">Add Amenities and Rule</a>
    </div>
    <div class="relative overflow-x-auto  sm:rounded-lg">
        <h4 class="text-gray-300 text-lg mb-3">Amenities</h4>
        <table class="w-[800px] text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class=" px-6 py-3">
                        title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        icon
                    </th>

                    <th scope="col" class="px-6 py-3">
                        demo icon
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created_at
                    </th>

                    <th scope="col" class=" px-6 py-3">
                        Action
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($amenities as $amenities)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800">
                        <td class="px-6">
                            <span class="font-bold">{{ $amenities->id }}</span>
                        </td>
                        <td class="px-6">
                            <span class="font-bold">{{ $amenities->title }}</span>
                        </td>
                        <td class="px-4 py-4 ">
                            <span class="line-clamp-2">
                                {{ $amenities->icon }}
                            </span>
                        </td>
                        <td class="px-4 py-4">
                            
                                <i class="{{ $amenities->icon }}"></i>
                            
                        </td>
                        <td class="px-6 py-4 ">
                            {{ $amenities->created_at->format('d-m-y') }}
                        </td>
                        <td class="px-2 py-4 ">
                            <form action="/adminAgents/amenities/{{ $amenities->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="  text-red-500 rounded-lg font-bold">Remove</button>
                            </form>
                        </td>

                    </tr>
                @endforeach


            </tbody>

        </table>


        <h4 class="text-gray-300 text-lg mb-3 mt-10">House Rules</h4>
        <table class="w-[800px] text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class=" px-6 py-3">
                        title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        icon
                    </th>
                    <th scope="col" class="px-6 py-3">
                        demo icon
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created_at
                    </th>

                    <th scope="col" class=" px-6 py-3">
                        Action
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($rules as $rule)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800">
                        <td class="px-6">
                            <span class="font-bold">{{ $rule->id }}</span>
                        </td>
                        <td class="px-6">
                            <span class="font-bold">{{ $rule->title }}</span>
                        </td>
                        <td class="px-4 py-4">
                            <span class="line-clamp-2">
                                {{ $rule->icon }}
                            </span>
                        </td>
                        <td class="px-4 py-4">
                            
                            <i class="{{ $rule->icon }}"></i>
                        
                    </td>
                        <td class="px-6 py-4 ">
                            {{ $rule->created_at->format('d-m-y') }}
                        </td>
                        <td class="px-2 py-4 ">
                            <form action="/adminAgents/rules/{{ $rule->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="  text-red-500 rounded-lg font-bold">Remove</button>
                            </form>
                        </td>

                    </tr>
                @endforeach


            </tbody>

        </table>
        

        
    </div>
</x-agent-dashboard-layout>
