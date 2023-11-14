<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Http\Requests\StoreGaleryRequest;
use App\Http\Requests\UpdateGaleryRequest;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.form.galeri.video.index',[
            
        ]);
    }
    public function index2()
    {
        return view('content.galeri.video.videos', [
            'videos' => Galery::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGaleryRequest $request)
    {
        $thumbnailUrl = "https://img.youtube.com/vi/{$request->url_yt}/maxresdefault.jpg";
        $thumbnailSize = @getimagesize($thumbnailUrl);
        // dd($request->url);

        $validatedData = $request->validate([

            'url_yt' => 'required',
        ]);

        $thumbnailContent = @file_get_contents($thumbnailUrl);

        if ($thumbnailContent !== false) {
            // Thumbnail tersedia
            Galery::create($validatedData);
            return redirect('/dashboard/galeri/video')->with('success', 'Berhasil Menambahkan Daftar Video');
        } else {
            // Thumbnail tidak tersedia atau ada masalah lain
            return redirect('/dashboard/galeri/video/create')->with('success', 'Code Tidak Valid');
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
    public function edit(Galery $galery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGaleryRequest $request, Galery $galery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galery $galery)
    {
        //
    }
}
