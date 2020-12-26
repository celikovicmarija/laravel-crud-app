<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Contact;

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
Route::resource('posts','App\Http\Controllers\PostController');
Route::resource('contacts', 'App\Http\Controllers\ContactController');
/*
Route::get('posts', 'App\Http\Controllers\PostController@index');
Route::get('/posts/{id}', 'App\Http\Controllers\PostController@show');
Route::get('/posts/{id}/edit', 'App\Http\Controllers\PostController@edit');

Route::get('contacts', 'App\Http\Controllers\ContactController@index');
Route::get('/contacts/{id}', 'App\Http\Controllers\ContactController@show');
Route::get('/contacts/{id}/edit', 'App\Http\Controllers\ContactController@edit');
//PRVI PARAMETAR 
Route::post('/posts/create', 'App\Http\Controllers\PostController@store');
Route::post('/contacts/create', 'App\Http\Controllers\ContactController@store');

Route::delete('/posts/delete/{id}', 'App\Http\Controllers\PostController@destroy');
Route::delete('/contacts/delete/{id}', 'App\Http\Controllers\ContactController@destroy');

Route::put('/posts/{id}', 'App\Http\Controllers\PostController@update');
Route::put('/contacts/{id}', 'App\Http\Controllers\ContactController@update');*/