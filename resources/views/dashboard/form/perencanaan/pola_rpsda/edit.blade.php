@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-3">Pola WS dan RPSDA</h5>
                <form method="post" action="/dashboard/perencanaan/pola-ws-dan-rpsda/{{ $rpsda->id }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <x-input nama="nama" judul="Nama" nilai="{{ $rpsda->nama }}" />
                    <div class="mt-3">
                        <label for="jenis" class="form-label">Jenis Informasi</label>
                        <select class="form-select" aria-label="Default select example" name="jenis" id="jenis">
                            <option value="" @if (old('jenis', $rpsda->jenis) == '') selected @endif disabled>Kategori
                            </option>
                            <option value="Pola" @if (old('jenis', $rpsda->jenis) == 'Pola') selected @endif>Pola</option>
                            <option value="RPSDA" @if (old('jenis', $rpsda->jenis) == 'RPSDA') selected @endif>RPSDA</option>
                        </select>
                    </div>

                    <x-garis />

                    <x-I_pdf nama="url_pdf" judul="File Pdf" nilai="{{ $rpsda->url_pdf }}" />

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <x-notif />
@endsection
