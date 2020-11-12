<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public  function index()
    {
    	$borrow = Borrow::all();
    	return view('borrow.index',compact('borrow'));
    }
    public function show(Event $event){
    	return view('borrow.show',compact('borrow'));
    }
    public function create(){
    	return view('borrow.create');
    }
    public function store(){
    	// return view('borrow.store');

    	$borrow = new Borrow;
    	$borrow ->name = request();
    	$borrow ->equipment = request();
    	$borrow ->facility = request();
    	$borrow ->save(); 
    	
    	return redirect('/');   	
    }
    public function edit(Borrow $borrow){
    	return view('borrow.edit',compact('borrow'));
    }
