<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('checking','App\Http\Controllers\PoosarifamilytreeController@checking');

Route::get('mail','App\Http\Controllers\PoosarifamilytreeController@mail');

Route::post('addAdminrole','App\Http\Controllers\RoleController@addData');


  // Gallery 
Route::post('addGallery','App\Http\Controllers\GalleryController@create');
Route::get('showGallery','App\Http\Controllers\GalleryController@show');
Route::post('editGallery','App\Http\Controllers\GalleryController@update');
Route::get('galleryValue','App\Http\Controllers\GalleryController@check');
Route::delete('deleteGallery','App\Http\Controllers\GalleryController@destroy');
  