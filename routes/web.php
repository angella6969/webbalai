<?php

use App\Http\Controllers\BendunganController;
use App\Http\Controllers\BendungController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DaftarInformasiPublikController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EmbungController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\InfrastrukturController;
use App\Http\Controllers\IrigasiController;
use App\Http\Controllers\KalatirtaController;
use App\Http\Controllers\LakipController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\RencanaStrategisController;
use App\Http\Controllers\RpsdaController;
use App\Http\Controllers\SitusterkaitController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisiMisiController;
use App\Models\Bendungan;
use App\Models\Berita;
use App\Models\Dashboard;
use App\Models\Image;
use App\Models\Lakip;
use App\Models\Pengajuan_keberatan;
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
// Route::get('/kalatirta-so', function () {
//     return view('kalatirta.index');
// });
Route::get('/v2', function () {
    return view('content.kalatirta.survey');
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





Route::middleware(['throttle:150,1', 'throttle:10000,1,global'])->group(function () {

    //====================================== Route Kalatirta  ======================================\\

    Route::get('/kalatirta-so', [KalatirtaController::class, 'index2'])->name('kalatirta');
    Route::get('/kalatirta-so/permohonan-data', [KalatirtaController::class, 'show1'])->name('kalatirta.status');
    Route::get('/kalatirta-so/form-permohonan-data', [KalatirtaController::class, 'create'])->name('kalatirta.create');
    Route::post('/kalatirta-so/form-permohonan-data', [KalatirtaController::class, 'store'])->name('kalatirta.store');

    Route::get('/kalatirta-so/form-keberatan', [KalatirtaController::class, 'formKeberatan'])->name('kalatirta.formKeberatan');
    Route::post('/kalatirta-so/form-keberatan', [KalatirtaController::class, 'formKeberatan_search'])->name('kalatirta.formKeberatan_search');

    Route::get('/kalatirta-so/portal', [KalatirtaController::class, 'showPortal'])->name('kalatirta.showPortal');
    Route::get('/kalatirta-so/form-permohonan-data/survey', [KalatirtaController::class, 'create1'])->name('survey');
    Route::post('/kalatirta-so/form-permohonan-data/survey', [KalatirtaController::class, 'store1'])->name('kalatirta.store1');

    //=====================================================================================================\\




    //====================================== Route profil  ======================================\\

    Route::get('/profil/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('struktur-organisasi');
    Route::get('/profil/visi-misi', [VisiMisiController::class, 'index'])->name('visi-misi');

    //=====================================================================================================\\








    Route::get('/informasi-publik/perencanaan/rencana-strategis', [RencanaStrategisController::class, 'index2']);
    Route::get('/informasi-publik/perencanaan/pola-ws-dan-rpsda', [RpsdaController::class, 'index2']);
    Route::get('/informasi-publik/kinerja/lakip', [LakipController::class, 'index2']);




    //====================================== Route Infrastruktur  ======================================\\

    //================================== Route Infrastruktur bendungs  ==================================\\
    Route::get('/informasi-publik/infrastruktur/bendungs/{slug}', [BendungController::class, 'show']);
    Route::get('/informasi-publik/infrastruktur/bendungs', [BendungController::class, 'index2']);

    //================================== Route Infrastruktur bendungans  ==================================\\
    Route::get('/informasi-publik/infrastruktur/bendungans/{slug}', [BendunganController::class, 'show'])->name('bendungan');
    Route::get('/informasi-publik/infrastruktur/bendungans', [BendunganController::class, 'index2'])->name('bendung');

    //================================== Route Infrastruktur embungs  ==================================\\
    Route::get('/informasi-publik/infrastruktur/embungs/{slug}', [EmbungController::class, 'show']);
    Route::get('/informasi-publik/infrastruktur/embungs', [EmbungController::class, 'index2']);

    //================================== Route Infrastruktur irigasis  ==================================\\
    Route::get('/informasi-publik/infrastruktur/irigasis/{slug}', [IrigasiController::class, 'show']);
    Route::get('/informasi-publik/infrastruktur/irigasis', [IrigasiController::class, 'index2']);

    //================================== Route Infrastruktur All  ==================================\\
    Route::get('/informasi-publik/infrastruktur', [HomeController::class, 'all_data_infrastruktur'])->name('all_data_infrastruktur');



    //=====================================================================================================\\






    Route::get('/info-public/daftar-informasi-publik', [DaftarInformasiPublikController::class, 'index2'])->name('info.publik');



    Route::get('/media/media-informasi/', [InfografisController::class, 'index2']);
    Route::get('/media/media-informasi/{jenis}/{slug}', [InfografisController::class, 'show']);
    Route::get('/media/media-informasi/{jenis}', [InfografisController::class, 'showJenis']);




    Route::get('/media/galeri/videos', [GaleryController::class, 'index2']);
    Route::get('/media/galeri/video/{slug}', [GaleryController::class, 'index3']);



    Route::get('/login', [UserController::class, 'index'])->middleware('guest')->name('login');
    Route::post('/login', [UserController::class, 'authenticate']);
    Route::post('/logout', [UserController::class, 'logout']);


    Route::resource('/', HomeController::class);
    Route::get('/all-data', [HomeController::class, 'all_data'])->name('all_data');


    //=========================================== Route beritas  ===========================================\\

    Route::get('/beritas', [BeritaController::class, 'index2']);
    Route::get('/beritas/{slug}', [BeritaController::class, 'show']);

    //=====================================================================================================\\



    //======================================== Route pengumumans  ========================================\\

    Route::get('/pengumumans', [PengumumanController::class, 'index2'])->name('pengumuman');

    //=====================================================================================================\\

    Route::get('/email', [EmailController::class, 'index']);



    //================================== Route Admin  ==================================\\

    Route::middleware(['auth'])->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index']);

        //================================== Route checkSlug all  ==================================\\

        Route::get('/dashboard/beritas/checkSlug', [BeritaController::class, 'checkSlug']);
        Route::get('/dashboard/infrastruktur/bendungans/checkSlug', [BendunganController::class, 'checkSlug']);
        Route::get('/dashboard/infrastruktur/bendungs/checkSlug', [BendungController::class, 'checkSlug']);
        Route::get('/dashboard/infrastruktur/irigasi/checkSlug', [IrigasiController::class, 'checkSlug']);
        Route::get('/dashboard/infrastruktur/embungs/checkSlug', [EmbungController::class, 'checkSlug']);
        Route::get('/dashboard/media/media-informasi/checkSlug', [InfografisController::class, 'checkSlug']);
        Route::get('/dashboard/media/galeri/videos/checkSlug', [GaleryController::class, 'checkSlug']);

        //=====================================================================================================\\




        //================================== Route all Admin  ==================================\\

        Route::resource('/dashboard/media/media-informasi', InfografisController::class)->except(['show']);

        //=====================================================================================================\\




        //================================== Route Admin SISDA ==================================\\
        Route::middleware(['AdminSisda'])->group(function () {
            Route::resource('/dashboard/infrastruktur/embungs', EmbungController::class)->except(['show']);
            Route::resource('/dashboard/situs-terkait', SitusterkaitController::class)->except(['show']);
            Route::resource('/dashboard/infrastruktur/bendungs', BendungController::class)->except(['show']);
            Route::resource('/dashboard/infrastruktur/bendungans', BendunganController::class)->except(['show']);
            Route::resource('/dashboard/infrastruktur/irigasis', IrigasiController::class)->except(['show']);
            Route::resource('/dashboard/galeri/video', GaleryController::class)->except(['show']);
        });

        //=====================================================================================================\\




        //================================== Route Admin PPID ==================================\\

        Route::middleware(['Admin'])->group(function () {
            Route::resource('/dashboard/foto-beranda', ImageController::class)->except(['show']);
            Route::resource('/dashboard/daftar-informasi-publik', DaftarInformasiPublikController::class)->except(['show']);
            Route::resource('/dashboard/beritas', BeritaController::class)->except(['show']);
            Route::resource('/dashboard/pengumuman', PengumumanController::class);
            Route::resource('/dashboard/perencanaan/pola-ws-dan-rpsda', RpsdaController::class)->except(['show']);
            Route::resource('/dashboard/perencanaan/rencana-strategis', RencanaStrategisController::class)->except(['show']);
            Route::resource('/dashboard/kinerja/lakip', LakipController::class)->except(['show']);
            Route::resource('/dashboard/kalatirta-so', KalatirtaController::class)->except(['create', 'store']);
            // Route::resource('/dashboard/kalatirta-so/pengajuan-keberatan', Pengajuan_keberatanController::class)->except(['create','store']);
        });

        //=====================================================================================================\\

    });
});
