<div>
    <button type="button" id="noti-btn"
        class="relative inline-flex items-center p-2 text-sm font-medium text-center text-white  hover:bg-gray-600 rounded">
        <i class="fa-solid fa-bell text-2xl"></i>
        <span class="sr-only">Notifications</span>
        @if ($noti_count)
            
        <div
            class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-0 -end-1 dark:border-gray-900">
            {{ $noti_count }}</div>
        @endif
    </button>
</div>
