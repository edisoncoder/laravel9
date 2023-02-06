<?php

namespace App\Http\Controllers;

use App\Models\Congregation;
use App\Models\Launch;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class LaunchController extends Controller
{
    protected $launch;
    protected $congregation;

    public function __construct(Launch $launch, Congregation $congregation)
    {
        $this->launch = $launch;
        $this->congregation = $congregation;

    } 

    public function index($congregationId)
    {
        $congregation = $this->launch->getCongregation($congregationId);
        $totals = $this->launch->getLaunches($congregation);
        $soma = $this->launch->sumByCongregation($totals);
        
        return view('launches.index', compact('totals', 'congregation', 'soma'));
    }

    public function show($congregationId, $statusId)
    {
        $congregation = $this->launch->getCongregation($congregationId);
        $totals = $this->launch->describeLaunches($congregation, $statusId);
        $soma = $this->launch->sumByCongregation($totals);
        
        return view('launches.show', compact('totals', 'congregation', 'soma'));
    }

    public function store(Request $request, $congregationId)
    {
        if(!$this->congregation->find($congregationId))
        {
            return redirect()->back();
        }
        Launch::create($request->all());

        return redirect()->route('launches.index', $congregationId);
    }

    public function update($congregationId, $launchId, $statusNew)
    {
        $item = $this->launch::findOrFail($launchId);
        $statusId = $item->status;
        $item->update([
            'status'=> $statusNew,
        ]);
        return redirect()->route('launches.show', ['congregationId'=> $congregationId, 'statusId'=> $statusId]);
    }


}
