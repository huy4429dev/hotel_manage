<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Page Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/', function () {
    return view('index');
});






/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
|
*/

Auth::routes();

Route::prefix('admin')->group(function () {


    Route::get('/dashboard', 'Admin\DashboardController@index');
    
    Route::get('/profile', 'Admin\UserController@index');
    Route::post('/profile', 'Admin\UserController@update');

    /*========================================================
      Quản lý phòng
      ========================================================
    */

    Route::prefix('room')->group(function () {
        Route::get('/', 'Admin\RoomController@index');
        Route::get('/map', 'Admin\RoomController@getMap');
        Route::get('/{id}', 'Admin\RoomController@show');
    });

});
