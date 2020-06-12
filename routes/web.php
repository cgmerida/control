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

// Auth::routes();
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {

    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::view('admin', 'admin.dashboard.index')->name('admin.dash');

    Route::resource('families', 'FamilyController');

    Route::get('/home', function () {
        return view('families.index');
    });
});
