<?php

namespace App\Http\Controllers;

use App\Models\Congregation;
use App\Models\Area;
use Illuminate\Http\Request;


class CongregationController extends Controller
{
    public function index($area = False){
        
        if($area)
        {
            $areas = Area::find($area);
            $congregations = $areas->congregations()->get();
            return view('congregations.index', compact('areas', 'area', 'congregations'));
        }
        else
        {
            $areas = Area::with('congregations')->get();
            return view('congregations.index', compact('areas', 'area'));
        }
        
        
        return view('congregations.index', compact('areas', 'area'));
    }

    public function showArea($id)
    {
        

        return view('congregations.showAreas', compact('congregations'));
    }

    public function show($id){
        
        if(!$congregation = Congregation::find($id))
            
            return redirect()->route('congregations.index'); 
        
        
        return view('congregations.show', compact('congregation'));
    }

    public function create(){

    }

    public function store(Request $request){
        
        return $request->all(); 
    }
}
