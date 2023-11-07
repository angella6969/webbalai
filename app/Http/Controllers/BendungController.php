<?php

namespace App\Http\Controllers;

use App\Models\Bendung;
use App\Http\Requests\StoreBendungRequest;
use App\Http\Requests\UpdateBendungRequest;

class BendungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function index2()
    {
        $bendung = Bendung::latest()->get();
        // dd($bendungan);
        return view('content.infrastruktur.bendung.bendungs', [
            'bendungs' => $bendung,
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
    public function store(StoreBendungRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bendung $bendung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bendung $bendung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBendungRequest $request, Bendung $bendung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bendung $bendung)
    {
        //
    }
}
