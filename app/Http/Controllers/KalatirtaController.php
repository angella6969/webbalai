<?php

namespace App\Http\Controllers;

use App\Models\Kalatirta;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKalatirtaRequest;
use App\Http\Requests\UpdateKalatirtaRequest;
use App\Models\Survey;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
    public function create1()
    {
        $data = session('data');
        return view('content.kalatirta.survey', [
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKalatirtaRequest $request)
    {
        // Mendapatkan tanggal sekarang
        $date = Carbon::now();

        // Format tanggal menjadi 'M/y'
        $formattedDate = $date->format('M/y');

        // Mencari nomor registrasi terakhir dari database
        $lastRegistration = Kalatirta::latest('created_at')->first();
        if ($lastRegistration) {
            // Memecah nomor registrasi menjadi bagian-bagian
            $parts = explode('/', $lastRegistration->noReg);

            // Mengambil bagian nomor
            $lastNumber = intval($parts[0]);

            // Mengecek apakah bulan saat ini sama dengan bulan pada nomor registrasi terakhir
            if ($date->format('M/y') == $lastRegistration->formatted_date) {
                // Jika ya, tambahkan satu ke nomor terakhir
                $newNumber = $lastNumber + 1;
            } else {
                // Jika tidak, reset nomor menjadi 1
                $newNumber = 1;
            }
        } else {
            // Jika belum ada nomor registrasi sebelumnya, set nomor pertama
            $newNumber = 1;
        }
        // Format nomor baru menjadi format yang diinginkan (misalnya, 4 digit dengan leading zero)
        $newNumberFormatted = sprintf('%04d', $newNumber);

        // Membuat nomor registrasi baru
        $noReg = $newNumberFormatted . '/PPID/' . $formattedDate;
        // dd($noReg);
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
            'alamat_kirim' => ['nullable', 'max:254'],
            'ktp' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'required'],
        ]);

        DB::beginTransaction();
        try {

            if ($request->hasFile('ktp')) {
                $petaPdfPath = $request->file('ktp')->store('public/images/kalatirta');
                $validatedData['ktp'] = $petaPdfPath;
            }

            return redirect('/kalatirta-so/form-permohonan-data/survey')->with('data', $validatedData);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function store1(StoreKalatirtaRequest $request)
    {
        $data = json_decode($request->input('data'), true);
        if ($data === null) {
            return redirect()->route('kalatirta.create')->with('fail', 'Data Kosong / Silahkan Isi Data Terlebih dahulu');
        }
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $nohp  = $data['nohp'];
        $email  = $data['email'];
        $pekerjaan = $data['pekerjaan'];
        $alamatkantor = $data['alamatkantor'];
        $tujuan  = $data['tujuan'];
        $informasi = $data['informasi'];
        $memperoleh  = $data['memperoleh'];
        $mengirim  = $data['mengirim'];
        $ktp  = $data['ktp'];
        $alamat_kirim  = $data['alamat_kirim'];

        $validatedData = $request->validate([
            'jenis_kelamin' => ['required', 'max:254'],
            'pekerjaan' => ['required', 'max:254'],
            'mewakili' => ['required',  'max:254'],
            'jenis_pelayanan' => ['required',  'max:254'],
            'mudah_dipahami' => ['required',  'max:254'],
            'waktu' => ['required',  'max:254'],
            'biaya' => ['required',  'max:254'],
            'standar_pelayanan' => ['required',  'max:254'],
            'kopetensi' => ['required',  'max:254'],
            'sikap_petugas' => ['required',  'max:254'],
            'fasilitas' => ['required',  'max:254'],
            'pengguna_layanan' => ['required',  'max:254'],
            'kritik_saran' => ['required',  'max:254'],

        ]);
        DB::beginTransaction();
        try {
            Kalatirta::create([
                'nama' => $nama,
                'alamat' => $alamat,
                'nohp' => $nohp,
                'email' => $email,
                'pekerjaan' => $pekerjaan,
                'alamatkantor' => $alamatkantor,
                'tujuan' => $tujuan,
                'informasi' => $informasi,
                'memperoleh' => $memperoleh,
                'mengirim' => $mengirim,
                'ktp' => $ktp,
                'alamat_kirim' => $alamat_kirim,
            ]);
            Survey::create($validatedData);
            DB::commit();

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
    public function show1()
    {
        $data = Kalatirta::latest()->get();
        return view('content.kalatirta.show', [
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
    public function destroy(string $id)
    {
        $kalatirta = Kalatirta::findOrFail($id);
        try {
            $kalatirta->delete();
            return redirect()->back()->with('success', 'Berhasil Menghapus Data');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
