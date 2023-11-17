<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Unique;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NewDataNotification;
use App\Models\User;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index2()
    {
        $beritas = Berita::latest()->paginate(5);
        return view('content.berita.britas', [
            'beritas' => $beritas
        ]);
    }
    public function index()
    {
        $beritas = Berita::latest()->paginate(10);
        return view('dashboard.form.berita.index2', [
            'beritas' => $beritas
        ]);
    }

    /** public\storage\images\BqxS4gVaEVDrc80MR48DFbsELfY5u7H48a0SNMfZ.jpg
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('ini adalah create');
        return view('dashboard.form.berita.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBeritaRequest $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'judul' => ['required'],
            'slug' => ['required', 'Unique:Beritas'],
            'body' => ['required'],
            'url_foto' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'nullable'],
        ]);
        // dd($validatedData['body']);
        DB::beginTransaction();
        try {

            if ($request->hasFile('url_foto')) {
                $petaPdfPath = $request->file('url_foto')->store('public/images/beritas');
                $validatedData['url_foto'] = $petaPdfPath;
            }

            Berita::create($validatedData);
            // $user = Auth::user();
            // $user->notify(new NewDataNotification());
            // $user->notify(new NewDataNotification());
            DB::commit();
            return redirect('/dashboard/beritas/')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita, $slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        $beritas = Berita::latest()->get();

        if (!$berita) {
            abort(404);
        }

        return view('content.berita.brita', [
            'berita' => $berita,
            'beritas' => $beritas
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $berita = Berita::findOrFail($id);
        // dd($berita);
        return view('dashboard.form.berita.edit', [
            'berita' => $berita,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBeritaRequest $request,  string $id)
    {
        // dd($request);
        $berita = Berita::findOrFail($id);
        $rules = [
            'judul' => ['required'],
            // 'slug' => ['required', 'Unique:Beritas'], 
            'body' => ['required'],
            'url_foto' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif'],
        ];

        if ($request->slug != $berita->slug) {
            $rules['slug'] = ['required', 'Unique:Beritas'];
        }

        $validatedData = $request->validate($rules);

        DB::beginTransaction();
        try {

            if ($request->hasFile('url_foto')) {
                if ($berita->url_foto != null) {
                    Storage::delete($berita->url_foto);
                }
                $petaPdfPath = $request->file('url_foto')->store('public/images/beritas');
                $validatedData['url_foto'] = $petaPdfPath;
            }

            Berita::where('id', $id)->update($validatedData);
            DB::commit();
            return redirect('/dashboard/beritas/')->with('success', 'Data berhasil disimpan.');
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
        $Berita = Berita::findOrFail($id);
        try {
            $Berita->delete();
            return redirect()->back()->with('success', 'Berhasil Menghapus Data');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    public function checkSlug(Request $request)
    {
        // dd('as');
        $slug = SlugService::createSlug(Berita::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
