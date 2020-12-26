<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\ContactController;
use App\Models\Post;
use App\Models\Contact;
/*
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\ProductController;
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('')->group(function(){
    Route::resource('posts', 'App\Http\Controllers\API\PostController');
});
Route::prefix('')->group(function(){
    Route::resource('contacts', 'App\Http\Controllers\API\ContactController');
});

/*
Route::get('posts', 'App\Http\Controllers\PostController@index');
Route::get('/posts/{post}', 'App\Http\Controllers\PostController@show');

Route::get('contacts', 'App\Http\Controllers\ContactController@index');
Route::get('/contacts/{contact}', 'App\Http\Controllers\ContactController@show');

Route::delete('/posts/{post}', 'App\Http\Controllers\PostController@destroy');
Route::delete('/contacts/{contact}', 'App\Http\Controllers\ContactController@destroy');

Route::get('/contacts/{contact}/edit', 'App\Http\Controllers\ContactController@edit');
Route::get('/posts/{post}/edit', 'App\Http\Controllers\PostController@edit');

Route::post('/posts', 'App\Http\Controllers\PostController@store');
Route::post('/contacts', 'App\Http\Controllers\ContactController@store');

Route::put('/posts/{post}', 'App\Http\Controllers\PostController@update');
Route::put('/contacts/{contact}', 'App\Http\Controllers\ContactController@update');*/