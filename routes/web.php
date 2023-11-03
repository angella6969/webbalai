<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PermohonanController;
use App\Models\Dashboard;
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
Route::get('/v2', function () {
    return view('welcome');
});



Route::resource('/', HomeController::class);
Route::resource('/dashboard', DashboardController::class);
Route::resource('/beritas/blog', BeritaController::class);
Route::resource('/artikel', PermohonanController::class);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/beritas', [BeritaController::class, 'index']);
Route::get('/beritas/{slug}', [BeritaController::class, 'show']);



 



Route::get('/pengumuman', [PengumumanController::class, 'index']);
Route::get('/dashboard/pengumuman/create', [PengumumanController::class, 'create']);
Route::post('/dashboard/pengumuman', [PengumumanController::class, 'store']);
Route::get('/dashboard/pengumuman/edit/{id}', [PengumumanController::class, 'edit']);
