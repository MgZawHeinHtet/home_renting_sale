<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScheduleFormRequest;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function takeSchedule(ScheduleFormRequest $request,$id){
        $cleanData = $request->validated();
        $cleanData['property_id'] = $id;
        $cleanData['user_id'] = auth()->user()->id;
        Schedule::create($cleanData);
        return back();
    }
}
