<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertySaleFormRequest;
use App\Models\PropertySale;
use Illuminate\Http\Request;

    class AgentPropertySaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('agent_dashboard.post-ad-sale');
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
    public function store(PropertySaleFormRequest $request)
    {
        $cleanData = $request->validated();
        $cleanData['agent_id'] = auth()->user()->id;
        PropertySale::create($cleanData);
        return back()->with('success','create successfully');
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
