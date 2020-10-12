<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class all_information extends Controller
{
    /*Read All Information in all_information page Controller Here*/

    public function read_all_controller(){
    	$read_info=DB::table('employee')
    		->get();

    		return view('information')
    		    ->with('read_info_foreach', $read_info);
    }

}
