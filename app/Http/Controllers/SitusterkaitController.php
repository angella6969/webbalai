<?php

namespace App\Http\Controllers;

use App\Models\Situsterkait;
use App\Http\Requests\StoreSitusterkaitRequest;
use App\Http\Requests\UpdateSitusterkaitRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SitusterkaitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $situss = Situsterkait::all();
        return view('dashboard.form.situsterkait.index', [
            'situss' => $situss
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.form.situsterkait.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSitusterkaitRequest $request)
    {
        $validatedData = $request->validate([
            'image' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,image/svg+xml', 'nullable'],
            'url_situs' => ['required']
        ]);
        DB::beginTransaction();
        try {
            if ($request->hasFile('image')) {
                $petaPdfPath = $request->file('image')->store('public/images/situs-terkait');
                $validatedData['image'] = $petaPdfPath;
            }
            Situsterkait::create($validatedData);
            DB::commit();
            return redirect('/dashboard/situs-terkait')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Situsterkait $situsterkait)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         // dd('ini edit');
         $Situsterkait  = Situsterkait::findOrFail($id);
         // dd($image);
         return view('dashboard.form.situsterkait.edit', [
             'situsterkaits' => $Situsterkait,
         ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSitusterkaitRequest $request, String $id)
    {
        $Situsterkait = Situsterkait::findOrFail($id);
        $validatedData = $request->validate([
            'image' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,image/svg+xml', 'nullable'],
            'url_situs' => ['required']
        ]);

        DB::beginTransaction();
        try {

            if ($request->hasFile('image')) {
                if ($Situsterkait->image != null) {
                    Storage::delete($Situsterkait->image);
                }
                $petaPdfPath = $request->file('image')->store('public/images/situs-terkait');
                $validatedData['image'] = $petaPdfPath;
            }
            Situsterkait::where('id', $id)->update($validatedData);
            DB::commit();
            return redirect('/dashboard/foto-beranda')->with('success', 'Data berhasil disimpan.');
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
        $Situsterkait = Situsterkait::findOrFail($id);
        try {
            $Situsterkait->delete();
            return redirect()->back()->with('success', 'Berhasil Menghapus Data');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
