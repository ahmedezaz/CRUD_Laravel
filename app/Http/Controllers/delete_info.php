<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
session_start();

use DB;
use Illuminate\Support\Facades\Redirect;

class delete_info extends Controller
{
    /*Delete Information in information page Route Here*/

    public function delete_info_controller($id){
    	DB::table('employee')
    	  ->where('employee_id',$id)
    	  ->delete();

    	  Session::put('message','Delete Succesfully');
    	  return Redirect::to('/information');
    }

}
