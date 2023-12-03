<?php

namespace App\Http\Controllers;

use App\Models\Bendungan;
use App\Http\Requests\StoreBendunganRequest;
use App\Http\Requests\UpdateBendunganRequest;
use App\Models\Bendung;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BendunganController extends Controller 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.form.infrastruktur.bendungan.index', [
            'bendungans' => Bendungan::latest()->Get(),
        ]);
    }
    public function index2()
    {
        $bendungan = Bendungan::latest()->get();
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
            // "irigasi" => ['required'],
            "body" => ['required'],
            'slug' => ['required', 'unique:Bendungans'],
            'url_foto1' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto2' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto3' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto4' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
        ]);
        DB::beginTransaction();
        try {

            if ($request->hasFile('url_foto1')) {
                $petaPdfPath = $request->file('url_foto1')->store('public/images/infrastruktur/bendungan');
                $validatedData['url_foto1'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto2')) {
                $petaPdfPath = $request->file('url_foto2')->store('public/images/infrastruktur/bendungan');
                $validatedData['url_foto2'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto3')) {
                $petaPdfPath = $request->file('url_foto3')->store('public/images/infrastruktur/bendungan');
                $validatedData['url_foto3'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto4')) {
                $petaPdfPath = $request->file('url_foto4')->store('public/images/infrastruktur/bendungan');
                $validatedData['url_foto4'] = $petaPdfPath;
            }

            Bendungan::create($validatedData);
            DB::commit();
            // dd( $validatedData);
            return redirect('/dashboard/infrastruktur/bendungans')->with('success', 'Data berhasil disimpan.');
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
        // dd('show bendungan');
        $bendungan = Bendungan::where('slug', $slug)->first();

        if (!$bendungan) {
            abort(404);
        }

        return view('content.infrastruktur.bendungan.bendungan', [
            'bendungan' => $bendungan,
            // 'beritas' => $beritas
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bendungan = Bendungan::findOrfail($id);
        return view('dashboard.form.infrastruktur.bendungan.edit', [
            "bendungan" =>  $bendungan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBendunganRequest $request, string $id)
    {

        $bendungan = Bendungan::findOrFail($id);
        // dd($bendungan);
        $rules = [
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
            "body" => ['required'],
            'url_foto1' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto2' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto3' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto4' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
        ];


        if ($request->slug != $bendungan->slug) {
            $rules['slug'] = ['required', 'Unique:Bendungans'];
        }
        $validatedData = $request->validate($rules);

        // dd($validatedData);

        DB::beginTransaction();
        try {
 
            if ($request->hasFile('url_foto1')) {
                if ($bendungan->url_foto1 != null) {
                    Storage::delete($bendungan->url_foto1);
                }
                $petaPdfPath = $request->file('url_foto1')->store('public/images/infrastruktur/bendungan');
                $validatedData['url_foto1'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto2')) {
                if ($bendungan->url_foto2 != null) {
                    Storage::delete($bendungan->url_foto2);
                }
                $petaPdfPath = $request->file('url_foto2')->store('public/images/infrastruktur/bendungan');
                $validatedData['url_foto2'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto3')) {
                if ($bendungan->url_foto3 != null) {
                    Storage::delete($bendungan->url_foto3);
                }
                $petaPdfPath = $request->file('url_foto3')->store('public/images/infrastruktur/bendungan');
                $validatedData['url_foto3'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto4')) {
                if ($bendungan->url_foto4 != null) {
                    Storage::delete($bendungan->url_foto4);
                }
                $petaPdfPath = $request->file('url_foto4')->store('public/images/infrastruktur/bendungan');
                $validatedData['url_foto4'] = $petaPdfPath;
            }

            Bendungan::where('id', $id)->update($validatedData);

            DB::commit();
            // dd($validatedData);
            return redirect('/dashboard/infrastruktur/bendungans')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bendungan = Bendungan::findOrFail($id);
        try {

            if ($bendungan->url_foto1) {
                Storage::delete($bendungan->url_foto1);
            }
            if ($bendungan->url_foto2) {
                Storage::delete($bendungan->url_foto2);
            }
            if ($bendungan->url_foto3) {
                Storage::delete($bendungan->url_foto3);
            }
            if ($bendungan->url_foto4) {
                Storage::delete($bendungan->url_foto4);
            }

            $bendungan->delete();
            return redirect()->back()->with('success', 'Berhasil Menghapus Data');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Bendungan::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
