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
/*
Route::get('/', function () {
    return view('front');
});
*/

Route::get('/', 'PageController@index');
/*
Route::get('/donate', function() {
    return view('donate');
});
*/
Route::patch('/share', 'PageController@update');
//Route::patch('/share', )
//Route::resource('mood', 'MoodController');
