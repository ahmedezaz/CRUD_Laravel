<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Welcome Page Route Here*/
Route::get('/welcome','pagerouting@welcome_page');

/*Insert Page Route Here*/
Route::get('/insert','pagerouting@insert_page');

/*All_information Page Route Here*/
Route::get('/information','pagerouting@all_information_page');


/*insert_information form action Route Here*/
Route::post('/add_info','data_add@add_info_controller');

/*Read All Information in information page Route Here*/
Route::get('/information','all_information@read_all_controller');

/*Delete Information in information page Route Here*/
Route::get('/delete_info/{employee_id}','delete_info@delete_info_controller');

/*Update Information in edit page Route Here*/
Route::get('/edit_info/{employee_id}','update_info@edit_info_controller');

/*Update Information edit in edit page Route Here*/
Route::post('/edit/{employee_id}','update_info@update_info_controller');
