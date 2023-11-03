<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = Berita::latest()->paginate(5);
        return view('content.berita.britas', [
            'beritas' => $beritas
        ]);
    }
    // public function index2()
    // {
    //     $beritas = Berita::latest()->paginate(5);
    //     return view('content.berita.britas', [
    //         'beritas' => $beritas
    //     ]);
    // }

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
    public function store(StoreBeritaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita, $slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        // dd($berita);
        if (!$berita) {
            // Tambahkan logika jika berita tidak ditemukan
            abort(404); // Contoh: Menampilkan halaman 404
        }

        return view('content.berita.brita', [
            'berita' => $berita
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBeritaRequest $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        //
    }
}
