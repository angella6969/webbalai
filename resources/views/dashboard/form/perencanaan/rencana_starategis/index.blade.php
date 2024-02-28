@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Daftar Rencana Strategis</h5>
                <form action="/dashboard/perencanaan/rencana-strategis">
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
                    <a href="/dashboard/perencanaan/rencana-strategis/create" class="btn btn-info">Tambah Rencana</a>
                </div>
                <div class="table-responsive-sm">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr style="text-align: center;">
                                <th scope="col">No</th>
                                <th scope="col">Nama </th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rencana_starategiss as $rencana_starategis)
                                <tr style="text-align: center;">
                                    <td> {{ $loop->iteration }}</td>
                                    <td> {{ $rencana_starategis->nama }}</td>

                                    <td>
                                        <a href="/dashboard/perencanaan/rencana-strategis/{{ $rencana_starategis->id }}/edit"
                                            class="bg badge bg-warning"><span data-feather="edit">
                                            </span></a>

                                        <form
                                            action="/dashboard/perencanaan/rencana-strategis/{{ $rencana_starategis->id }}"
                                            class="d-inline " method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn badge bg-danger show-DI-modal "
                                                onclick="return confirm('Yakin Ingin Menghapus Data yang berhubungan dengan? {{ $rencana_starategis->nama }}')"><span
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
