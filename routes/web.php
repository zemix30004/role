<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/barbershop1', function () {
    return view('barbershop1');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/barbers', function () {
    return view('barbers');
});
Route::get('/contact1', function () {
    return view('contact1');
});
Route::get('/elements', function () {
    return view('elements');
});
Route::get('/index1', function () {
    return view('index1');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/barbershop2', function () {
    return view('barbershop2');
});
Route::get('/blog-home', function () {
    return view('blog-home');
});
Route::get('/blog-single', function () {
    return view('blog-single');
});
Route::get('/mail', function () {
    return view('mail');
});
Route::get('/services', function () {
    return view('services');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('contacts', ContactController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
