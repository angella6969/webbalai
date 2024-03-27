<?php

namespace App\Http\Controllers;

use App\Models\Lakip;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLakipRequest;
use App\Http\Requests\UpdateLakipRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LakipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.form.lakip.index', [
            'lakips' => Lakip::latest()->Get(),
        ]);
    }
    public function index2()
    {
        $lakip = Lakip::latest()->get();
        return view('content.lakip.lakips', [
            'lakips' => $lakip,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.form.lakip.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLakipRequest $request)
    {
        $validatedData = $request->validate([
            "nama" => ['required'],
            'url_pdf' => ['file', 'max:15120', 'mimetypes:application/pdf', 'nullable'],
        ]);

        DB::beginTransaction();
        try {

            if ($request->hasFile('url_pdf')) {
                $petaPdfPath = $request->file('url_pdf')->store('public/pdf/lakip');
                $validatedData['url_pdf'] = $petaPdfPath;
            }


            Lakip::create($validatedData);

            DB::commit();
            return redirect('/balai/bbwsserayuopak/dashboard/kinerja/lakip')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Lakip $lakip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lakip = Lakip::findOrFail($id);

        return view('dashboard.form.lakip.edit', [
            'lakip' => $lakip
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLakipRequest $request, string $id)
    {
        $lakip = Lakip::findOrFail($id);
        $validatedData = $request->validate([
            "nama" => ['required'],
            'url_pdf' => ['file', 'max:15120', 'mimetypes:application/pdf', 'nullable'],
        ]);

        DB::beginTransaction();
        try {

            if ($request->hasFile('url_pdf')) {
                if ($lakip->url_pdf != null) {
                    Storage::delete($lakip->url_pdf);
                }
                $petaPdfPath = $request->file('url_pdf')->store('public/pdf/rencana-strategis');
                $validatedData['url_pdf'] = $petaPdfPath;
            }

            Lakip::where('id', $id)->update($validatedData);

            DB::commit();
            return redirect('/balai/bbwsserayuopak/dashboard/kinerja/lakip')->with('success', 'Data berhasil disimpan.');
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
        $lakip = Lakip::findOrFail($id);
        try {

            if ($lakip->url_pdf) {
                Storage::delete($lakip->url_pdf);
            }

            $lakip->delete();
            return redirect()->back()->with('success', 'Berhasil Menghapus Data');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
