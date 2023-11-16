<?php

namespace App\Http\Controllers;

use App\Models\Kalatirta;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKalatirtaRequest;
use App\Http\Requests\UpdateKalatirtaRequest;
use Illuminate\Support\Facades\DB;

class KalatirtaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.form.kalatirta.index', [
            'datas' => Kalatirta::latest()->get(),
        ]);
    }
    public function index2()
    {
        return view('content.kalatirta.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.kalatirta.formdata');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKalatirtaRequest $request)
    {
        $validatedData = $request->validate([
            'nama' => ['required', 'max:254'],
            'alamat' => ['required', 'max:254'],
            'nohp' => ['required', 'regex:/^\d{10,15}$/'],
            'email' => ['required', 'max:254', 'email:dns'],
            'pekerjaan' => ['required', 'max:254'],
            'alamatkantor' => ['required', 'max:254'],
            'tujuan' => ['required'],
            'informasi' => ['required'],
            'memperoleh' => ['required'],
            'mengirim' => ['required'],
            'keterangan' => ['nullable'],
            'ktp' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'required'],
        ]);

        DB::beginTransaction();
        try {

            if ($request->hasFile('ktp')) {
                $petaPdfPath = $request->file('ktp')->store('public/images/kalatirta');
                $validatedData['ktp'] = $petaPdfPath;
            }

            Kalatirta::create($validatedData);

            DB::commit();
            // dd($validatedData);
            return redirect('/kalatirta-so')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kalatirta $kalatirta, string $id)
    {
        $data = Kalatirta::findOrfail($id);
        return view('dashboard.form.kalatirta.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kalatirta $kalatirta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKalatirtaRequest $request, String $id)
    {

        // $kalatirta = Kalatirta::findOrFail($id);
        $validatedData = $request->validate([
            'status' => ['required'],
            'keterangan' => ['nullable'],
        ]);
        // dd( $validatedData);
        DB::beginTransaction();
        try {
            Kalatirta::where('id', $id)->update($validatedData);
            DB::commit();
            return redirect('/dashboard/kalatirta-so/')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kalatirta $kalatirta)
    {
        //
    }
}
