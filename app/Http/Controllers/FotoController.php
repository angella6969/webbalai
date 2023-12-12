<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFotoRequest;
use App\Http\Requests\UpdateFotoRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('aw');
        $fotos = Foto::latest()->get();
        return view('dashboard.form.galeri.foto.index', [
            'fotos' => $fotos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.form.galeri.foto.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFotoRequest $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'nama' => ['required'],
            'slug' => ['required', 'Unique:Fotos'],
            'url_foto1' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto2' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto3' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto4' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto5' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto6' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto7' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto8' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto9' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto10' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
        ]);

        DB::beginTransaction();
        try {

            if ($request->hasFile('url_foto1')) {
                $petaPdfPath = $request->file('url_foto1')->store('public/images/galery');
                $validatedData['url_foto1'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto2')) {
                $petaPdfPath = $request->file('url_foto2')->store('public/images/galery');
                $validatedData['url_foto2'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto3')) {
                $petaPdfPath = $request->file('url_foto3')->store('public/images/galery');
                $validatedData['url_foto3'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto4')) {
                $petaPdfPath = $request->file('url_foto4')->store('public/images/galery');
                $validatedData['url_foto4'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto5')) {
                $petaPdfPath = $request->file('url_foto5')->store('public/images/galery');
                $validatedData['url_foto5'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto6')) {
                $petaPdfPath = $request->file('url_foto6')->store('public/images/galery');
                $validatedData['url_foto6'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto7')) {
                $petaPdfPath = $request->file('url_foto7')->store('public/images/galery');
                $validatedData['url_foto7'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto8')) {
                $petaPdfPath = $request->file('url_foto8')->store('public/images/galery');
                $validatedData['url_foto8'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto9')) {
                $petaPdfPath = $request->file('url_foto9')->store('public/images/galery');
                $validatedData['url_foto9'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto10')) {
                $petaPdfPath = $request->file('url_foto10')->store('public/images/galery');
                $validatedData['url_foto10'] = $petaPdfPath;
            }

            Foto::create($validatedData);
            DB::commit();
            // dd( $validatedData);
            return redirect('/dashboard/galeri/foto')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Foto $foto, string $slug)
    {
        // dd('awd');
        $fotos = Foto::where('slug', $slug)->first();
        // dd($fotos);
        return view('content.galeri.foto.foto', [
            'foto' => $fotos
        ]);
    }

    public function shows()
    {
        $fotos = Foto::latest()->get();
        return view('content.galeri.foto.fotos', [
            'fotos' => $fotos
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fotos = Foto::findOrfail($id)->first();
        return view('dashboard.form.galeri.foto.edit', [
            'foto' => $fotos
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFotoRequest $request, string $id)
    {
        $foto = Foto::findOrfail($id);
        $validatedData = $request->validate([
            'nama' => ['required'],
            'url_foto1' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto2' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto3' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto4' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto5' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto6' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto7' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto8' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto9' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_foto10' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
        ]);
        DB::beginTransaction();
        try {

            if ($request->hasFile('url_foto1')) {
                if ($foto->url_foto1 != null) {
                    Storage::delete($foto->url_foto1);
                }
                $petaPdfPath = $request->file('url_foto1')->store('public/images/galery');
                $validatedData['url_foto1'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto2')) {
                if ($foto->url_foto2 != null) {
                    Storage::delete($foto->url_foto2);
                }
                $petaPdfPath = $request->file('url_foto2')->store('public/images/galery');
                $validatedData['url_foto2'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto3')) {
                if ($foto->url_foto3 != null) {
                    Storage::delete($foto->url_foto3);
                }
                $petaPdfPath = $request->file('url_foto3')->store('public/images/galery');
                $validatedData['url_foto3'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto4')) {
                if ($foto->url_foto4 != null) {
                    Storage::delete($foto->url_foto4);
                }
                $petaPdfPath = $request->file('url_foto4')->store('public/images/galery');
                $validatedData['url_foto4'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto5')) {
                if ($foto->url_foto5 != null) {
                    Storage::delete($foto->url_foto5);
                }
                $petaPdfPath = $request->file('url_foto5')->store('public/images/galery');
                $validatedData['url_foto5'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto6')) {
                if ($foto->url_foto6 != null) {
                    Storage::delete($foto->url_foto6);
                }
                $petaPdfPath = $request->file('url_foto6')->store('public/images/galery');
                $validatedData['url_foto6'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto7')) {
                if ($foto->url_foto7 != null) {
                    Storage::delete($foto->url_foto7);
                }
                $petaPdfPath = $request->file('url_foto7')->store('public/images/galery');
                $validatedData['url_foto7'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto8')) {
                if ($foto->url_foto8 != null) {
                    Storage::delete($foto->url_foto8);
                }
                $petaPdfPath = $request->file('url_foto8')->store('public/images/galery');
                $validatedData['url_foto8'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto9')) {
                if ($foto->url_foto9 != null) {
                    Storage::delete($foto->url_foto9);
                }
                $petaPdfPath = $request->file('url_foto9')->store('public/images/galery');
                $validatedData['url_foto9'] = $petaPdfPath;
            }
            if ($request->hasFile('url_foto10')) {
                if ($foto->url_foto10 != null) {
                    Storage::delete($foto->url_foto10);
                }
                $petaPdfPath = $request->file('url_foto10')->store('public/images/galery');
                $validatedData['url_foto10'] = $petaPdfPath;
            }
            Foto::where('id', $id)->update($validatedData);
            DB::commit();
            return redirect('/dashboard/galeri/foto')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $image = Foto::findOrFail($id);
        try {
            $image->delete();
            return redirect()->back()->with('success', 'Berhasil Menghapus Data');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Foto::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
