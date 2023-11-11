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

    .input-group:hover input[type="text"] {
        /* border-color: #93fa0c; */
        /* Warna border saat dihover */
        /* box-shadow: 0 0 5px rgba(230, 138, 38, 1); */
        /* Efek bayangan saat dihover */
    }

    /* @media (max-width: 768px) {
                                                                                        td {
                                                                                            display: block;
                                                                                            text-align: center;
                                                                                        }

                                                                                        td button,
                                                                                        td a,
                                                                                        td form {
                                                                                            width: 100%;
                                                                                            margin: 5px 0;
                                                                                        }
                                                                                    } */
    .common-button-style {
        width: 100px;
        /* Atur lebar sesuai kebutuhan Anda */
        height: 35px;
        margin: 5px;
        /* Atur tinggi sesuai kebutuhan Anda */
        /* Gaya tambahan sesuai kebutuhan Anda */
    }
</style>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Infrastruktur</h5>
            <form action="/dashboard/infrastruktur/embungs">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control " placeholder="..." name="search"
                                value="{{ request('search') }}">
                            <button class="btn btn-primary " type="submit" id="basic-addon2"><span
                                    data-feather="search"></span></button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="mt-2 mb-2">
                <a href="/dashboard/infrastruktur/embungs/create" class="btn btn-info">Tambah Infrastruktur</a>
            </div>
            <div class="table-responsive-sm">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr style="text-align: center;">
                            <th scope="col">No</th>
                            <th scope="col">Nama </th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($embungs as $embung)
                        <tr style="text-align: center;">
                            <td> {{ $loop->iteration }}</td>
                            <td> {{ $embung->nama }}</td>
                            <td> {{ $embung->jenis }}</td>

                            <td>
                                <a href="/dashboard/infrastruktur/embungs/{{ $embung->id }}/edit"
                                    class="bg badge bg-warning"><span data-feather="edit">
                                    </span></a>

                                <form action="/dashboard/infrastruktur/embungs{{ $embung->id }}" class="d-inline "
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn badge bg-danger show-DI-modal "
                                        onclick="return confirm('Yakin Ingin Menghapus Data yang berhubungan dengan? {{ $embung->nama }}')"><span
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

@endsection