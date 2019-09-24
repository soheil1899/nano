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


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');







Route::prefix('{lang?}')->middleware('Langswitch')->group(function () {

    Route::get('/', 'IndexController@index')->name('index');
//    Route::get('/machine/{id}', 'MachineController@index')->name('machine');
//    Route::get('/aboutus', 'IndexController@aboutus')->name('about.us');
//    Route::get('/contactus', 'IndexController@contactus')->name('contactus');
//    Route::get('/customer', 'IndexController@customer')->name('customer');
//    Route::post('/savemessage', 'IndexController@savemessage')->name('save.message');
//    Route::post('/changelanguage', 'IndexController@changelanguage')->name('change.language');


});





















