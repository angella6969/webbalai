<?php

namespace App\Http\Controllers;

use App\Models\Situsterkait;
use App\Http\Requests\StoreSitusterkaitRequest;
use App\Http\Requests\UpdateSitusterkaitRequest;
use Illuminate\Support\Facades\DB;

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
            'url_situs'=>['required']
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
    public function edit(Situsterkait $situsterkait)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSitusterkaitRequest $request, Situsterkait $situsterkait)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Situsterkait $situsterkait)
    {
        //
    }
}
