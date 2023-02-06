<?php

namespace App\Http\Controllers;

use App\Models\LaunchType;
use Illuminate\Http\Request;

class LaunchTypeController extends Controller
{
    protected $model;

    public function __construct(LaunchType $launchType)
    {
        $this->model = $launchType;
    } 
}
