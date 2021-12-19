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

Route::get(' / ', "App\Http\Controllers\PostsController@AllPost");
Route::get('/insert_contact', "App\Http\Controllers\PostsController@create");
Route::post('/insert_contact', "App\Http\Controllers\PostsController@store");
// Route::get('/insert_phone_number/{id}', "App\Http\Controllers\PostsController@Add_number");
Route::get("/{id}/edit","App\Http\Controllers\PostsController@edit");
Route::put("/{id}/edit","App\Http\Controllers\PostsController@update");
Route::get("/{delete_contact}/delete","App\Http\Controllers\PostsController@delete");


