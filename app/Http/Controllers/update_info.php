<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
session_start();

use DB;
use Illuminate\Support\Facades\Redirect;
class update_info extends Controller
{
    /*Update Information in edit page Controller Here*/

    public function edit_info_controller($edit_info_var){
    	$info=DB::table('employee')
    	->where('employee_id',$edit_info_var)
    	->first();

    	return view('edit')
    	->with('info',$info);
    }


   /*Update Information edit in edit page Route Here*/

    public function update_info_controller(Request $request,$employ){
    	$data=array();
    	$data['name']=$request->name;
    	$data['position']=$request->position;
        $data['salary']=$request->salary;
        DB::table('employee')
           ->where('employee_id',$employ)
           ->update($data);

           Session::put('message_update','Update Successfully');
           return Redirect::to('/information');

    }
}
