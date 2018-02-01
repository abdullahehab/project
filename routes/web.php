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
    return view('wel');
});

#------------------------
#                       #
#      admin routes     #
#                       #
#------------------------
Route::group(['middleware' => ['web','admin']], function(){

    #user
    Route::get('/adminPanel' ,'AdminController@index');
    Route::resource('/adminPanel/users','UserController');
    Route::post('/adminPanel/users/changePassword/', 'UserController@changePassword');
    Route::get('/adminPanel/users/{id}/delete' ,'UserController@destroy');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
