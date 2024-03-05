@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-3">Perencanaan Rencana Strategis</h5>
                <form method="post" action="/balai/bbwsserayuopak/dashboard/perencanaan/rencana-strategis"
                    enctype="multipart/form-data">
                    @csrf

                    <x-input nama="nama" judul="Nama" nilai="" />
                    <x-garis />

                    {{-- <x-I_pdf nama="url_pdf" judul="File Pdf" nilai="" /> --}}

                    <div class="mt-3 mb-3">
                        <label for="url_pdf">PDF</label>
                        <input type="file" class="form-control" id="url_pdf" name="url_pdf"
                            accept=".pdf">
                        <h6>PDF Max 5 MB</h6>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <x-notif />
@endsection
