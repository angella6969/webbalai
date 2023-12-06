<?php

namespace App\Http\Controllers;

use App\Models\Bendung;
use App\Http\Requests\StoreBendungRequest;
use App\Http\Requests\UpdateBendungRequest;
use App\Models\Bendungan;
use App\Models\Embung;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


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
        $validatedData = $request->validate([
            "nama" => ['required'],
            "lokasi" => ['required'],
            "tahun_pembangunan" => ['required'],
            "body" => ['required'],
            'slug' => ['required', 'unique:Bendungs'],
            'url_foto1' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto2' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto3' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto4' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
        ]);
        DB::beginTransaction();
        try {

            if ($request->hasFile('url_foto1')) {
                $petaPdfPath = $request->file('url_foto1')->store('public/images/infrastruktur/bendung');
                $validatedData['url_foto1'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto2')) {
                $petaPdfPath = $request->file('url_foto2')->store('public/images/infrastruktur/bendung');
                $validatedData['url_foto2'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto3')) {
                $petaPdfPath = $request->file('url_foto3')->store('public/images/infrastruktur/bendung');
                $validatedData['url_foto3'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto4')) {
                $petaPdfPath = $request->file('url_foto4')->store('public/images/infrastruktur/bendung');
                $validatedData['url_foto4'] = $petaPdfPath;
            }

            Bendung::create($validatedData);
            DB::commit();
            return redirect('/dashboard/infrastruktur/bendungs')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
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
        return view('content.infrastruktur.bendung.bendung', [
            'bendung' => $bendung,
            'infrastrukturs' => $data,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bendung = Bendung::findOrFail($id);

        return view('dashboard.form.infrastruktur.bendung.edit', [
            'bendung' => $bendung
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBendungRequest $request, string $id)
    {
        $bendung = Bendung::findOrFail($id);

        $rules = [
            "nama" => ['required'],
            "lokasi" => ['required'],
            "tahun_pembangunan" => ['required'],
            "body" => ['required'],
            'url_foto1' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto2' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto3' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto4' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
        ];
        if ($request->slug != $bendung->slug) {
            $rules['slug'] = ['required', 'unique:Bendungs'];
        }

        $validatedData = $request->validate($rules);
        DB::beginTransaction();
        try {

            if ($request->hasFile('url_foto1')) {
                if ($bendung->url_foto1 != null) {
                    Storage::delete($bendung->url_foto1);
                }
                $petaPdfPath = $request->file('url_foto1')->store('public/images/infrastruktur/bendung');
                $validatedData['url_foto1'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto2')) {
                if ($bendung->url_foto2 != null) {
                    Storage::delete($bendung->url_foto2);
                }
                $petaPdfPath = $request->file('url_foto2')->store('public/images/infrastruktur/bendung');
                $validatedData['url_foto2'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto3')) {
                if ($bendung->url_foto3 != null) {
                    Storage::delete($bendung->url_foto3);
                }
                $petaPdfPath = $request->file('url_foto3')->store('public/images/infrastruktur/bendung');
                $validatedData['url_foto3'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto4')) {
                if ($bendung->url_foto4 != null) {
                    Storage::delete($bendung->url_foto4);
                }
                $petaPdfPath = $request->file('url_foto4')->store('public/images/infrastruktur/bendung');
                $validatedData['url_foto4'] = $petaPdfPath;
            }

            Bendung::where('id', $id)->update($validatedData);

            DB::commit();
            return redirect('/dashboard/infrastruktur/bendungs')->with('success', 'Data berhasil disimpan.');
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
        $bendung = Bendung::findOrFail($id);
        try {

            if ($bendung->url_foto1) {
                Storage::delete($bendung->url_foto1);
            }
            if ($bendung->url_foto2) {
                Storage::delete($bendung->url_foto2);
            }
            if ($bendung->url_foto3) {
                Storage::delete($bendung->url_foto3);
            }
            if ($bendung->url_foto4) {
                Storage::delete($bendung->url_foto4);
            }

            $bendung->delete();
            return redirect()->back()->with('success', 'Berhasil Menghapus Data');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Bendung::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
