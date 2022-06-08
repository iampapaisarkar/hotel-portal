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


// CHECK IF AUTH LOGGED IN REDIRECT DASHBOARD 
// Route::get('/', function () {return view('index');});

if(Auth::check()){
	Route::get('/', function () {return view('index');});
}else{
	Route::get('/', function () { return view('auth.login'); });
}


Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {return view('index');});
    Route::resource('agents', 'App\Http\Controllers\AgentController');
});