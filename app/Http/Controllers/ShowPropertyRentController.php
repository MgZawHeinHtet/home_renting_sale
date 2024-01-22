<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyRentFormRequest;
use App\Models\Amenity;
use App\Models\PropertyRent;
use App\Models\rule;
use Illuminate\Http\Request;

class ShowPropertyRentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = auth()->user()->propertyRent;
        
        return view('agent_dashboard.show-ad-rent',[
            'properties' => $properties
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
    public function store(Request $request)
    {
        //
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
        $property = PropertyRent::findOrFail($id);
        return view('agent_dashboard.edit-ad-rent',[
            'property' => $property,
            'amenities'=>Amenity::all(),
            'rules'=>rule::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PropertyRentFormRequest $request, string $id)
    {
        $property = PropertyRent::find($id);
        $cleanData = $request->validated();
        $cleanData['amenities'] = json_encode(Request()->amenities) ;
        $cleanData['house_rules'] = json_encode(Request()->house_rules);
        
        $property->update($cleanData);
        return back();
    }   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
