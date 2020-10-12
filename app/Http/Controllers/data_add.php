<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
session_start();

use DB;
use Illuminate\Support\Facades\Redirect;

class data_add extends Controller
{
    /*/*insert_information form action Controller Here*/

    public function add_info_controller(Request $request){
    	$data=array();
    	$data['name']=$request->name;
    	$data['position']=$request->position;
        $data['salary']=$request->salary;

        DB::table('employee')->insert($data);
        Session::put('message','Data insert Successfully');
        return Redirect::to('/insert');


    }

}
