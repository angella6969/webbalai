<?php

namespace App\Http\Controllers;

use App\Models\Embung;
use App\Http\Requests\StoreEmbungRequest;
use App\Http\Requests\UpdateEmbungRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


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
        $validatedData = $request->validate([
            "nama" => ['required'],
            "lokasi" => ['required'],
            "volume_tampung" => ['required'],
            "luas_genangan" => ['required'],
            "tahun_pembangunan" => ['required'],
            "volume_tampung" => ['required'],
            "body" => ['required'],
            'slug' => ['required', 'unique:Embungs'],
            'url_foto1' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto2' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto3' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto4' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
        ]);


        DB::beginTransaction();
        try {

            if ($request->hasFile('url_foto1')) {
                $petaPdfPath = $request->file('url_foto1')->store('public/images/infrastruktur/embung');
                $validatedData['url_foto1'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto2')) {
                $petaPdfPath = $request->file('url_foto2')->store('public/images/infrastruktur/embung');
                $validatedData['url_foto2'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto3')) {
                $petaPdfPath = $request->file('url_foto3')->store('public/images/infrastruktur/embung');
                $validatedData['url_foto3'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto4')) {
                $petaPdfPath = $request->file('url_foto4')->store('public/images/infrastruktur/embung');
                $validatedData['url_foto4'] = $petaPdfPath;
            }

            Embung::create($validatedData);

            DB::commit();
            return redirect('/dashboard/infrastruktur/embungs')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Embung $embung, string $slug)
    {
        // dd('awd');
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
    public function edit(string $id)
    {
        $embung = Embung::findOrFail($id);
        return view('dashboard.form.infrastruktur.embung.edit', [
            'embung' => $embung
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmbungRequest $request, string $id)
    {
        $embung = Embung::findOrFail($id);

        $rules = [
            "nama" => ['required'],
            "lokasi" => ['required'],
            "volume_tampung" => ['required'],
            "luas_genangan" => ['required'],
            "tahun_pembangunan" => ['required'],
            "volume_tampung" => ['required'],
            "body" => ['required'],
            'url_foto1' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto2' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto3' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto4' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
        ];

        if ($request->slug != $embung->slug) {
            $rules['slug'] = ['required', 'Unique:Embungs'];
        }

        $validatedData = $request->validate($rules);
        DB::beginTransaction();
        try {

            if ($request->hasFile('url_foto1')) {
                if ($embung->url_foto1 != null) {
                    Storage::delete($embung->url_foto1);
                }
                $petaPdfPath = $request->file('url_foto1')->store('public/images/infrastruktur/embung');
                $validatedData['url_foto1'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto2')) {
                if ($embung->url_foto1 != null) {
                    Storage::delete($embung->url_foto1);
                }
                $petaPdfPath = $request->file('url_foto2')->store('public/images/infrastruktur/embung');
                $validatedData['url_foto2'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto3')) {
                if ($embung->url_foto1 != null) {
                    Storage::delete($embung->url_foto1);
                }
                $petaPdfPath = $request->file('url_foto3')->store('public/images/infrastruktur/embung');
                $validatedData['url_foto3'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto4')) {
                if ($embung->url_foto1 != null) {
                    Storage::delete($embung->url_foto1);
                }
                $petaPdfPath = $request->file('url_foto4')->store('public/images/infrastruktur/embung');
                $validatedData['url_foto4'] = $petaPdfPath;
            }

            Embung::where('id', $id)->update($validatedData);

            DB::commit();

            return redirect('/dashboard/infrastruktur/embungs')->with('success', 'Data berhasil disimpan.');
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
        $embung = Embung::findOrFail($id);
        try {

            if ($embung->url_foto1) {
                Storage::delete($embung->url_foto1);
            }
            if ($embung->url_foto2) {
                Storage::delete($embung->url_foto2);
            }
            if ($embung->url_foto3) {
                Storage::delete($embung->url_foto3);
            }
            if ($embung->url_foto4) {
                Storage::delete($embung->url_foto4);
            }

            $embung->delete();
            return redirect()->back()->with('success', 'Berhasil Menghapus Data');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Embung::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
