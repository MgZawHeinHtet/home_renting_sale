<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class AgentFaqController extends Controller
{
    public function index(){
        $faqs= Faq::all();
        
        return view('agent_dashboard.faq',[
            'faqs'=>$faqs
        ]);
    }

    public function create(){
        return view('agent_dashboard.faq-create');
    }

    public function store(){
        
        $cleanData = Request()->validate([
            'question'=>['required'],
            'answer'=>['required']
        ]);

        Faq::create($cleanData);
        return redirect('adminAgents/faq');
    }

    public function edit(Faq $faq){
        return view('agent_dashboard.faq-edit',[
            'faq'=>$faq
        ]);
    }

    public function upload(Faq $faq){
        $cleanData = Request()->validate([
            'question'=>['required'],
            'answer'=>['required']
        ]);

        $faq->update($cleanData);
        return redirect('adminAgents/faq');
 
    }

    public function destory(Faq $faq){
        $faq->delete();
        return redirect('adminAgents/faq');

    }
}
