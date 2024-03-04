<?php

use App\Http\Controllers\BendunganController;
use App\Http\Controllers\BendungController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DaftarInformasiPublikController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EmbungController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\InfrastrukturController;
use App\Http\Controllers\IrigasiController;
use App\Http\Controllers\Kalatirta_pengaduan;
use App\Http\Controllers\Kalatirta_pengaduanController;
use App\Http\Controllers\KalatirtaController;
use App\Http\Controllers\KalatirtaPengaduanController;
use App\Http\Controllers\LakipController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\RencanaStrategisController;
use App\Http\Controllers\RpsdaController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\SitusterkaitController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisiMisiController;
use App\Models\Bendungan;
use App\Models\Berita;
use App\Models\Dashboard;
use App\Models\Image;
use App\Models\Kalatirta_pengaduan as ModelsKalatirta_pengaduan;
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


Route::get('v2', function () {
    return view('content.kalatirta.survey');
});
Route::get('under-Maintenance', function () {
    return view('content.Construction');
});
Route::get('profil/kontak', function () {
    return view('content.kontak');
})->name('kontak');
Route::get('profil/fungsi-dan-tugas', function () {
    return view('content.tugas_dan_fungsi');
})->name('fungsi-dan-tugas');

Route::get('profil/main-map', function () {
    return view('content.mainmap');
});
Route::get('layanan/ppid-bbws-so/profil', function () {
    return view('content.layanan.profil_ppid');
})->name('profil.ppid');

Route::get('layanan/ppid-bbws-so/prosedur_pelayanan', function () {
    return view('content.layanan.prosedur_pelayanan');
})->name('prosedur_pelayanan.ppid');





