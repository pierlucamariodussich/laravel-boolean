<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booleaner;

class UsersController extends Controller
{
    public function index(){
        $user = Booleaner::all();
        return  view('users', compact('user'));;
    }
}
