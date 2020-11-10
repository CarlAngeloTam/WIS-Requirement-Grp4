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

//show all
Route::get('/', 'BooksController@index');

// GET create display form
Route::get('/books/create', 'BooksController@create');

//New record
Route::post('/books', 'BooksController@store');

//WILDCARDS
// PUT edit display form
Route::get('/books/{book}/edit', 'BooksController@edit');

// Edit a book record
Route::put('/books/{book}', 'BooksController@update');

// GET view individually
Route::get('/books/{id}', 'BooksController@show');

// GET delete 
Route::delete('/books/{book}', 'BooksController@remove');

