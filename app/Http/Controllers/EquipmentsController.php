<?php

namespace App\Http\Controllers;

use App\Equipment;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    public function index() 
    { 

    	$equipments = Equipment::get();
    	return view('equipments.index', compact('equipments'));
    }

    public function show(Equipment $equipment) 
    { 
    	return view('equipments.show', compact('equipment'));
    }

    public function create()
    {
    	$facilities = ['Sports Center', 'Multimedia'];
    	return view('equipments.create', compact('facilities'));
    }

    public function store() 
    { 
    	$equipment = new Equipment;
    	$equipment->facility = request()->facility;
    	$equipment->name = request()->name;
    	$equipment->number_of_item = request()->number_of_item;

    	$equipment->save();
    	return redirect('/equipments');
    }
}
