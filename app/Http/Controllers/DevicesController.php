<?php

namespace App\Http\Controllers;

use App\Device;
use Illuminate\Http\Request;

class DevicesController extends Controller
{
    public function index()
    {
        $devices = device::get();
        return view ('devices.index',compact('devices'));
    }
    public function show(Device $device)
    {
   
        return view('devices.show', compact('device'));

    }

}
