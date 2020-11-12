<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function primary(){
    	$fullname = request('fullname');
		dd($fullname);    	
		return view('primary', ['fullname' =>'$fullname']);
    }
}