<?php

namespace App\Http\Controllers;

use App\Models\Struktur_organisasi;
use App\Http\Requests\StoreStruktur_organisasiRequest;
use App\Http\Requests\UpdateStruktur_organisasiRequest;

class StrukturOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('content.struktur_organisasi',[]);
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
    public function store(StoreStruktur_organisasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Struktur_organisasi $struktur_organisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Struktur_organisasi $struktur_organisasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStruktur_organisasiRequest $request, Struktur_organisasi $struktur_organisasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Struktur_organisasi $struktur_organisasi)
    {
        //
    }
}
