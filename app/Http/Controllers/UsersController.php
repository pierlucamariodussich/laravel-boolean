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
    public function show($id){
        $user = Booleaner::find($id);
        return view('user',\compact('user'));
    }
}
 