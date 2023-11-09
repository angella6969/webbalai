<?php

namespace App\Http\Controllers;

use App\Models\Infografis;
use App\Http\Requests\StoreInfografisRequest;
use App\Http\Requests\UpdateInfografisRequest;

class InfografisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.form.infrastruktur.bendungan.index', [
            'Infografiss' => Infografis::latest()->Get(),
        ]);
    }
    public function index2()
    {
        // dd('awd');
        return view('content.media.medias', [
            'medias' => Infografis::latest()->Get(),
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
    public function store(StoreInfografisRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Infografis $infografis, string $slug)
    {
        $Infografis = Infografis::where('slug', $slug)->first();

        if (!$Infografis) {
            abort(404);
        }

        return view('content.media.media', [
            'Infografis' => $Infografis,
            // 'beritas' => $beritas
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Infografis $infografis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInfografisRequest $request, Infografis $infografis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Infografis $infografis)
    {
        //
    }
}
