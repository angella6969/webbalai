<?php

use App\Http\Controllers\BendunganController;
use App\Http\Controllers\BendungController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DaftarInformasiPublikController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmbungController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\InfrastrukturController;
use App\Http\Controllers\IrigasiController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\SitusterkaitController;
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
Route::get('/kalatirta-so', function () {
    return view('kalatirta.index');
});
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

Route::get('/profil/main-map', function () {
    return view('content.mainmap');
});
Route::get('/layanan/ppid-bbws-so/profil', function () {
    return view('content.layanan.profil_ppid');
});
Route::get('/layanan/ppid-bbws-so/prosedur_pelayanan', function () {
    return view('content.layanan.prosedur_pelayanan');
});

// Route::get('/info-public/daftar-informasi-publik', function () {
//     return view('content.daftar_informasi_publik.daftar_informasi');
// });






Route::get('pengumumans', [PengumumanController::class, 'index2']);


Route::get('/profil/struktur-organisasi', [StrukturOrganisasiController::class, 'index']);
Route::get('/profil/visi-misi', [VisiMisiController::class, 'index']);

Route::get('/informasi-publik/infrastruktur/bendungans/{slug}', [BendunganController::class, 'show']);
Route::get('/informasi-publik/infrastruktur/bendungans', [BendunganController::class, 'index2']);


Route::get('/informasi-publik/infrastruktur/bendungs/{slug}', [BendungController::class, 'show']);
Route::get('/informasi-publik/infrastruktur/bendungs', [BendungController::class, 'index2']);

Route::get('/informasi-publik/infrastruktur/embungs/{slug}', [EmbungController::class, 'show']);
Route::get('/informasi-publik/infrastruktur/embungs', [EmbungController::class, 'index2']);


Route::get('/informasi-publik/infrastruktur/irigasis/{slug}', [IrigasiController::class, 'show']);
Route::get('/informasi-publik/infrastruktur/irigasis', [IrigasiController::class, 'index2']);

Route::get('/info-public/daftar-informasi-publik', [DaftarInformasiPublikController::class, 'index']);

Route::get('/media/media-informasi/', [InfografisController::class, 'index2']);
Route::get('/media/media-informasi/{jenis}/{slug}', [InfografisController::class, 'show']);

Route::get('/login', [UserController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);


Route::resource('/', HomeController::class);
// Route::resource('/dashboard', DashboardController::class);
// Route::resource('/beritas/blog', BeritaController::class);
// Route::resource('/artikel', PermohonanController::class);



Route::middleware(['auth'])->group(function () {

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



    Route::get('/dashboard/infrastruktur/bendungans/create', [BendunganController::class, 'create']);
    Route::get('/dashboard/infrastruktur/bendungans/checkSlug', [BendunganController::class, 'checkSlug']);
    Route::post('/dashboard/infrastruktur/bendungans', [BendunganController::class, 'store']);
    Route::get('/dashboard/infrastruktur/bendungans', [BendunganController::class, 'index']);


    Route::get('/dashboard/infrastruktur/bendungs/create', [BendungController::class, 'create']);
    Route::get('/dashboard/infrastruktur/bendungs/checkSlug', [BendungController::class, 'checkSlug']);
    Route::get('/dashboard/infrastruktur/bendungs', [BendungController::class, 'index']);

    Route::resource('/dashboard/pengumuman', PengumumanController::class);



    Route::get('/dashboard/infrastruktur/embungs/checkSlug', [EmbungController::class, 'checkSlug']);
    Route::get('/dashboard/infrastruktur/embungs', [EmbungController::class, 'index']);
    Route::get('/dashboard/infrastruktur/embungs/create', [EmbungController::class, 'create']);




    Route::get('/dashboard/infrastruktur/irigasi/checkSlug', [IrigasiController::class, 'checkSlug']);
    Route::get('/dashboard/infrastruktur/irigasis', [IrigasiController::class, 'index']);
    Route::get('/dashboard/infrastruktur/irigasis/create', [IrigasiController::class, 'create']);





    Route::get('/dashboard/daftar-informasi-publik', [DaftarInformasiPublikController::class, 'index2']);
    Route::get('/dashboard/daftar-informasi-publik/create', [DaftarInformasiPublikController::class, 'create']);
    Route::post('/dashboard/daftar-informasi-publik', [DaftarInformasiPublikController::class, 'store']);




    // Route::get('/dashboard/foto-beranda', [ImageController::class, 'index']);
    // Route::post('/dashboard/foto-beranda', [ImageController::class, 'store']);
    // Route::get('/dashboard/foto-beranda/create', [ImageController::class, 'create']);
    // Route::get('/dashboard/foto-beranda/{id}/edit', [ImageController::class, 'edit']);
    // Route::post('/dashboard/foto-beranda/{id}', [ImageController::class, 'update']);
    // Route::delete('/dashboard/foto-beranda/{id}', [ImageController::class, 'destroy']);

    Route::resource('/dashboard/foto-beranda', ImageController::class)->except(['show']);


    Route::get('/dashboard/situs-terkait/create', [SitusterkaitController::class, 'create']);
    Route::get('/dashboard/situs-terkait', [SitusterkaitController::class, 'index']);
    Route::post('/dashboard/situs-terkait', [SitusterkaitController::class, 'store']);



    // Route::get('/dashboard/media/media-informasi/', [InfografisController::class, 'index']);
    // Route::get('/dashboard/media/media-informasi/{id}/edit', [InfografisController::class, 'edit']);
    // Route::post('/dashboard/media/media-informasi', [InfografisController::class, 'store']);
    // Route::get('/dashboard/media/media-informasi/create', [InfografisController::class, 'create']);

    Route::resource('/dashboard/media/media-informasi/', InfografisController::class)->except(['show']);
});
