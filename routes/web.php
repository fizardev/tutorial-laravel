<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', 'HomeController@index' );
Route::get('/posts/add-post', 'PostController@create');
Route::post('/posts/store', 'PostController@store');
Route::get('/posts/{post:slug}', 'PostController@show' );
Route::get('/posts', 'PostController@index' );
Route::view('/about', 'about');
Route::view('/contact', 'contact');
