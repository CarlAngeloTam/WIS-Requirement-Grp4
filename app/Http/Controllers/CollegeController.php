<?php

namespace App\Http\Controllers;

use App\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function index() 
    { 
    	// get all the college
    	$college_dept = College::get();
    	return view('college.index', compact('college_dept'));
    }
}
