<?php

namespace App\Http\Controllers;

use App\Models\Infografis;
use App\Http\Requests\StoreInfografisRequest;
use App\Http\Requests\UpdateInfografisRequest;
use Illuminate\Support\Facades\DB;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InfografisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.form.media_informasi.index', [
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
        return view('dashboard.form.media_informasi.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInfografisRequest $request)
    {
        $validatedData = $request->validate([
            'nama' => ['required'],
            'slug' => ['required'],
            'jenis' => ['required'],
            'url_foto1' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,image/svg+xml', 'nullable'],
            'url_foto2' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,image/svg+xml', 'nullable'],
            'url_foto3' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,image/svg+xml', 'nullable'],
        ]);
        // dd($validatedData);
        DB::beginTransaction();
        try {
            if ($request->hasFile('url_foto1')) {
                $petaPdfPath = $request->file('url_foto1')->store('public/images/media-informasi');
                $validatedData['url_foto1'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto2')) {
                $petaPdfPath = $request->file('url_foto2')->store('public/images/media-informasi');
                $validatedData['url_foto2'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto3')) {
                $petaPdfPath = $request->file('url_foto3')->store('public/images/media-informasi');
                $validatedData['url_foto3'] = $petaPdfPath;
            }
            Infografis::create($validatedData);
            DB::commit();
            return redirect('/dashboard/media/media-informasi')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Infografis $infografis, string $jenis, $slug)
    {
        $Infografis = Infografis::where('slug', $slug)->where('jenis', $jenis)->firstOrFail();
        // dd($Infografis);

        if (!$Infografis) {
            abort(404);
        }

        return view('content.media.media', [
            'Infografis' => $Infografis,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Infografis = Infografis::findOrFail($id);
        return view('dashboard.form.media_informasi.edit', [
            'Infografis' => $Infografis
        ]);
        dd("edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInfografisRequest $request, string $id)
    {
        $Infografis = Infografis::findOrFail($id);
        $validatedData = $request->validate([
            'nama' => ['required'],
            'jenis' => ['required'],
            'url_foto1' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,image/svg+xml', 'nullable'],
            'url_foto2' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,image/svg+xml', 'nullable'],
            'url_foto3' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,image/svg+xml', 'nullable'],
        ]);
        DB::beginTransaction();
        try {

            if ($request->hasFile('url_foto1')) {
                if ($Infografis->url_foto1 != null) {
                    Storage::delete($Infografis->url_foto1);
                }
                $petaPdfPath = $request->file('url_foto1')->store('public/images/media-informasi');
                $validatedData['url_foto1'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto2')) {
                if ($Infografis->url_foto2 != null) {
                    Storage::delete($Infografis->url_foto2);
                }
                $petaPdfPath = $request->file('url_foto2')->store('public/images/media-informasi');
                $validatedData['url_foto2'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto3')) {
                if ($Infografis->url_foto3 != null) {
                    Storage::delete($Infografis->url_foto3);
                }
                $petaPdfPath = $request->file('url_foto3')->store('public/images/media-informasi');
                $validatedData['url_foto3'] = $petaPdfPath;
            }


            Infografis::where('id', $id)->update($validatedData);

            DB::commit();
            return redirect('/dashboard/media/media-informasi')->with('success', 'Data berhasil disimpan.');
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
        $infografis = Infografis::findOrFail($id);
        try {
            $infografis->delete();
            return redirect()->back()->with('success', 'Berhasil Menghapus Data');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Infografis::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
