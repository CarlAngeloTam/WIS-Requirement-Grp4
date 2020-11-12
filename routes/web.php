<?php

use Illuminate\Support\Facades\Route;






Route::get('/', function () {
    return view('welcome');
});
Route::get('/main', 'MainController@primary');//Equipment
Route::get('/secondary','MainController@secondary');//Equipment
Route::get('/profiles', 'ProfilesController@index');
Route::get('/template', 'TemplatesController@index');




Route::get('/borrow/create','EventsController@create');
Route::get('/borrow/{equipment}','EventsController@show');
Route::post('/borrow/{equipment}/edit','EventsController@edit');
Route::post('/borrow','EventsController@store');


