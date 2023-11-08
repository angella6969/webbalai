<?php

namespace App\Http\Controllers;

use App\Models\Daftar_informasi_publik;
use App\Http\Requests\StoreDaftar_informasi_publikRequest;
use App\Http\Requests\UpdateDaftar_informasi_publikRequest;

class DaftarInformasiPublikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informasis = Daftar_informasi_publik::latest()->get();
        // dd( $informasis);
        return view('content.daftar_informasi_publik.daftar_informasi', [
            'informasis' => $informasis
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function index2()
    {
        $informasis = Daftar_informasi_publik::latest()->get();
        return view('dashboard.form.daftar_infomasi_publik.index', [
            'informasis' => $informasis,
        ]);
    }
    public function create()
    {
        return view('dashboard.form.daftar_infomasi_publik.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDaftar_informasi_publikRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Daftar_informasi_publik $daftar_informasi_publik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Daftar_informasi_publik $daftar_informasi_publik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDaftar_informasi_publikRequest $request, Daftar_informasi_publik $daftar_informasi_publik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Daftar_informasi_publik $daftar_informasi_publik)
    {
        //
    }
}
