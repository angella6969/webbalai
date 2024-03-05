@extends('layout.dashboard.main')
@section('container')
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

<link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-3">Infrastruktur Bendung</h5>
            <form method="post" action="/balai/bbwsserayuopak/dashboard/infrastruktur/bendungs/{{ $bendung->id }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <x-input nama="nama" judul="Nama" nilai="{{ $bendung->nama }}" />
                <x-slug judul="nama" nilai="{{ $bendung->slug }}" rute="infrastruktur/bendungs" />

                <x-input nama="lokasi" judul="Lokasi" nilai="{{ $bendung->lokasi }}" />
                <x-input nama="tahun_pembangunan" judul="tahun_pembangunan "
                    nilai="{{ $bendung->tahun_pembangunan }}" />

                <div class="mb-3">
                    <div style="z-index: 999">
                        <textarea id="body" name="body" style="width: 100px;"
                            hidden>{{ old('body', $bendung->body) }}</textarea>
                    </div>
                </div>

                <x-garis />

                <x-i_img nama="url_foto1" judul="Foto Berita" nilai="{{ $bendung->url_foto1 }}" />
                <x-i_img nama="url_foto2" judul="Foto Berita" nilai="{{ $bendung->url_foto2 }}" />
                <x-i_img nama="url_foto3" judul="Foto Berita" nilai="{{ $bendung->url_foto3 }}" />
                <x-i_img nama="url_foto4" judul="Foto Berita" nilai="{{ $bendung->url_foto4 }}" />
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<x-notif />
<script>
    ClassicEditor
            .create(document.querySelector('#body'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'numberedList', 'insertTable', 'blockQuote', 'redo', '|',
                    'undo'
                ],
                heading: {
                    options: [{
                            model: 'paragraph',
                            title: 'Paragraph',
                            class: 'ck-heading_paragraph'
                        },
                        {
                            model: 'heading1',
                            view: 'h1',
                            title: 'Heading 1',
                            class: 'ck-heading_heading1'
                        },
                        {
                            model: 'heading2',
                            view: 'h2',
                            title: 'Heading 2',
                            class: 'ck-heading_heading2'
                        }
                    ]
                }
            })
            .catch(error => {
                console.log(error);
            });
</script>
@endsection