Route::middleware(['throttle:150,1', 'throttle:10000,1,global'])->group(function () {

    //====================================== Route Kalatirta  ======================================\\

    Route::get('kalatirta-so', [KalatirtaController::class, 'index2'])->name('kalatirta');
    Route::get('kalatirta-so/permohonan-data', [KalatirtaController::class, 'show1'])->name('kalatirta.status');
    Route::get('kalatirta-so/form-permohonan-data', [KalatirtaController::class, 'create'])->name('kalatirta.create');
    Route::post('kalatirta-so/form-permohonan-data', [KalatirtaController::class, 'store'])->name('kalatirta.store');


    Route::get('kalatirta-so/form-keberatan', [KalatirtaController::class, 'formKeberatan'])->name('kalatirta.formKeberatan');
    Route::post('kalatirta-so/form-keberatan', [KalatirtaController::class, 'formKeberatan_search'])->name('kalatirta.formKeberatan_search');
    Route::post('kalatirta-so/form-data-keberatan', [KalatirtaController::class, 'formDataKeberatan'])->name('kalatirta.formDataKeberatan');
    Route::get('kalatirta-so/form-data-keberatan/list', [KalatirtaController::class, 'formDataKeberatanlist'])->name('kalatirta.formDataKeberatanlist');

    Route::get('kalatirta-so/portal', [KalatirtaController::class, 'showPortal'])->name('kalatirta.showPortal');
    Route::get('kalatirta-so/form-permohonan-data/survey', [KalatirtaController::class, 'create1'])->name('survey');
    Route::post('kalatirta-so/form-permohonan-data/survey', [KalatirtaController::class, 'store1'])->name('kalatirta.store1');

    //=====================================================================================================\\




    //====================================== Route profil  ======================================\\

    Route::get('profil/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('struktur-organisasi');
    Route::get('profil/visi-misi', [VisiMisiController::class, 'index'])->name('visi-misi');
    Route::get('profil/sejarah', [SejarahController::class, 'show'])->name('sejarah');

    //=====================================================================================================\\





    //====================================== Route informasi publik  ======================================\\

    Route::get('informasi-publik/perencanaan/rencana-strategis', [RencanaStrategisController::class, 'index2'])->name('rencana-strategis');
    Route::get('informasi-publik/perencanaan/pola-ws-dan-rpsda', [RpsdaController::class, 'index2'])->name('pola-ws-dan-rpsda');
    Route::get('informasi-publik/kinerja/lakip', [LakipController::class, 'index2'])->name('lakip');

    //=====================================================================================================\\





    //====================================== Route Infrastruktur  ======================================\\

    //================================== Route Infrastruktur bendungs  ==================================\\
    Route::get('informasi-publik/infrastruktur/bendungs/{slug}', [BendungController::class, 'show'])->name('bendungs.show');
    Route::get('informasi-publik/infrastruktur/bendungs', [BendungController::class, 'index2'])->name('bendungs');

    //================================== Route Infrastruktur bendungans  ==================================\\
    Route::get('informasi-publik/infrastruktur/bendungans/{slug}', [BendunganController::class, 'show'])->name('bendungans.show');
    Route::get('informasi-publik/infrastruktur/bendungans', [BendunganController::class, 'index2'])->name('bendungans');

    //================================== Route Infrastruktur embungs  ==================================\\
    Route::get('informasi-publik/infrastruktur/embungs/{slug}', [EmbungController::class, 'show'])->name('embungs.show');
    Route::get('informasi-publik/infrastruktur/embungs', [EmbungController::class, 'index2'])->name('embungs');

    //================================== Route Infrastruktur irigasis  ==================================\\
    Route::get('informasi-publik/infrastruktur/irigasis/{slug}', [IrigasiController::class, 'show'])->name('irigasis.show');
    Route::get('informasi-publik/infrastruktur/irigasis', [IrigasiController::class, 'index2'])->name('irigasis');

    //================================== Route Infrastruktur All  ==================================\\
    Route::get('informasi-publik/infrastruktur', [HomeController::class, 'all_data_infrastruktur'])->name('all_data_infrastruktur');



    //=====================================================================================================\\






    Route::get('informasi-publik/daftar-informasi-publik', [DaftarInformasiPublikController::class, 'index2'])->name('daftar-informasi-publik');



    Route::get('media/media-informasi/', [InfografisController::class, 'index2'])->name('media-informasi');
    Route::get('media/media-informasi/{jenis}/{slug}', [InfografisController::class, 'show'])->name('media-informasi.jenis.slug');
    Route::get('media/media-informasi/{jenis}', [InfografisController::class, 'showJenis'])->name('media-informasi.jenis');




    Route::get('media/galeri/videos', [GaleryController::class, 'index2'])->name('videos');
    Route::get('media/galeri/video/{slug}', [GaleryController::class, 'index3'])->name('video');

    Route::get('media/galeri/fotos', [FotoController::class, 'shows'])->name('foto.shows');
    Route::get('media/galeri/foto/{slug}', [FotoController::class, 'show'])->name('foto.show');







    Route::get('login', [UserController::class, 'index'])->middleware('guest')->name('login');
    Route::post('login', [UserController::class, 'authenticate'])->name('login.post');
    Route::post('logout', [UserController::class, 'logout'])->name('logout');


    // Route::resource('', HomeController::class);
    Route::get('all-data', [HomeController::class, 'all_data'])->name('all_data');
    Route::get('/', [HomeController::class, 'index'])->name('home');


    //=========================================== Route beritas  ===========================================\\

    Route::get('beritas', [BeritaController::class, 'index2'])->name('beritas');
    Route::get('beritas/{slug}', [BeritaController::class, 'show'])->name('beritas.slug');;

    //=====================================================================================================\\



    //======================================== Route pengumumans  ========================================\\

    Route::get('pengumumans', [PengumumanController::class, 'index2'])->name('pengumuman');

    //=====================================================================================================\\

    Route::get('email', [EmailController::class, 'index']);



    //================================== Route Admin  ==================================\\

    Route::middleware(['auth'])->group(function () {

        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        //================================== Route checkSlug all  ==================================\\

        Route::get('dashboard/beritas/checkSlug', [BeritaController::class, 'checkSlug'])->name('beritas.checkSlug');
        Route::get('dashboard/infrastruktur/bendungans/checkSlug', [BendunganController::class, 'checkSlug'])->name('bendungans.checkSlug');
        Route::get('dashboard/infrastruktur/bendungs/checkSlug', [BendungController::class, 'checkSlug'])->name('bendungs.checkSlug');
        Route::get('dashboard/infrastruktur/irigasi/checkSlug', [IrigasiController::class, 'checkSlug'])->name('irigasi.checkSlug');
        Route::get('dashboard/infrastruktur/embungs/checkSlug', [EmbungController::class, 'checkSlug'])->name('embungs.checkSlug');
        Route::get('dashboard/media/media-informasi/checkSlug', [InfografisController::class, 'checkSlug'])->name('media-informasi.checkSlug');
        Route::get('dashboard/media/galeri/videos/checkSlug', [GaleryController::class, 'checkSlug'])->name('videos.checkSlug');
        Route::get('dashboard/media/galeri/fotos/checkSlug', [GaleryController::class, 'checkSlug'])->name('fotos.checkSlug');

        //=====================================================================================================\\




        //================================== Route all Admin  ==================================\\

        Route::resource('dashboard/media/media-informasi', InfografisController::class)->except(['show'])->names([
            'index' => 'media-informasi.index',
            'create' => 'media-informasi.create',
            'store' => 'media-informasi.store',
            'edit' => 'media-informasi.edit',
            'update' => 'media-informasi.update',
            'destroy' => 'media-informasi.destroy',
        ]);

        //=====================================================================================================\\




        //================================== Route Admin SISDA ==================================\\
        Route::middleware(['AdminSisda'])->group(function () {
            Route::resource('dashboard/infrastruktur/embungs', EmbungController::class)->except(['show'])->names([
                'index' => 'embungs.index',
                'create' => 'embungs.create',
                'store' => 'embungs.store',
                'edit' => 'embungs.edit',
                'update' => 'embungs.update',
                'destroy' => 'embungs.destroy',
            ]);
            Route::resource('dashboard/situs-terkait', SitusterkaitController::class)->except(['show'])->names([
                'index' => 'situs-terkait.index',
                'create' => 'situs-terkait.create',
                'store' => 'situs-terkait.store',
                'edit' => 'situs-terkait.edit',
                'update' => 'situs-terkait.update',
                'destroy' => 'situs-terkait.destroy',
            ]);
            Route::resource('dashboard/infrastruktur/bendungs', BendungController::class)->except(['show'])->names([
                'index' => 'bendungs.index',
                'create' => 'bendungs.create',
                'store' => 'bendungs.store',
                'edit' => 'bendungs.edit',
                'update' => 'bendungs.update',
                'destroy' => 'bendungs.destroy',
            ]);
            Route::resource('dashboard/infrastruktur/bendungans', BendunganController::class)->except(['show'])->names([
                'index' => 'bendungans.index',
                'create' => 'bendungans.create',
                'store' => 'bendungans.store',
                'edit' => 'bendungans.edit',
                'update' => 'bendungans.update',
                'destroy' => 'bendungans.destroy',
            ]);
            Route::resource('dashboard/infrastruktur/irigasis', IrigasiController::class)->except(['show'])->names([
                'index' => 'irigasis.index',
                'create' => 'irigasis.create',
                'store' => 'irigasis.store',
                'edit' => 'irigasis.edit',
                'update' => 'irigasis.update',
                'destroy' => 'irigasis.destroy',
            ]);
            Route::resource('dashboard/galeri/video', GaleryController::class)->except(['show'])->names([
                'index' => 'video.index',
                'create' => 'video.create',
                'store' => 'video.store',
                'edit' => 'video.edit',
                'update' => 'video.update',
                'destroy' => 'video.destroy',
            ]);
        });

        //=====================================================================================================\\




        //================================== Route Admin PPID ==================================\\

        Route::middleware(['Admin'])->group(function () {
            Route::resource('dashboard/foto-beranda', ImageController::class)->except(['show'])->names([
                'index' => 'foto-beranda.index',
                'create' => 'foto-beranda.create',
                'store' => 'foto-beranda.store',
                'edit' => 'foto-beranda.edit',
                'update' => 'foto-beranda.update',
                'destroy' => 'foto-beranda.destroy',
            ]);
            Route::resource('dashboard/daftar-informasi-publik', DaftarInformasiPublikController::class)->except(['show'])->names([
                'index' => 'daftar-informasi-publik.index',
                'create' => 'daftar-informasi-publik.create',
                'store' => 'daftar-informasi-publik.store',
                'edit' => 'daftar-informasi-publik.edit', 
                'update' => 'daftar-informasi-publik.update',
                'destroy' => 'daftar-informasi-publik.destroy',
            ]);
            Route::resource('dashboard/beritas', BeritaController::class)->except(['show'])->names([
                'index' => 'beritas.index',
                'create' => 'beritas.create',
                'store' => 'beritas.store',
                'edit' => 'beritas.edit',
                'update' => 'beritas.update',
                'destroy' => 'beritas.destroy',
            ]);
            Route::resource('dashboard/pengumuman', PengumumanController::class)->names([
                'index' => 'pengumuman.index',
                'create' => 'pengumuman.create',
                'store' => 'pengumuman.store',
                'edit' => 'pengumuman.edit',
                'update' => 'pengumuman.update',
                'destroy' => 'pengumuman.destroy',
            ]);
            Route::resource('dashboard/perencanaan/pola-ws-dan-rpsda', RpsdaController::class)->except(['show'])->names([
                'index' => 'pola-ws-dan-rpsda.index',
                'create' => 'pola-ws-dan-rpsda.create',
                'store' => 'pola-ws-dan-rpsda.store',
                'edit' => 'pola-ws-dan-rpsda.edit',
                'update' => 'pola-ws-dan-rpsda.update',
                'destroy' => 'pola-ws-dan-rpsda.destroy',
            ]);
            Route::resource('dashboard/perencanaan/rencana-strategis', RencanaStrategisController::class)->except(['show'])->names([
                'index' => 'rencana-strategis.index',
                'create' => 'rencana-strategis.create',
                'store' => 'rencana-strategis.store',
                'edit' => 'rencana-strategis.edit',
                'update' => 'rencana-strategis.update',
                'destroy' => 'rencana-strategis.destroy',
            ]);
            Route::resource('dashboard/kinerja/lakip', LakipController::class)->except(['show'])->names([
                'index' => 'lakip.index',
                'create' => 'lakip.create',
                'store' => 'lakip.store',
                'edit' => 'lakip.edit',
                'update' => 'lakip.update',
                'destroy' => 'lakip.destroy',
            ]);
            Route::resource('dashboard/kalatirta-so', KalatirtaController::class)->except(['create', 'store'])->names([
                'index' => 'kalatirta-so.index',
                'create' => 'kalatirta-so.create',
                'store' => 'kalatirta-so.store',
                'edit' => 'kalatirta-so.edit',
                'show' => 'kalatirta-so.show',
                'update' => 'kalatirta-so.update',
                'destroy' => 'kalatirta-so.destroy',
            ]);
            Route::resource('dashboard/kalatirta/keberatan', KalatirtaPengaduanController::class)->except(['create', 'store'])->names([
                'index' => 'keberatan.index',
                'create' => 'keberatan.create',
                'store' => 'keberatan.store',
                'edit' => 'keberatan.edit',
                'show' => 'keberatan.show',
                'update' => 'keberatan.update',
                'destroy' => 'keberatan.destroy',
            ]);
            Route::resource('dashboard/profil/sejarah', SejarahController::class)->except(['show'])->names([
                'index' => 'sejarah.index',
                'create' => 'sejarah.create',
                'store' => 'sejarah.store',
                'edit' => 'sejarah.edit',
                'update' => 'sejarah.update',
                'destroy' => 'sejarah.destroy',
            ]);
            Route::resource('dashboard/galeri/foto', FotoController::class)->except(['show'])->names([
                'index' => 'foto.index',
                'create' => 'foto.create',
                'store' => 'foto.store',
                'edit' => 'foto.edit',
                'update' => 'foto.update',
                'destroy' => 'foto.destroy',
            ]);
        });

        //=====================================================================================================\\

    });
});
