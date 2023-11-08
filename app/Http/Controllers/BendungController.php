<?php

namespace App\Http\Controllers;

use App\Models\Bendung;
use App\Http\Requests\StoreBendungRequest;
use App\Http\Requests\UpdateBendungRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class BendungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.form.infrastruktur.bendung.index', [
            'bendungs' => Bendung::latest()->Get(),

        ]);
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
        return view('dashboard.form.infrastruktur.bendung.create', []);
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
    public function show(Bendung $bendung, string $slug)
    {
        $bendung = Bendung::where('slug', $slug)->first();

        if (!$bendung) {
            abort(404);
        }

        return view('content.infrastruktur.bendung.bendung', [
            'bendung' => $bendung,
        ]);
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
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Bendungan::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
