<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Congregation;
use App\Models\Launch;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaunchController extends Controller
{
    protected $launch;

    public function __construct(Launch $launch)
    {
        $this->launch = $launch;
    } 

    public function show($congregationId)
    {
        $congregation = $this->launch->getCongregation($congregationId);
        $totals = $this->launch->getLaunches($congregation);
        $soma = $this->launch->sumByCongregation($totals);
        
        return $totals;
    }

    public function store(Request $request)
    {
        Launch::create($request->all());
    }



}
