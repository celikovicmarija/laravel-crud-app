<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Models\Post;
use App\Models\Contact;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
/*
Route::prefix('')->group(function(){
    Route::resource('posts', PostController::class);
    Route::resource('contacts', ContactController::class);

});*//*
Route::get('posts', function (Request $request) {
    return $request->post();
});*/

//('posts/{id}','App\Http\Controllers\PostController@show');
/*
Route::get('posts', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Post::all();
});
Route::get('posts/{id}', function(Post $post) {
    return Post::find($id);
});
Route::get('posts','App\Http\Controllers\PostController@index');
Route::get('contacts','App\Http\Controllers\ContactController@index');
*/
/*
Route::get('contacts', function() {
    return Contact::all();
});*/
//Route::get('posts/{id}','App\Http\Controllers\PostController@show');