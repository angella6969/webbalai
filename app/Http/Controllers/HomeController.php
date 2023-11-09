<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use App\Models\Bendung;
use App\Models\Bendungan;
use App\Models\Berita;
use App\Models\Embung;
use App\Models\Image;
use App\Models\Infrastruktur;
use App\Models\Logoterkait;
use App\Models\Pengumuman;
use App\Models\Situsterkait;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $image = Image::all();
        $berita = Berita::all();
        $infoData = Pengumuman::all();
        // $infrastruktur = Infrastruktur::all();
        $logoTerkait = Situsterkait::all();

        $bendungans = Bendungan::all();
        $embungs = Embung::all();
        $bendungs = Bendung::all();
        $data = $bendungans->merge($embungs)->merge($bendungs);
        return view('content.home', [
            'images' => $image,
            'beritas' => $berita,
            'infoData' => $infoData,
            'infrastrukturs' => $data,
            'logoTerkaits' => $logoTerkait
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
    public function store(StoreHomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeRequest $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
