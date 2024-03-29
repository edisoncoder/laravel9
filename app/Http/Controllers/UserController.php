<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    } 

    public function index(){

        $users = User::all();
        
        return view('users.index', compact('users'));
    }

    public function show($id){

        if(!$user = User::find($id))
            return redirect()->route('users.index');
        
        
        return view('users.show', compact('user'));
    }
}
