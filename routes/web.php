<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostAjaxController;
use App\Http\Controllers\PhotoController;
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
Route::resource('manage_exam',PostAjaxController::class);
//Route::resource('/photo',PhotoController::class);
//Route::post('/photo',[PhotoController::class,'store']);
//   Route::post('/add_new_students',[AdminController::class,'add_new_students']);