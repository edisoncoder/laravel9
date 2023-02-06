<?php

namespace App\Http\Controllers;

use App\Models\InputType;
use Illuminate\Http\Request;

class InputTypeController extends Controller
{
    protected $model;

    public function __construct(InputType $inputType)
    {
        $this->model = $inputType;
    } 
}
