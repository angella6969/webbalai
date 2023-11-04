<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use App\Models\Berita;
use App\Models\Image;
use App\Models\Infrastruktur;
use App\Models\Logoterkait;
use App\Models\Pengumuman;

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
        $infrastruktur = Infrastruktur::all();
        $logoTerkait = Logoterkait::all();
        // dd($infoData);
        // return view('content.home', [
        return view('content.home', [
            'images' => $image,
            'beritas' => $berita,
            'infoData' => $infoData,
            'infrastrukturs' => $infrastruktur,
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
