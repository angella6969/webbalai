@extends('layout.dashboard.main')
@section('container')
<style>
    .table {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        /* Atur bayangan tabel */
        transition: box-shadow 0.3s ease;
        /* Efek transisi saat bayangan berubah */
    }

    .table:hover {
        box-shadow: 0 8px 12px rgba(230, 138, 38, 0.9);
        /* Bayangan saat cursor dihover */
    }

    .table th,
    .table td {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 250px;
        vertical-align: top;
        padding: 5px;
    }

    .card {
        max-width: 100%;
        overflow-x: auto;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.);
        transition: box-shadow 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 8px 12px rgba(230, 138, 38, 1);
    }

    .button1:hover {
        box-shadow: 0 8px 12px rgba(92, 133, 251, 1);
    }

    .input-group:hover input[type="text"] {}

    .common-button-style {
        width: 100px;
        height: 35px;
        margin: 5px;

    }
</style>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Media Informasi</h5>
            <form action="/dashboard/media/media-informasi">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control " placeholder="Pencarian Berdasarkan Judul"
                                name="search" value="{{ request('search') }}">
                            <button class="btn btn-primary " type="submit" id="basic-addon2"><span
                                    data-feather="search"></span></button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="mt-2 mb-2">
                <a href="/dashboard/media/media-informasi/create" class="btn btn-info">Tambah Data</a>
            </div>
            <div class="table-responsive-sm">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr style="text-align: center;">
                            <th scope="col">No</th>
                            <th scope="col">nama </th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Infografiss as $Infografis)
                        <tr style="text-align: center;">
                            <td> {{ $loop->iteration }}</td>
                            <td> {{ $Infografis->nama }}</td>
                            <td> <img style="height: 150px" src={{ asset('storage/' . substr($Infografis->url_foto1, 6))
                                }} alt="">
                            </td>
                            <td>
                                <a href="/dashboard/media/media-informasi/{{ $Infografis->id }}/edit"
                                    class="bg badge bg-warning"><span data-feather="edit">
                                    </span></a>

                                <form action="/dashboard/media/media-informasi/{{ $Infografis->id }}" class="d-inline "
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn badge bg-danger show-DI-modal "
                                        onclick="return confirm('Yakin Ingin Menghapus Data yang berhubungan dengan? {{ $Infografis->nama }}')"><span
                                            data-feather="file-minus"></span> </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<x-notif />

{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {

            @if (Session::has('success'))
                iziToast.success({
                    title: 'Success',
                    message: '{{ Session::get('success') }}',
                    position: 'bottomRight',
                });
            @endif
            @if (Session::has('fail'))
                iziToast.warning({
                    title: 'Warning',
                    message: '{{ Session::get('fail') }}',
                    position: 'bottomRight',
                });
            @endif
        });
</script> --}}
@endsection