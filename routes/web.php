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
Route::group(['middleware' => ['web']], function () {
  Route::get('begin', function (){
    session()->flash('flash_message', 'Here is my status');

    // Session::flash('status', 'Hello there.');
    return Redirect::to('/');
  });
  Route::get('/', function () {
      
      return view('welcome');
  });
});