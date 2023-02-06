<?php

namespace App\Http\Controllers\api;

use App\Models\Congregation;
use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;

class CongregationsController extends Controller
{

    public function index(){
        
            $areas = Area::with('congregations')->get();
            return $areas;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $areas = Area::find($id);
        $congregations = $areas->congregations()->get();
        return $congregations;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
