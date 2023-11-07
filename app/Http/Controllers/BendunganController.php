<?php

namespace App\Http\Controllers;

use App\Models\Bendungan;
use App\Http\Requests\StoreBendunganRequest;
use App\Http\Requests\UpdateBendunganRequest;

class BendunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('content.infrastruktur.bendungan.bendungan', []);
    }
    public function index2()
    {
        $bendungan = Bendungan::latest()->get();
        // dd($bendungan);
        return view('content.infrastruktur.bendungan.bendungans', [
            'bendungans' => $bendungan,
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
    public function store(StoreBendunganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bendungan $bendungan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bendungan $bendungan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBendunganRequest $request, Bendungan $bendungan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bendungan $bendungan)
    {
        //
    }
}
