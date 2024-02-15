<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertySaleFormRequest;
use App\Models\PropertySale;
use Illuminate\Http\Request;
use PhpParser\Builder\Property;

class ShowPropertySaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = auth()->user()->propertySale()->withTrashed()->get();
       
        return view('agent_dashboard.show-ad-sale',[
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
        $property = PropertySale::findOrFail($id);
        return view('agent_dashboard.edit-ad-sale',[
            'property' => $property
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PropertySaleFormRequest $request, string $id)
    {
        $property = PropertySale::findOrFail($id);
        $cleanData = $request->validated();
        
        $property->update($cleanData);
        return redirect('/adminAgents/show-ad-sale');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $property = PropertySale::findOrFail($id);
        $property->delete();
        return back()->with('success','delete successfully');
    }
}
