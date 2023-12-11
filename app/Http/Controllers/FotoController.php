<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFotoRequest;
use App\Http\Requests\UpdateFotoRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreFotoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Foto $foto, string $slug)
    {
        // dd('awd');
        $fotos = Foto::where('slug', $slug)->first();
        // dd($fotos);
        return view('content.galeri.foto.foto', [
            'foto' => $fotos
        ]);
    }

    public function shows()
    {
        $fotos = Foto::latest()->get();
        return view('content.galeri.foto.fotos', [
            'fotos' => $fotos
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Foto $foto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFotoRequest $request, Foto $foto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Foto $foto)
    {
        //
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Foto::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
