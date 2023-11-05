<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Unique;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = Berita::latest()->paginate(5);
        return view('content.berita.britas', [
            'beritas' => $beritas
        ]);
    }
    // public function index2()
    // {
    //     $beritas = Berita::latest()->paginate(5);
    //     return view('content.berita.britas', [
    //         'beritas' => $beritas
    //     ]);
    // }

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
    public function store(StoreBeritaRequest $request)
    {
        $validatedData = $request->validate([
            'judul' => ['required'],
            'slug' => ['required', 'Unique:Berita'],
            'body' => ['required'],
            'url_foto' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf'],
        ]);
        DB::beginTransaction();
        try {

            if ($request->hasFile('url_foto')) {
                $petaPdfPath = $request->file('url_foto')->store('public/pdf');
                $validatedData['url_foto'] = $petaPdfPath;
            }

            Berita::create($validatedData);
            DB::commit();
            return redirect('/dashboard/beritas')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita, $slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        // dd($berita);
        if (!$berita) {
            // Tambahkan logika jika berita tidak ditemukan
            abort(404); // Contoh: Menampilkan halaman 404
        }

        return view('content.berita.brita', [
            'berita' => $berita
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBeritaRequest $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd("ini route delete");
        $Berita = Berita::findOrFail($id);
        try {
            $Berita->delete();
            return redirect()->back()->with('success', 'Berhasil Menghapus Data');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
