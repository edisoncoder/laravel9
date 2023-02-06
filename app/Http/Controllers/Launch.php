<?php

namespace App\Http\Controllers;

use App\Models\Congregation;
use Illuminate\Http\Request;

class Launch extends Controller
{
    public function getCongregation($congregationId)
    {
        $congregation = Congregation::find($congregationId);

        return $congregation;
    }

    public function getLaunches($congregation)
    {
        
        $totais = $congregation->launches()
                               ->groupBy('status')
                               ->selectRaw("count(status) as qtStatus")
                               ->selectRaw("sum(amount) as soma")
                               ->selectRaw("(select name from statuses where id=status) as statues")
                               ->get();
        
        return $totais;
        
        }

        public function sumByCongregation($totals)
        {
            $soma = 0;                       
            foreach ($totals as $total) {
                $soma += $total->soma;

            return $soma;
        }
    }
}
