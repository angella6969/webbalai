<?php

namespace App\Http\Controllers;

use App\Models\Rencana_strategis;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRencana_strategisRequest;
use App\Http\Requests\UpdateRencana_strategisRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class RencanaStrategisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.form.perencanaan.rencana_starategis.index', [
            'rencana_starategiss' => Rencana_strategis::latest()->Get(),
        ]);
    }
    public function index2()
    {
        $rencana_strategis = Rencana_strategis::latest()->get();
        return view('content.perencanaan.strategis.strategiss', [
            'rencana_strategiss' => $rencana_strategis,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.form.perencanaan.rencana_starategis.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRencana_strategisRequest $request)
    {

        $validatedData = $request->validate([
            "nama" => ['required'],
            'url_pdf' => ['file', 'max:15120', 'mimetypes:application/pdf', 'nullable'],
        ]);

        DB::beginTransaction();
        try {

            if ($request->hasFile('url_pdf')) {
                $petaPdfPath = $request->file('url_pdf')->store('public/pdf/rencana-strategis');
                $validatedData['url_pdf'] = $petaPdfPath;
            }


            Rencana_strategis::create($validatedData);

            DB::commit();
            return redirect('/dashboard/perencanaan/rencana-strategis')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Rencana_strategis $rencana_strategis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rencana_strategis = Rencana_strategis::findOrfail($id);
        return view('dashboard.form.perencanaan.rencana_starategis.edit', [
            "rencana_strategis" =>  $rencana_strategis
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRencana_strategisRequest $request, string $id)
    {
        // dd('awd');
        $rencana_strategis = Rencana_strategis::findOrFail($id);
        $validatedData = $request->validate([
            "nama" => ['required'],
            'url_pdf' => ['file', 'max:15120', 'mimetypes:application/pdf', 'nullable'],
        ]);

        DB::beginTransaction();
        try {

            if ($request->hasFile('url_pdf')) {
                if ($rencana_strategis->url_pdf != null) {
                    Storage::delete($rencana_strategis->url_pdf);
                }
                $petaPdfPath = $request->file('url_pdf')->store('public/pdf/rencana-strategis');
                $validatedData['url_pdf'] = $petaPdfPath;
            }

            Rencana_strategis::where('id', $id)->update($validatedData);

            DB::commit();
            return redirect('/dashboard/perencanaan/rencana-strategis')->with('success', 'Data berhasil disimpan.');
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
        $rencana_strategis = Rencana_strategis::findOrFail($id);
        try {

            if ($rencana_strategis->url_pdf) {
                Storage::delete($rencana_strategis->url_pdf);
            }


            $rencana_strategis->delete();
            return redirect()->back()->with('success', 'Berhasil Menghapus Data');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
