<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertySaleFormRequest;
use App\Models\PropertySale;
use App\Models\SalePropertyReport;
use App\Models\User;
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
        $user = User::find(auth()->user()->id) ;

        if($user->allowed_posts < 1){
            return redirect('/adminAgents/credit/add');
        }; 
        $property_number = 'S-'.rand(1000,9999);
        $cleanData = $request->validated();
        $cleanData['agent_id'] = $user->id;
        $cleanData['propertyNumber'] = $property_number;
        PropertySale::create($cleanData);

        $user->allowed_posts -= 1;
        $user->update();

        return redirect('/adminAgents/show-ad-sale');
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

    public function makeFeatured(PropertySale $property){
        $user = User::find(auth()->user()->id) ;

        if($user->credit_points < 1){
            return redirect('/adminAgents/credit/add');
        }; 

        $property->is_featured = true;
        $property->update();

        $user->credit_points -= 1;
        $user->update();

        return back()->with('success','create successfully');
    }

    public function report_list(){
        $reports = SalePropertyReport::latest()->get();
        return view('agent_dashboard.report-list',[
            'reports'=>$reports
        
        ]);
    }

    public function soft_delete($id){
        
        $report = SalePropertyReport::find($id);
        $report->is_response = true;
        $report->property->delete();
        $report->update();

        return back();
    }

    public function restore($id){
        
        $report = SalePropertyReport::find($id);
        $report->property()->withTrashed()->first()->restore();
        return back();
    }
}
