<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyRentFormRequest;
use App\Models\Amenity;
use App\Models\PropertyRent;
use App\Models\rule;
use Illuminate\Http\Request;
use PhpParser\Builder\Property;

class AgentPropertyRentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('agent_dashboard.post-ad-rent',[
            'amenities'=>Amenity::all(),
            'rules'=>rule::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyRentFormRequest $request)
    {
        $cleanData = $request->validated();
       
        $property_number = 'R-'.rand(1000,9999);
        $cleanData['property_number'] = $property_number;
        $cleanData['agent_id'] = auth()->user()->id;
        
        $cleanData['amenities'] = json_encode(Request()->amenities) ;
        $cleanData['house_rules'] = json_encode(Request()->house_rules);
        $property = PropertyRent::create($cleanData);
        return redirect("adminAgents/images-upload/$property->id/rent");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
