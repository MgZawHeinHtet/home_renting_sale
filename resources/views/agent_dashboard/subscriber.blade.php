<x-agent-dashboard-layout>
    
        <div class="flex justify-between items-center text-normal font-normal capitalize mb-5">
            <h2 class="text-3xl text-slate-400 font-bold">Subscribers Management</h2>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
           
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class=" px-6 py-3">
                            Username
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
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
                    @foreach ($subscribers as $subscriber)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800">
                            <td class="px-6">
                                <span class="font-bold">{{ $subscriber->id }}</span>
                            </td>
                            <td class="px-6">
                                <span class="font-bold">{{ $subscriber->user->name }}</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="line-clamp-2">
                                    {{ $subscriber->email }}
                                </span>
                            </td>
                            <td class="px-6 py-4 ">
                                {{ $subscriber->created_at->format('d-m-y') }}
                            </td>
                            <td class="px-2 py-4 ">
                                <form action="/dashboard/subscribers/{{ $subscriber->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-6 py-2 text-white bg-red-500 rounded-lg font-bold">Remove</button>
                                </form>
                            </td>
    
                        </tr>
                    @endforeach
    
    
                </tbody>
    
            </table>
            {{ $subscribers->links() }}
            <div>
    
            </div>
        </div>
   
</x-agent-dashboard-layout>