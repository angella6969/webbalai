<?php

use App\Http\Controllers\BendunganController;
use App\Http\Controllers\BendungController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmbungController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\InfrastrukturController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\VisiMisiController;
use App\Models\Bendungan;
use App\Models\Berita;
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
Route::get('/under-construction', function () {
    return view('content.Construction');
});



Route::resource('/', HomeController::class);
// Route::resource('/dashboard', DashboardController::class);
// Route::resource('/beritas/blog', BeritaController::class);
Route::resource('/artikel', PermohonanController::class);

Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/dashboard/pengumuman/create', [PengumumanController::class, 'create']);
// Route::post('/dashboard/pengumuman', [PengumumanController::class, 'store']);

Route::get('/beritas', [BeritaController::class, 'index']);
Route::get('/beritas/{slug}', [BeritaController::class, 'show']);

Route::get('/dashboard/beritas/index', [BeritaController::class, 'index2']);
Route::get('/dashboard/beritas/create', [BeritaController::class, 'create']);
Route::post('/dashboard/beritas/store', [BeritaController::class, 'store']);
Route::get('/dashboard/beritas/{id}/edit', [BeritaController::class, 'edit']);
Route::post('/dashboard/beritas/{id}', [BeritaController::class, 'update']);

Route::get('/dashboard/beritas/checkSlug', [BeritaController::class, 'checkSlug']);



Route::get('/dashboard/infrastruktur/index', [InfrastrukturController::class, 'index']);
Route::get('/dashboard/infrastruktur/create', [InfrastrukturController::class, 'create']);

Route::get('/dashboard/gambar-depan', [ImageController::class, 'index']);



Route::resource('/dashboard/pengumuman', PengumumanController::class);
Route::get('pengumumans', [PengumumanController::class, 'index2']);

// Route::resource('/dashboard/pengumuman', Berita::class);

// Route::get('/dashboard/pengumuman/create', [PengumumanController::class, 'create']);
// Route::post('/dashboard/pengumuman', [PengumumanController::class, 'store']);
// Route::get('/dashboard/pengumuman/edit/{id}', [PengumumanController::class, 'edit']);




Route::get('/profil/struktur-organisasi', [StrukturOrganisasiController::class, 'index']);
Route::get('/profil/visi-misi', [VisiMisiController::class, 'index']);


Route::get('/informasi-publik/infrastruk/turbendungans/{slug}', [BendunganController::class, 'show']);
Route::get('/informasi-publik/infrastruktur/bendungans', [BendunganController::class, 'index2']);

Route::get('/dashboard/infrastruktur/bendungans/create', [BendunganController::class, 'create']);
Route::get('/dashboard/infrastruktur/bendungans/checkSlug', [BendunganController::class, 'checkSlug']);
Route::post('/dashboard/infrastruktur/bendungans', [BendunganController::class, 'store']);
Route::get('/dashboard/infrastruktur/bendungans', [BendunganController::class, 'index']);




Route::get('/informasi-publik/infrastruktur/bendungs', [BendungController::class, 'index2']);




Route::get('/informasi-publik/infrastruktur/embungs', [EmbungController::class, 'index2']);
