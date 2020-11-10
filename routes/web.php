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


// Index of CRUD
Route::get('/colleges', 'CollegeController@index');

// Create
Route::get('/colleges/create', 'CollegeController@create');

// Store data
Route::post('/colleges', 'CollegeController@store');

// Show - Read of CRUD 
Route::get('/colleges/{college}', 'CollegeController@show');

// Edit
Route::get('/colleges/{college}/edit', 'CollegeController@edit');

// Update 
Route::put('/colleges/{college}', 'CollegeController@update');



