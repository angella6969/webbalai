<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Http\Requests\StoreGaleryRequest;
use App\Http\Requests\UpdateGaleryRequest;
use Illuminate\Support\Facades\DB;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;



class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.form.galeri.video.index', [
            'videos' => Galery::latest()->get()

        ]);
    }
    public function index2()
    {
        return view('content.galeri.video.videos', [
            'videos' => Galery::latest()->get()
        ]);
    }
    public function index3($slug)
    {
        $search = Galery::where('slug', $slug)->get();
        // dd($search);
        return view('content.galeri.video.video', [
            'video' =>  $search
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.form.galeri.video.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGaleryRequest $request)
    {
        $thumbnailUrl = "https://img.youtube.com/vi/{$request->url_yt}/maxresdefault.jpg";
        $thumbnailSize = @getimagesize($thumbnailUrl);


        $validatedData = $request->validate([
            'url_yt' => ['required'],
            'slug' => ['required'],
            'nama' => ['required', 'regex:/^[^\'"]/'],
        ]);
        // dd(  $validatedData);
        $thumbnailContent = @file_get_contents($thumbnailUrl);
        DB::beginTransaction();
        try {
            if ($thumbnailContent !== false) {
                // Thumbnail tersedia
                Galery::create($validatedData);
                DB::commit();
                return redirect('/dashboard/galeri/video')->with('success', 'Berhasil Menambahkan Daftar Video');
            } else {
                // Thumbnail tidak tersedia atau ada masalah lain
                return redirect('/dashboard/galeri/video/create')->with('fail', 'Code Tidak Valid');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.form.galeri.video.edit', [
            'video' => Galery::findOrfail($id)

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGaleryRequest $request, string $id)
    {
        $video = Galery::findOrFail($id);
        $validatedData = $request->validate([
            "nama" => ['required'],
            'slug' => ['required'],
            'url_pdf' => ['file', 'max:15120', 'mimetypes:application/pdf', 'nullable'],
        ]);

        DB::beginTransaction();
        try {
            Galery::where('id', $id)->update($validatedData);
            DB::commit();
            return redirect('/dashboard/galeri/video')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $video = Galery::findOrFail($id);
        try {
            $video->delete();
            return redirect()->back()->with('success', 'Berhasil Menghapus Data');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Galery::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
