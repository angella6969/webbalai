<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Http\Requests\StorePengumumanRequest;
use App\Http\Requests\UpdatePengumumanRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;


class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengumumans = Pengumuman::latest()->paginate(10);
        // dd($pengumumans);
        return view('dashboard.form.pengumuman.index', [
            'pengumumans' => $pengumumans,
        ]);
    }
    public function index2()
    {
        $pengumumans = Pengumuman::latest()->paginate(10);
        // dd($pengumumans);
        return view('content.pengumuman.pengumumans', [
            'pengumumans' => $pengumumans,
        ]);
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd("ini membuat pengumuman");
        return view('dashboard.form.pengumuman.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => ['required'],
            'url_pengumuman' => ['nullable'],
            'dokumen' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf'],
        ]);
        DB::beginTransaction();
        try {

            if ($request->hasFile('dokumen')) {
                $petaPdfPath = $request->file('dokumen')->store('public/pdf/pengumuman');
                $validatedData['dokumen'] = $petaPdfPath;

                // Jika dokumen terisi, set url_pengumuman menjadi nilai dokumen
                $validatedData['url_pengumuman'] = $petaPdfPath;
            }

            Pengumuman::create($validatedData);
            DB::commit();
            return redirect('/balai/bbwsserayuopak/dashboard/pengumuman')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $progres = Pengumuman::findOrFail($id);
        return response()->json([
            'progres' => $progres,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd('ini edit');
        $pengumuman = Pengumuman::findOrfail($id);
        return view('dashboard.form.pengumuman.edit', [
            "pengumuman" => $pengumuman,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd('awd');
        $pengumuman = Pengumuman::findOrfail($id);
        $validatedData = $request->validate([
            'judul' => ['required'],
            'url_pengumuman' => ['nullable'],
            'dokumen' => ['file', 'max:5120', 'mimes:pdf'],

        ]);
        DB::beginTransaction();
        try {
 
            if ($request->hasFile('dokumen')) {
                if ($pengumuman->dokumen != null) {
                    Storage::delete($pengumuman->dokumen);
                }
                $petaPdfPath = $request->file('dokumen')->store('public/pdf/pengumuman');
                $validatedData['dokumen'] = $petaPdfPath;

                // Jika dokumen terisi, set url_pengumuman menjadi nilai dokumen
                $validatedData['url_pengumuman'] = $petaPdfPath;
            }

            Pengumuman::where('id', $id)->update($validatedData);
            DB::commit();
            return redirect('/balai/bbwsserayuopak/dashboard/pengumuman')->with('success', 'Data berhasil disimpan.');
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
        // dd("ini route delete");
        $Pengumuman = Pengumuman::findOrFail($id);
        try {
            $Pengumuman->delete();
            return redirect()->back()->with('success', 'Berhasil Menghapus Data');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
