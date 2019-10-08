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
Route::get('/user/register' , 'ClientController@getRegister')->name('user-register');
Route::post('/user/register/submit' , 'ClientController@register')->name('user-register-submit');
Route::get('/user/login' , 'ClientController@getLogin')->name('user-login');
Route::post('/user/login' , 'ClientController@login')->name('user-login');
Route::group(['middleware'=>'auth:clients'],function (){
    Route::get('/user/home' , 'ClientController@home')->name('user-home') ;
    Route::get('/user/application/request' , 'ClientController@applicationRequest')->name('application-request');
    Route::post('/user/application/request' , 'ClientController@applicationRequestSubmit')->name('application-request');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('user-logout');
    

}) ;
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::group(['middleware' => 'roles', 'roles' => 'Admin'], function () {
    Route::get('test' , function (){
        return "admin" ;
    });
});
Route::group(['middleware' => 'roles', 'roles' => 'hr'],function (){
   Route::get('/requests' , 'Admin\JobRequestManageController@pendingRequests')->name('pending-requests');
    Route::get('/request/reject/{request_id}' , 'Admin\JobRequestManageController@hrRejectRequest')->name('reject-request') ;
    Route::get('/request/accept/{request_id}' , 'Admin\JobRequestManageController@hrAcceptRequest')->name('hr-accept-request') ;
});