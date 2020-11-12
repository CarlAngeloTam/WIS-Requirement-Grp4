<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProfileController extends Controller{
	//SELECT * FROM films 
    $profiles = (DB::table('equipment')->get();
    	return view('profile.index',['films'=>$films])
    	return view('profile.index',[''=>$films])
    $profile = DB table(product)->where('amount','>','100')
   	return view('profile.index',compact('profile'));
   	$profile = $filtered_profile;

	}
	public function filthered($profile) {
		$profile = DB::table('name') ->get()->toArray();
		$profile = array_filter($profile, function($profile) use($name){
			return $film->name == $name;
		});
	}

return view('profile.index', compact('profile')); 
}



?>