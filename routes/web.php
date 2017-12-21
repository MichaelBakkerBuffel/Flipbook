<?php
use App\Category;
use App\Subcategory;
use Illuminate\Support\Facades\Input;

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

Route::get('/category/{category}', [
    'uses' => 'ContentController@category',
    'as' => 'category',
]);

Route::get('/voeding', [
    'uses' => 'ContentController@index',
    'as' => 'blog',
]);

Route::get('/valpreventie', [
    'uses' => 'ContentController@index',
]);

Route::get('/mantelcheck', function () {
    return view('blog.mantelcheck');
});

Route::get('/category/post/{id}', [
    'uses' => 'ContentController@single',
]);

// CRUD Controllers
Route::resource('crud', 'CRUDController');
// Login / Logout / Forgot register (Authentication)
Auth::routes();
// Dashboard Controller
Route::get('/dashboard', 'Backend\HomeController@index');   
// Backend CRUD articles
Route::resource('/overview', 'Backend\ContentController');
// Backend categories
Route::resource('/categories', 'Backend\CategoriesController');





