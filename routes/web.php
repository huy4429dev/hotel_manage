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
        Route::get('/setting', 'Admin\RoomController@setting');
        Route::get('/{id}', 'Admin\RoomController@show');
    });


    /*========================================================
      Quản lý tin tức 
      ========================================================
    */

    Route::prefix('post')->group(function () {
        Route::get('/create', 'Admin\PostController@create');
        Route::post('/create', 'Admin\PostController@save');
        Route::get('/manage', 'Admin\PostController@manage');
        Route::get('/delete/{id}', 'Admin\PostController@delete');
        Route::get('/update/{id}', 'Admin\PostController@update');
        Route::post('/update/{id}', 'Admin\PostController@saveUpdate');
    });


    /*========================================================
      Quản lý phản hồi 
      ========================================================
    */

    Route::prefix('reports')->group(function () {
        Route::get('/', 'Admin\ReportController@index');
        Route::get('/{id}', 'Admin\ReportController@details');
        Route::delete('/{id}', 'Admin\ReportController@delete');
    });
    /*========================================================
      Quản lý nhân viên
      ========================================================
    */
    Route::prefix('staff')->group(function () {
        Route::get('/', 'Admin\StaffController@index');
        Route::get('/create', 'Admin\StaffController@create');
        Route::post('/create', 'Admin\StaffController@postCreate');
        Route::get('/edit/{id}', 'Admin\StaffController@edit');
        Route::post('/edit/{id}', 'Admin\StaffController@postEdit');
        Route::get('delete/{id}', 'Admin\StaffController@delete');
    });
});


