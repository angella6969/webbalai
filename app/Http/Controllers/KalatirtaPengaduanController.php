<?php

namespace App\Http\Controllers;

use App\Models\Kalatirta_pengaduan;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKalatirta_pengaduanRequest;
use App\Http\Requests\UpdateKalatirta_pengaduanRequest;

class KalatirtaPengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('awd');
        return view('dashboard.form.kalatirta.pengaduan.index', [
            'datas' => Kalatirta_pengaduan::latest()->get()
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
    public function store(StoreKalatirta_pengaduanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kalatirta_pengaduan $kalatirta_pengaduan, string $id)
    {
        return view('dashboard.form.kalatirta.pengaduan.show', [
            'data' => Kalatirta_pengaduan::findOrfail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kalatirta_pengaduan $kalatirta_pengaduan)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKalatirta_pengaduanRequest $request, Kalatirta_pengaduan $kalatirta_pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kalatirta_pengaduan $kalatirta_pengaduan)
    {
        //
    }
}
