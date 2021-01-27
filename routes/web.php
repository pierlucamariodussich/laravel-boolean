<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get( '/home', function(){
    return view('home');
}) -> name('home');

Route::get( '/corso', function(){
    return view('corso') ;
}) -> name('corso');

Route::get( '/dopo-il-corso', function(){
    return view('dopo-il-corso');
}) -> name('dopo-il-corso');

Route::get( '/camp-gratuito', function(){
    return view('camp-gratuito');
}) -> name('camp-gratuito');

Route::get( '/users', 'UsersController@index') -> name('users');

