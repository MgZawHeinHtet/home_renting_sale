<?php

namespace App\View\Components;

use App\Models\Notification;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NotiContainer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $notifications = auth()->user()?->notifications()?->where('is_read',false)->latest()->get() ;
        return view('components.noti-container',[
            'notifications' => $notifications
        ]);
    }
}
