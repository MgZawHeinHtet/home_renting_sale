<div id="noti-container" class="hidden z-50">
    @auth
    @if ($notifications->count())
        <div class="w-7 h-7 bg-white absolute top-[70px] rotate-45 right-[380px]"></div>

        <div class="bg-slate-300 w-96 absolute rounded-lg shadow overflow-hidden  space-y-1 top-[75px] right-48">
            <a href="/profile/notifications">
                @foreach ($notifications as $notification)
                    <div class="bg-white py-6  px-4 relative">
                        <div class="font-bold flex items-center gap-3">
                            <div class="w-16 h-16 rounded-full flex justify-center items-center bg-gray-300">
                                <i class="fas fa-home text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <x-notification-message :type="$notification->noti_type" :sender="$notification->sender"></x-notification-message>
                                <p class="text-gray-600 text-sm">{{ $notification->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
    
                    </div>
                @endforeach
            </a>
    
        </div>
    @else
    <div class="w-7 h-7 bg-white absolute top-[70px] rotate-45 right-[380px]"></div>

    <div class="bg-slate-300 w-96 absolute rounded-lg shadow overflow-hidden  space-y-1 top-[75px] right-48">
        <div class="bg-white py-6  px-4 relative">
        <p class="text-center text-lg">🤷‍♀️ Nothing News</p>
        </div>
    </div>
    @endif
        
    @endauth

    
</div>
