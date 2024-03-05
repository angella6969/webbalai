@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-3">Pola WS dan RPSDA</h5>
                <form method="post"
                    action="/balai/bbwsserayuopak/dashboard/perencanaan/rencana-strategis/{{ $rencana_starategis->id }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <x-input nama="nama" judul="Nama" nilai="{{ $rencana_strategis->nama }}" />
                    <x-garis />

                    <x-I_pdf nama="url_pdf" judul="File Pdf" nilai="{{ $rencana_strategis->url_pdf }}" />

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <x-notif />
@endsection
