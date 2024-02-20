<x-agent-dashboard-layout>
   
    <div class=" mx-auto">
        <div class="mb-5 flex justify-between items-center">
            <h4 class="text-xl text-gray-300">FAQ Management</h4>
            <form action="/adminAgents/faq/create" method="GET">
                @csrf
                <button class="text-gray-300 px-8 py-2 bg-green-600 rounded-2xl">Create</button>
            </form>
        </div>
        <table class="text-sm w-full text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class=" px-6 py-3">
                        question
                    </th>
                    <th scope="col" class="px-6 py-3">
                        answer
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
                @foreach ($faqs as $faq)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800">
                        <td class="px-6 w-20">
                            <span class="font-bold">{{ $faq->id }}</span>
                        </td>
                        <td class="px-6 w-80">
                            <span class="font-bold">{{ $faq->question }}</span>
                        </td>
                        <td class="px-6 w-80 py-4 ">
                            
                                {{ $faq->answer }}
                        
                        </td>
                       
                        <td class="px-6 py-4 w-36">
                            {{ $faq->created_at->format('d-m-y') }}
                        </td>
                        <td class="px-2 py-4 w-48 flex gap-2">
                            <form action="/adminAgents/faq/{{ $faq->id }}/edit" method="get">
                                @csrf
                                
                                <button type="submit" class="  text-green-500 px-6 py-1 border-green-500 border rounded-lg font-bold">Edit</button>
                            </form>
                            <form action="/adminAgents/faq/{{ $faq->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border border-red-500 px-4 py-1  text-red-500 rounded-lg font-bold">Remove</button>
                            </form>
                        </td>
    
                    </tr>
                @endforeach
    
    
            </tbody>
    
        </table>
    </div>

</x-agent-dashboard-layout>
