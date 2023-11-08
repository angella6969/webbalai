<?php

namespace App\Http\Controllers;

use App\Models\Embung;
use App\Http\Requests\StoreEmbungRequest;
use App\Http\Requests\UpdateEmbungRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class EmbungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.form.infrastruktur.embung.index', [
            'embungs' => Embung::latest()->Get(),

        ]);
    }
    public function index2()
    {
        $embung = Embung::latest()->get();
        // dd($embungan);
        return view('content.infrastruktur.embung.embungs', [
            'embungs' => $embung,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.form.infrastruktur.embung.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmbungRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Embung $embung,string $slug)
    {
        $embung = Embung::where('slug', $slug)->first();

        if (!$embung) {
            abort(404);
        }

        return view('content.infrastruktur.embung.embung', [
            'embung' => $embung,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Embung $embung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmbungRequest $request, Embung $embung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Embung $embung)
    {
        //
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Bendungan::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
