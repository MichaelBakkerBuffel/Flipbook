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


// Front-end
Route::get('/', function () {
    return view('blog.index');
});

Route::get('/voeding', [
    'uses' => 'ContentController@index',
]);

Route::get('/valpreventie', [
    'uses' => 'ContentController@index',
]);

Route::get('/mantelcheck', [
    'uses' => 'ContentController@index',
]);

// CRUD Controllers
Route::resource('crud', 'CRUDController');
// Login / Logout / Forgot register (Authentication)
Auth::routes();
// Dashboard Controller
Route::get('/dashboard', 'Backend\HomeController@index');   \
// Backend CRUD
Route::resource('/backend/dashboard', 'Backend\ContentController');
