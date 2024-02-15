<?php

namespace App\View\Components;

use App\Models\Schedule;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ScheduleBadge extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.schedule-badge',[
            'count'=>Schedule::where('status','pending')->where('agent_id',auth()->user()->id)->count()
        ]);
    }
}
