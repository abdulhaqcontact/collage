<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('photo',PhotoController::class);
// Route::get('/users', function (Request $request) {
//     // ...
// });
Route::get('/users',[PhotoController::class,'users']);

Route::post('/user/{id}',[PhotoController::class,'users_id']);

Route::get('/user/{name?}',[PhotoController::class,'users_name']); 

Route::get('/user/{id}/{name}', [PhotoController::class,'users_class']);

Route::post('/category/{category}', [PhotoController::class,'users_category']); 

Route::get('/search/{search}', [PhotoController::class,'users_search']);

Route::get('/user/profile', [PhotoController::class,'users_profile']);
