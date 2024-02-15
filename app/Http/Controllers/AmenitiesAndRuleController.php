<?php

namespace App\Http\Controllers;

use App\Http\Requests\AmenitiesAndRuleFormRequest;
use App\Models\Amenity;
use App\Models\rule;
use Illuminate\Http\Request;

class AmenitiesAndRuleController extends Controller
{

    public function index(){
        $amenities = Amenity::all();
        $rules = rule::all();
        return view('agent_dashboard.amenitiesAndRule',[
            'amenities'=>$amenities,
            'rules'=>$rules
        ]);
    }

    public function create(){
        return view('agent_dashboard.amenitiesAndRuleCreate');
    }

    public function store_amenity(AmenitiesAndRuleFormRequest $request){
        $cleanData = $request->validated();
        Amenity::create($cleanData);
        return redirect('/adminAgents/amenitiesAndRule');
    }

    public function store_rule(AmenitiesAndRuleFormRequest $request){
        $cleanData = $request->validated();
        rule::create($cleanData);
        return redirect('/adminAgents/amenitiesAndRule');

    }
    public function destory_amenity(Amenity $amenity){
        $amenity->delete();
        return back();
    }

    public function destory_rule(rule $rule){
        $rule->delete();
        return back();
    }
}
