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

    public function show(College $college) 
    { 
    	return view('college.show', compact('college'));
    }

    public function create()
    {
    	$buildings = ['Main', 'Nursing', 'Science'];
    	return view('college.create', compact('buildings'));
    }

    public function store() 
    { 
    	$college_dept = new College;
    	$college_dept->building = request()->building;
    	$college_dept->name = request()->name;

    	$college_dept->save();
    	return redirect('/colleges');
    }

    public function edit(College $college) 
    { 	
    	$buildings = ['Main', 'Nursing', 'Science'];
    	return view('college.edit', compact('college', 'buildings'));
    }

    public function update(College $college)
    {
    	$college_dept->building = request()->building;
    	$college_dept->name = request()->name;
    	$college_dept->save();
    	return redirect('/colleges');
    }
}
