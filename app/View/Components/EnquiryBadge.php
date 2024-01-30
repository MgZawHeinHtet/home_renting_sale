<?php

namespace App\View\Components;

use App\Models\Enquiry;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EnquiryBadge extends Component
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
        return view('components.enquiry-badge',[
            'total_enquiry' => Enquiry::where('is_read',false)->count()
        ]);
    }
}
