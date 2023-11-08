<?php

namespace App\Http\Controllers;

use App\Models\Irigasi;
use App\Http\Requests\StoreIrigasiRequest;
use App\Http\Requests\UpdateIrigasiRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class IrigasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.form.infrastruktur.irigasi.index', [
            'irigasis' => Irigasi::latest()->Get(),

        ]);
    }
    public function index2()
    {
        $irigasi = Irigasi::latest()->get();
        // dd($bendungan);
        return view('content.infrastruktur.irigasi.irigasis', [
            'irigasis' => $irigasi,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.form.infrastruktur.irigasi.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIrigasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Irigasi $irigasi,string $slug)
    {
        $irigasi = Irigasi::where('slug', $slug)->first();

        if (!$irigasi) {
            abort(404);
        }

        return view('content.infrastruktur.irigasi.irigasi', [
            'irigasi' => $irigasi,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Irigasi $irigasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIrigasiRequest $request, Irigasi $irigasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Irigasi $irigasi)
    {
        //
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Bendungan::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
