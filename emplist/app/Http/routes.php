<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
  //  return view('welcome');


Route::get('/id','HomeController@Index');
Route::get('/hi','HomeController@Hello');
Route ::get('/se','HomeController@Second');
Route ::get('/he','CustomController@Hello');
Route ::get('/say/{name?}','CustomController@sayName');
Route ::get('fi','CustomController@First');

//Route::get('/list','CustomController@ListStudent');
//Route::get('/ins','CustomController@insertStudent');

Route::get('emp/list','CustomController@listEmployee');
Route::get('emp/ins','CustomController@insertEmployee');

Route::get('emp/insert','CustomController@doInsert');
Route::get('emp/insert1','CustomController@insert1');

//Route :: post('/store','CustomController@store');


//Route::post('/doInsert','CustomController@handleInsert');
Route ::get('emp/{id}/delete','CustomController@doDelete');

Route::get('emp/{id}/edit','CustomController@doEdit');
Route::get('emp/edit1','CustomController@edit1');

