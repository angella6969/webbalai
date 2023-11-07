<?php

namespace App\Http\Controllers;

use App\Models\Visi_misi;
use App\Http\Requests\StoreVisi_misiRequest;
use App\Http\Requests\UpdateVisi_misiRequest;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('content.visimisi');
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
    public function store(StoreVisi_misiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Visi_misi $visi_misi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visi_misi $visi_misi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVisi_misiRequest $request, Visi_misi $visi_misi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visi_misi $visi_misi)
    {
        //
    }
}
