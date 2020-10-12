<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagerouting extends Controller
{
    /*Insert Page routing controller here*/

    public function insert_page(){
    	return view('insert');
    }

    /*welcome Page routing controller here*/

    public function welcome_page(){
    	return view('welcome');
    }

    /*All_information Page routing controller here*/

    public function all_information_page(){
    	return view('information');
    }
}
