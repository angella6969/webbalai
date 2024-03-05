@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Tambah Media Informasi</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="/balai/bbwsserayuopak/dashboard/media/media-informasi" enctype="multipart/form-data">
                            @csrf


                            <x-input nama="nama" judul="Nama a" nilai="" />
                            <x-slug judul="nama" nilai="" rute="media/media-informasi" />

                            <div class="mt-3">
                                <label for="jenis" class="form-label">Jenis Media Informasi</label>
                                <select class="form-select" aria-label="Default select example" name="jenis"
                                    id="jenis">
                                    <option value="" {{ old('jenis') == '' ? 'selected' : '' }}>Kategori</option>
                                    <option value="Majalah" {{ old('jenis') == 'Majalah' ? 'selected' : '' }}>Majalah
                                    </option>
                                    <option value="Leaflet" {{ old('jenis') == 'Leaflet' ? 'selected' : '' }}>Leaflet
                                    </option>
                                    <option value="Infografis" {{ old('jenis') == 'Infografis' ? 'selected' : '' }}>
                                        Infografis</option>
                                </select>
                            </div>

                            <x-garis />

                            <x-i_img nama="url_foto1" judul="File" nilai="" />
                            <x-i_img nama="url_foto2" judul="File" nilai="" />
                            <x-i_img nama="url_foto3" judul="File" nilai="" />



                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-notif />
@endsection
