<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use Illuminate\Http\Request;

class ContributionController extends Controller
{
    protected $model;

    public function __construct(Contribution $contribution)
    {
        $this->model = $contribution;
    } 

}
