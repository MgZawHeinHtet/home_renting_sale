<?php

namespace App\Http\Controllers;

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
        $properties = $agent->propertySale()->paginate(7);

        
        return view('agents.show',[ 
            'agent'=>$agent,
            'properties'=>$properties
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
