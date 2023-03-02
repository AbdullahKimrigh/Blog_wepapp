<?php

use App\Http\Controllers\profileController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/profile', [profileController::class, 'index']);
Route::get('/profile/edit', [profileController::class, 'edit']);
Route::post('/profile', [profileController::class, 'store']);

Route::get('/blog', [blogController::class, 'index']);
Route::get('/blog/edit', [blogController::class, 'edit']);
Route::post('/blog', [blogController::class, 'store']);

Route::get('/blog/{blog}', [blogController::class, 'index']);
