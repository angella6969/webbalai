@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Situs Terkait</h5>
                <form action="/balai/bbwsserayuopak/dashboard/situs-terkait">
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
                    <a href="/balai/bbwsserayuopak/dashboard/situs-terkait/create" class="btn btn-info">Tambah situs</a>
                </div>
                <div class="table-responsive-sm">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr style="text-align: center;">
                                <th scope="col">No</th>
                                <th scope="col">image </th>
                                <th scope="col">Url</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($situss as $situs)
                                <tr style="text-align: center;">
                                    <td> {{ $loop->iteration }}</td>
                                    <td> <img style="height: 150px" src={{ asset('storage/' . substr($situs->image, 6)) }}
                                            alt="">
                                    </td>
                                    <td> {{ $situs->url_situs }}</td>

                                    <td>
                                        <a href="/balai/bbwsserayuopak/dashboard/situs-terkait/{{ $situs->id }}/edit"
                                            class="bg badge bg-warning"><span data-feather="edit">
                                            </span></a>

                                        <form action="/balai/bbwsserayuopak/dashboard/situs-terkait/{{ $situs->id }}"
                                            class="d-inline " method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn badge bg-danger show-DI-modal "
                                                onclick="return confirm('Yakin Ingin Menghapus Data yang berhubungan dengan? {{ $situs->judul }}')"><span
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
