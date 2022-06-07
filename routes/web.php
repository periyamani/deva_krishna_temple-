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
use App\Mail\MailPage;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


Route::get('/mailpage', function () {
    return view('mailpage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/index', function () {
    return view('index');
})->middleware('auth');

Route::get('/gallery_page', function () {
    return view('gallery');
})->middleware('auth');

Route::get('/category', function () {
    return view('category');
})->middleware('auth');
Route::get('/event', function () {
    return view('events');
})->middleware('auth');


Route::get('/', function () {
    return view('frontend_view.home');
});

Route::get('/frontend_view.home', function () {
    return view('frontend_view.home');
});

Route::get('/gallerylist', function () {
    return view('frontend_view.gallery');
});