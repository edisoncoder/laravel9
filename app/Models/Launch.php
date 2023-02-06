<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Launch extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'date',
        'status',
        'amount',
        'user_id',
        'congregation_id',
        'input_type_id',
        'launch_type_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function congregation()
    {
        return $this->belongsTo(Congregation::class);
    }

    public function input_type()
    {
        return $this->belongsTo(InputType::class);
    }

    public function launch_type()
    {
        return $this->belongsTo(LaunchType::class);
    }
    public function getCongregation($congregationId)
    {
        $congregation = Congregation::find($congregationId);

        return $congregation;
    }

    public function getLaunches($congregation)
    {
        
        $totais = $congregation->launches()
                               ->groupBy('status')
                               ->select('status')
                               ->selectRaw("count(status) as qtStatus")
                               ->selectRaw("sum(amount) as soma")
                               ->selectRaw("(select name from statuses where id=status) as statues")
                               ->get();
        
        return $totais;
        
        }

        public function describeLaunches($congregation, $status)
        {
            
            $totais = $congregation->launches()
                                    ->where('status', '=', $status)
                                    ->select('amount','date','status','id')
                                    ->selectRaw("(select name from launch_types where id=launch_type_id) as launch_type")
                                    ->selectRaw("(select name from input_types where id=input_type_id) as input_type")
                                    ->selectRaw("(select name from statuses where id=status) as statues")
                                    ->orderBy('date')
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
