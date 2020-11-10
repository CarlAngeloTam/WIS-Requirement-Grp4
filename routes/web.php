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
    return view('welcome');
});

<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/college', 'CollegeController@index');
=======
=======
>>>>>>> master
Route::get('/hello', function() { 
	return "JC was here";
});

<<<<<<< HEAD
>>>>>>> origin/Locker_migration
=======
>>>>>>> master
