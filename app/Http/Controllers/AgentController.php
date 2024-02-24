<?php

namespace App\Http\Controllers;

use App\Models\PropertyRent;
use App\Models\PropertySale;
use App\Models\User;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $request = request('search_input');
        return view('agents.index',[
            'agents'=>User::where('role','agent')->filter($request)->orderBy('isVerified','desc')->paginate(5),
            'total_agents'=>User::where('role','agent')->count()
        ]);
    }

    /**a
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
        $agent = User::find($id);

        $curr_route = url()->current();
        $is_sale = str_contains($curr_route,'sale');
        $is_rent = str_contains($curr_route,'rent');
        $requests = request(['type','search_input','maxPrice','minPrice','bath','bed','houseType','region','township']);
    
        if($is_sale){
            $type = 'sale';
            $properties = PropertySale::with(['agent','salePropertyImage'])->where('agent_id',$id)->filter($requests)->orderBy('is_featured','desc')->latest()->paginate(7)->withQueryString();
            
        }else if($is_rent){
            $type = 'rent';
            $properties = PropertyRent::with(['agent'])->where('agent_id',$id)->filter($requests)->orderBy('is_featured','desc')->latest()->paginate(7)->withQueryString();
        }
    
        
        return view('agents.show',[ 
            'agent'=>$agent,
            'properties'=>$properties,
            'type'=>$type
        ]);
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
