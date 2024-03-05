@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-3">Perencanaan Pola WS dan RPSDA</h5>
                <form method="post" action="/balai/bbwsserayuopak/dashboard/perencanaan/pola-ws-dan-rpsda"
                    enctype="multipart/form-data">
                    @csrf

                    <x-input nama="nama" judul="Nama" nilai="" />
                    <div class="mt-3">
                        <label for="jenis" class="form-label">Jenis Informasi</label>
                        <select class="form-select" aria-label="Default select example" name="jenis" id="jenis">
                            <option value="" @if (old('jenis') == '') selected @endif disabled>Kategori
                            </option>
                            <option value="Pola" @if (old('jenis') == 'Pola') selected @endif>Pola Wilayah Sungai
                            </option>
                            <option value="RPSDA" @if (old('jenis') == 'RPSDA') selected @endif>RPSDA</option>
                        </select>
                    </div>

                    <x-garis />

                    {{-- <x-I_pdf nama="url_pdf" judul="File Pdf" nilai="" /> --}}

                    <div class="mt-3 mb-3">
                        <label for="url_pdf">PDF</label>
                        <input type="file" class="form-control" id="url_pdf" name="url_pdf" accept=".pdf">
                        <h6>PDF Max 5 MB</h6>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <x-notif />
@endsection
