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

Auth::routes();

Route::get('/plans', 'PlanController@index');
Route::get('/home', 'HomeController@index');

Route::group([
    'prefix' => 'admin',
    'middleware' => [
        'auth',
        'role:admin,access_backend'
    ]
], function () {
    CRUD::resource('permission', '\Backpack\PermissionManager\app\Http\Controllers\PermissionCrudController');
    CRUD::resource('role', '\Backpack\PermissionManager\app\Http\Controllers\RoleCrudController');
    Route::get('dashboard', '\Backpack\base\src\app\Http\Controllers\AdminController@dashboard');
});
