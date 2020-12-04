<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test',function(){
	echo "test done krish";
});

Route::get('/test1/{username}/{phone?}',function($username,$phone=0){
	echo $username."&&".$phone;
})->where(['phone'=>'[0-9]+']);

Route::get('user/{name}', function($name){
    echo $name;
})->where('name', '[A-Za-z]+');
 

