<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScheduleFormRequest;
use App\Models\Notification;
use App\Models\PropertySale;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function takeSchedule(ScheduleFormRequest $request,$id){
        $cleanData = $request->validated();
        $cleanData['property_id'] = $id;
        $cleanData['user_id'] = auth()->user()->id;
        $property = PropertySale::find($id);
        Schedule::create($cleanData);

        Notification::create([
            'recipent_id'=> $property->agent->id,
            'noti_type'=>'schedule_request',
            'sender_id'=>$cleanData['user_id'],
            'related_url'=> "/adminAgents/schedules"
        ]);

        return back()->with('schedule-success','Success request to take schedule ✅');
    }
}
