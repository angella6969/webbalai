<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use App\Models\Bendung;
use App\Models\Bendungan;
use App\Models\Berita;
use App\Models\Embung;
use App\Models\Galery;
use App\Models\Image;
use App\Models\Infografis;
use App\Models\Infrastruktur;
use App\Models\Logoterkait;
use App\Models\Pengumuman;
use App\Models\Situsterkait;
use App\Models\Visitor;
use Illuminate\Support\Facades\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $image = Image::latest()->get();
        $berita = Berita::all();
        $infoData = Pengumuman::all();
        $logoTerkait = Situsterkait::all();

        $bendungans = Bendungan::all();
        $embungs = Embung::all();
        $bendungs = Bendung::all();

        $data = collect();

        if (!$bendungans->isEmpty()) {
            $data = $data->merge($bendungans);
        }

        if (!$embungs->isEmpty()) {
            $data = $data->merge($embungs);
        }

        if (!$bendungs->isEmpty()) {
            $data = $data->merge($bendungs);
        }

        // dd($data, $bendungans, $embungs, $bendungs);

        return view('content.home', [
            'images' => $image,
            'beritas' => $berita,
            'infoData' => $infoData,
            'infrastrukturs' => $data,
            'logoTerkaits' => $logoTerkait
        ]);
    }


    public function all_data_infrastruktur()
    {
        $bendungans = Bendungan::all();
        $embungs = Embung::all();
        $bendungs = Bendung::all();

        $data = collect();

        if (!$bendungans->isEmpty()) {
            $data = $data->merge($bendungans);
        }

        if (!$embungs->isEmpty()) {
            $data = $data->merge($embungs);
        }

        if (!$bendungs->isEmpty()) {
            $data = $data->merge($bendungs);
        }
        // dd($data);
        return view('content.infrastruktur.all-data', [
            'infrastrukturs' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function all_data(Request $request)
    {
        $bendungans = Bendungan::latest()->Filter(request(['search']))->get();
        $embungs = Embung::latest()->Filter(request(['search']))->get();
        $bendungs = Bendung::latest()->Filter(request(['search']))->get();
        // $infografis = Infografis::latest()->Filter(request(['search']))->get();
        $mergedData = $bendungans->merge($embungs)->merge($bendungs);

        return view('content.all_data', [
            'berita' => Berita::latest()->Filter(request(['search']))->get(),
            'infoData' => Pengumuman::latest()->Filter(request(['search']))->get(),
            'galeris' => Galery::latest()->Filter(request(['search']))->get(),
            'infrastrukturs' => $mergedData,
            'infografis' => Infografis::latest()->Filter(request(['search']))->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeRequest $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
