<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermohonanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('content/home');
// });
// Route::get('/v2', function () {
//     return view('content/homev2');
// });



Route::resource('/', HomeController::class);
Route::resource('/dashboard', DashboardController::class);
Route::resource('/berita', BeritaController::class);
Route::resource('/artikel', PermohonanController::class);