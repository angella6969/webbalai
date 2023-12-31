<?php

namespace App\Http\Controllers;

use App\Models\Daftar_informasi_publik;
use App\Http\Requests\StoreDaftar_informasi_publikRequest;
use App\Http\Requests\UpdateDaftar_informasi_publikRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DaftarInformasiPublikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index2()
    {
        $informasis = Daftar_informasi_publik::latest()->get();
        // dd( $informasis);
        return view('content.daftar_informasi_publik.daftar_informasi', [
            'informasis' => $informasis
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        $informasis = Daftar_informasi_publik::latest()->get();
        return view('dashboard.form.daftar_infomasi_publik.index', [
            'informasis' => $informasis,
        ]);
    }
    public function create()
    {
        return view('dashboard.form.daftar_infomasi_publik.create', []);
    }

    /**
     * Store a newly created resource in storage. 
     */
    public function store(StoreDaftar_informasi_publikRequest $request)
    {
        // dd($request);

        $validatedData = $request->validate([
            'nama' => ['required'],
            'jenis' => ['required'],
            'link' => ['nullable'],
            // 'url_file' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            'url_file' => ['file', 'max:5120', 'mimes:xls,xlsx,jpg,jpeg,png,gif,pdf', 'nullable'],

        ]);
        DB::beginTransaction();
        try {

            if ($request->hasFile('url_file')) {
                $petaPdfPath = $request->file('url_file')->store('public/pdf/daftar_informasi_publik');
                $validatedData['url_file'] = $petaPdfPath;

                // Jika dokumen terisi, set url_pengumuman menjadi nilai dokumen
                $validatedData['link'] = $petaPdfPath;
            }

            Daftar_informasi_publik::create($validatedData);
            DB::commit();
            return redirect('/dashboard/daftar-informasi-publik')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Daftar_informasi_publik $daftar_informasi_publik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd('awd');
        $daftar_informasi_publik = Daftar_informasi_publik::findOrfail($id);
        // dd($daftar_informasi_publik);
        return view('dashboard.form.daftar_infomasi_publik.edit', [
            "daftar_informasi_publik" =>  $daftar_informasi_publik
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDaftar_informasi_publikRequest $request, string $id)
    {
        $daftar_informasi_publik = Daftar_informasi_publik::findOrFail($id);

        $validatedData = $request->validate([
            'nama' => ['required'],
            'jenis' => ['required'],
            'link' => ['nullable'],
            'url_file' => ['file', 'max:5120', 'mimes:xls,xlsx,jpg,jpeg,png,gif,pdf', 'nullable'],
        ]);

        DB::beginTransaction();
        try {

            if ($request->hasFile('url_file')) {
                if ($daftar_informasi_publik->url_file != null) {
                    Storage::delete($daftar_informasi_publik->url_file);
                }
                $petaPdfPath = $request->file('url_file')->store('public/pdf/daftar_informasi_publik');
                $validatedData['url_file'] = $petaPdfPath;
            }


            Daftar_informasi_publik::where('id', $id)->update($validatedData);

            DB::commit();
            // dd($validatedData);
            return redirect('/dashboard/daftar-informasi-publik')->with('success', 'Data berhasil disimpan.');
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
        $daftar_informasi_publik = Daftar_informasi_publik::findOrFail($id);
        try {


            if ($daftar_informasi_publik->url_file) {
                Storage::delete($daftar_informasi_publik->url_file);
            }

            $daftar_informasi_publik->delete();
            return redirect()->back()->with('success', 'Berhasil Menghapus Data');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
