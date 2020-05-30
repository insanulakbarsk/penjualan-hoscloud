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

Route::get('/', function(){
return view('auth.login');
});

Auth::routes();

Route::match(["GET", "POST"], "/register", function(){
return redirect("/login");
})->name("register");

Route::get('/home', 'HomeController@index')->name('home');


Route::resource("home", "HomeController");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource("users", "UserController");

Route::get('/categories/trash', 'CategoryController@trash')->name('categories.trash');

Route::get('/categories/{id}/restore', 'CategoryController@restore')->name('categories.restore');

Route::get('/ajax/categories/search', 'CategoryController@ajaxSearch');

Route::resource('categories', 'CategoryController');

Route::get('/tools/trash', 'ToolsController@trash')->name('tools.trash');

Route::post('/tools/{tools}/restore', 'ToolsController@restore')->name('tools.restore');

Route::resource('tools', 'ToolsController');
