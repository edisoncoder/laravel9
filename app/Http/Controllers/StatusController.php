<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    protected $model;

    public function __construct(Status $status)
    {
        $this->model = $status;
    } 

}
