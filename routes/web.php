<?php

use App\Http\Controllers\BendunganController;
use App\Http\Controllers\BendungController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DaftarInformasiPublikController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmbungController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\InfrastrukturController;
use App\Http\Controllers\IrigasiController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisiMisiController;
use App\Models\Bendungan;
use App\Models\Berita;
use App\Models\Dashboard;
use App\Models\Image;
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
Route::get('/under-Maintenance', function () { 
    return view('content.Construction');
});
Route::get('/profil/kontak', function () {
    return view('content.kontak');
});
Route::get('/profil/fungsi-dan-tugas', function () {
    return view('content.tugas_dan_fungsi');
});

// Route::get('/info-public/daftar-informasi-publik', function () {
//     return view('content.daftar_informasi_publik.daftar_informasi');
// });


Route::get('/login', [UserController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);


Route::resource('/', HomeController::class);
// Route::resource('/dashboard', DashboardController::class);
// Route::resource('/beritas/blog', BeritaController::class);
// Route::resource('/artikel', PermohonanController::class);

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





Route::get('/profil/struktur-organisasi', [StrukturOrganisasiController::class, 'index']);
Route::get('/profil/visi-misi', [VisiMisiController::class, 'index']);






Route::get('/informasi-publik/infrastruk/bendungans/{slug}', [BendunganController::class, 'show']);
Route::get('/informasi-publik/infrastruktur/bendungans', [BendunganController::class, 'index2']);


Route::get('/dashboard/infrastruktur/bendungans/create', [BendunganController::class, 'create']);
Route::get('/dashboard/infrastruktur/bendungans/checkSlug', [BendunganController::class, 'checkSlug']);
Route::post('/dashboard/infrastruktur/bendungans', [BendunganController::class, 'store']);
Route::get('/dashboard/infrastruktur/bendungans', [BendunganController::class, 'index']);







Route::get('/informasi-publik/infrastruktur/bendungs/{slug}', [BendungController::class, 'show']);
Route::get('/informasi-publik/infrastruktur/bendungs', [BendungController::class, 'index2']);


Route::get('/dashboard/infrastruktur/bendungs/create', [BendungController::class, 'create']);
Route::get('/dashboard/infrastruktur/bendungs/checkSlug', [BendungController::class, 'checkSlug']);
Route::get('/dashboard/infrastruktur/bendungs', [BendungController::class, 'index']);










Route::get('/informasi-publik/infrastruktur/embungs/{slug}', [EmbungController::class, 'show']);
Route::get('/informasi-publik/infrastruktur/embungs', [EmbungController::class, 'index2']);


Route::get('/dashboard/infrastruktur/embungs/checkSlug', [EmbungController::class, 'checkSlug']);
Route::get('/dashboard/infrastruktur/embungs', [EmbungController::class, 'index']);
Route::get('/dashboard/infrastruktur/embungs/create', [EmbungController::class, 'create']);









Route::get('/informasi-publik/infrastruktur/irigasis/{slug}', [IrigasiController::class, 'show']);
Route::get('/informasi-publik/infrastruktur/irigasis', [IrigasiController::class, 'index2']);


Route::get('/dashboard/infrastruktur/irigasi/checkSlug', [IrigasiController::class, 'checkSlug']);
Route::get('/dashboard/infrastruktur/irigasis', [IrigasiController::class, 'index']);
Route::get('/dashboard/infrastruktur/irigasis/create', [IrigasiController::class, 'create']);








Route::get('/info-public/daftar-informasi-publik', [DaftarInformasiPublikController::class, 'index']);


Route::get('/dashboard/daftar-informasi-publik', [DaftarInformasiPublikController::class, 'index2']);
Route::get('/dashboard/daftar-informasi-publik/create', [DaftarInformasiPublikController::class, 'create']);
Route::post('/dashboard/daftar-informasi-publik', [DaftarInformasiPublikController::class, 'store']);








Route::post('/dashboard/foto-beranda', [Image::class, 'index']);


