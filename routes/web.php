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


Route::get('say/{name?}',['as'=>'hello.index',function($name='Everybody'){
    return'Hello,'.$name;
}]);

Route::get('dashboard',function(){
    return'dashboard';
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',function(){
        return'admindashboard';
    });
});
Route::get('/',['as'=>'home.index','uses'=>
    'HomeController@index']);
