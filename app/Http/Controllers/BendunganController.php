<?php

namespace App\Http\Controllers;

use App\Models\Bendungan;
use App\Http\Requests\StoreBendunganRequest;
use App\Http\Requests\UpdateBendunganRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('dashboard.form.infrastruktur.bendungan.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBendunganRequest $request)
    {
        // dd($request->input());
        $validatedData = $request->validate([
            "nama" => ['required'],
            "lokasi" => ['required'],
            "wilaya_sungai" => ['required'],
            "daerah_sliran_sungai" => ['required'],
            "tahun_mulai_pembangunan" => ['required'],
            "tahun_selesai_pembangunan" => ['required'],
            "tipe_bendungan" => ['required'],
            "tinggi_dasar_sungai" => ['required'],
            "panjang_puncak" => ['required'],
            "lebar_puncak" => ['required'],
            "elevasi_puncak" => ['required'],
            "volume_tampung_normal" => ['required'],
            "volume_tampung_total" => ['required'],
            "irigasi" => ['required'],
            "body" => ['required'],
            'slug' => ['required', 'unique:Bendungans'],
            'url_foto1' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto2' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto3' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto4' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
        ]);
        // dd($validatedData['body']);
        DB::beginTransaction();
        try {

            if ($request->hasFile('url_foto')) {
                $petaPdfPath = $request->file('url_foto')->store('public/beritas/images');
                $validatedData['url_foto'] = $petaPdfPath;
            }

            Bendungan::create($validatedData);
            DB::commit();
            return redirect('/dashboard/beritas/index')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Bendungan $bendungan, string $slug)
    {
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
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Bendungan::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
