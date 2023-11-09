<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::all();
        return view('dashboard.form.fotoberanda.index', [
            'images' => $images
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.form.fotoberanda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreImageRequest $request)
    {
        $validatedData = $request->validate([
            'image' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif', 'nullable'],
        ]);
        DB::beginTransaction();
        try {
            if ($request->hasFile('image')) {
                $petaPdfPath = $request->file('image')->store('public/images/foto-beranda');
                $validatedData['image'] = $petaPdfPath;
            }
            Image::create($validatedData);
            DB::commit();
            return redirect('/dashboard/foto-beranda')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImageRequest $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        //
    }
}
