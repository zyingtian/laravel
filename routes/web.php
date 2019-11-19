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
    $a = custom_log('test_dir','success','new：'.date('Y-m-d H:i:s'),['time'=>date('Y-m-d H:i:s'),'file'=>__FILE__,'line'=>__LINE__]);
    dd(app_path(),config_path(),storage_path(),$a);
    return view('welcome');
});
