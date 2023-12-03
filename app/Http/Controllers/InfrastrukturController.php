<?php

namespace App\Http\Controllers;

use App\Models\Infrastruktur;
use App\Http\Requests\StoreInfrastrukturRequest;
use App\Http\Requests\UpdateInfrastrukturRequest;

class InfrastrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infrastruktur = Infrastruktur::all();
        return view('dashboard.form.infrastruktur.index', [
            'infrastrukturs' => $infrastruktur, 
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
    public function store(StoreInfrastrukturRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Infrastruktur $infrastruktur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Infrastruktur $infrastruktur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInfrastrukturRequest $request, Infrastruktur $infrastruktur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Infrastruktur $infrastruktur)
    {
        //
    }
}
