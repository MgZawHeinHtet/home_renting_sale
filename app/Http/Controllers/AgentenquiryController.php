<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class AgentenquiryController extends Controller
{
    public function index()
    {

        return view('agent_dashboard.enquiry', [
            'enquries' => auth()->user()->enquries->load('property')
        ]);
    }

    public function markAsRead($id)
    {
        $enq = Enquiry::find($id);
        $enq->is_read = true;
        $enq->update();

        return back();
    }

    public function destory($id){
        $enq = Enquiry::find($id);
        $enq->delete();
        return back();
    }
}
