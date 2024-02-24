<x-agent-dashboard-layout>
    
    <div class="flex justify-between items-center text-normal font-normal capitalize ">
        <h2 class="text-3xl text-slate-400 font-bold">News Managment</h2>
        <div class="flex gap-2">
            <a class="block rounded  bg-green-500 w-44 py-3 text-center hover:bg-green-700 transition-all duration-150 text-white"
                href="/adminAgents/news/create "> <i class="fa-solid fa-plus text-white"></i> Add News</a>
        </div>
    </div>

   {{-- <x-alert></x-alert> --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
        
        <table class="w-full text-sm  text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Pre Description
                    </th>
                    <th scope="col" class=" px-6 py-3">
                        Description
                    </th>
                    
                    <th scope="col" class=" px-6 py-3">
                        view
                    </th>
                    <th scope="col" class=" px-6 py-3">
                        Like
                    </th>
                
                    <th scope="col" class="px-6 py-3">
                        Is_publish
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created_at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @if ($newses->count()) 
                    
                @foreach ($newses as $news)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6">
                            <span class="font-bold">{{ $news->id }}</span>
                        </td>
                        <th scope="row"
                            class="px-4 py-4 font-medium text-gray-900 whitespace-normal dark:text-white flex items-center ">
                            <img class="w-10 h-10 rounded-full" src="{{ $news->photo }}" alt="">
                            <span class="ml-2">{{ Str::limit($news->title,30) }}</span>
                        </th>
                        <td class="px-6 py-4  w-72">
                            {{ $news->pre_description }}
                        </td>
                        <td class="px-6 py-4  w-72">
                            {!! Str::limit($news->description,200) !!}
                        </td>
                        
                        <td class="px-6 py-4 ">
                            {{ $news->view}}
                        </td>
                        <td class="px-6 py-4">
                            {{  $news->likedUser->count() }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $news->isPosted ? 'True' : 'False' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $news->created_at->format('d-m-y') }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <a href="/adminAgents/news/{{ $news->id }}/edit"
                                    class="font-medium mr-3 text-green-600 dark:text-green-500 hover:underline">Edit</a>
                                <form action="/adminAgents/news/{{ $news->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium text-red-500 hover:underline">Delete</button>
                                </form>
                            </div>

                        </td>
                    </tr>
                @endforeach
                @else
                    <tr class="w-full h-[600px]">
                        <td colspan="8" class="text-center text-lg tracking-wider">No Items found 🤷‍♀️</td>
                    </tr>
                @endif
            </tbody>

        </table>
        
    </div>
   
    <div class="paginator mt-4 bg-dark">
        {{ $newses->links() }}
    </div> 
</x-agent-dashboard-layout>