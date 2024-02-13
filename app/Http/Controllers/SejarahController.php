<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSejarahRequest;
use App\Http\Requests\UpdateSejarahRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sejarah = Sejarah::latest()->get();
        return view('dashboard.form.profil.sejarah.index', [
            'sejarah' => $sejarah
        ]);
    }

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
    public function store(StoreSejarahRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sejarah $sejarah)
    {
        $sejarah = Sejarah::latest()->get();
        return view('content.profil.sejarah.sejarah', [
            'sejarah' => $sejarah
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $sejarah = Sejarah::findorFail($id);
        return view('dashboard.form.profil.sejarah.edit', [
            'sejarah' => $sejarah
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSejarahRequest $request, String $id)
    {
        $sejarah = Sejarah::findOrFail($id);
        $validatedData = $request->validate([
            "body" => ['required'],
            'url_foto1' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            // 'url_foto2' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            // 'url_foto3' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
            // 'url_foto4' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
        ]);

        // dd($validatedData);

        DB::beginTransaction();
        try {

            if ($request->hasFile('url_foto1')) {
                if ($sejarah->url_foto1 != null) {
                    Storage::delete($sejarah->url_foto1);
                }
                $petaPdfPath = $request->file('url_foto1')->store('public/images/infrastruktur/sejarah');
                $validatedData['url_foto1'] = $petaPdfPath;
            }
            // if ($request->hasFile('url_foto2')) {
            //     if ($sejarah->url_foto2 != null) {
            //         Storage::delete($sejarah->url_foto2);
            //     }
            //     $petaPdfPath = $request->file('url_foto2')->store('public/images/infrastruktur/sejarah');
            //     $validatedData['url_foto2'] = $petaPdfPath;
            // }
            // if ($request->hasFile('url_foto3')) {
            //     if ($sejarah->url_foto3 != null) {
            //         Storage::delete($sejarah->url_foto3);
            //     }
            //     $petaPdfPath = $request->file('url_foto3')->store('public/images/infrastruktur/sejarah');
            //     $validatedData['url_foto3'] = $petaPdfPath;
            // }
            // if ($request->hasFile('url_foto4')) {
            //     if ($sejarah->url_foto4 != null) {
            //         Storage::delete($sejarah->url_foto4);
            //     }
            //     $petaPdfPath = $request->file('url_foto4')->store('public/images/profil/sejarah');
            //     $validatedData['url_foto4'] = $petaPdfPath;
            // }

            Sejarah::where('id', $id)->update($validatedData);

            DB::commit();
            return redirect('dashboard/profil/sejarah')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sejarah $sejarah)
    {
        //
    }
}
