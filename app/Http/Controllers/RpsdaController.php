<?php

namespace App\Http\Controllers;

use App\Models\Rpsda;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRpsdaRequest;
use App\Http\Requests\UpdateRpsdaRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RpsdaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.form.perencanaan.pola_rpsda.index', [
            'rpsdas' => Rpsda::latest()->Get(),
        ]);
    }
    public function index2()
    {
        $rpsda = Rpsda::latest()->get();
        return view('content.perencanaan.rpsda.rpsdas', [
            'rpsdas' => $rpsda,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.form.perencanaan.pola_rpsda.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRpsdaRequest $request)
    {
        
        $validatedData = $request->validate([
            "nama" => ['required'],
            "jenis" => ['required'],
            'url_pdf' => ['file', 'max:15120', 'mimetypes:application/pdf', 'nullable'],
        ]);
        DB::beginTransaction(); 
        try {

            if ($request->hasFile('url_pdf')) {
                $petaPdfPath = $request->file('url_pdf')->store('public/pdf/rpsda');
                $validatedData['url_pdf'] = $petaPdfPath;
            }


            Rpsda::create($validatedData);
            DB::commit();
            return redirect('/balai/bbwsserayuopak/dashboard/perencanaan/pola-ws-dan-rpsda')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Rpsda $rpsda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rpsda = Rpsda::findOrfail($id);
        // dd($rpsda);
        return view('dashboard.form.perencanaan.pola_rpsda.edit', [
            "rpsda" =>  $rpsda
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRpsdaRequest $request, String $id)
    {
        $rpsda = Rpsda::findOrFail($id);
        $validatedData = $request->validate([
            "nama" => ['required'],
            "jenis" => ['required'],
            'url_pdf' => ['file', 'max:15120', 'mimetypes:application/pdf', 'nullable'],
        ]);

        DB::beginTransaction();
        try {

            if ($request->hasFile('url_pdf')) {
                if ($rpsda->url_pdf != null) {
                    Storage::delete($rpsda->url_pdf);
                }
                $petaPdfPath = $request->file('url_pdf')->store('public/pdf/rpsda');
                $validatedData['url_pdf'] = $petaPdfPath;
            }

            Rpsda::where('id', $id)->update($validatedData);

            DB::commit();
            return redirect('/dashboard/perencanaan/pola-ws-dan-rpsda')->with('success', 'Data berhasil disimpan.');
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
        $rpsda = Rpsda::findOrFail($id);
        try {

            if ($rpsda->url_pdf) {
                Storage::delete($rpsda->url_pdf);
            }

            $rpsda->delete();
            return redirect()->back()->with('success', 'Berhasil Menghapus Data');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
