@extends('layout.dashboard.main')
@section('container')
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-3">Berita</h5>
            <form method="POST" action="/balai/bbwsserayuopak/dashboard/beritas/{{ $berita->id }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                    <x-input nama="judul" judul="judul" nilai="{{ $berita->judul }}" />
                    <x-slug judul="judul" nilai="{{ $berita->slug }}" rute="beritas" />

                    <div class="mb-3">
                        <div style="z-index: 999">
                            <textarea id="body" name="body" style="width: 100px;">{{ old('body', $berita->body) }}</textarea>
                        </div>
                    </div>

                    <x-garis />
                    <x-i_img nama="url_foto" judul="Foto Berita" nilai="{{ $berita->url_foto }}" />

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

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
    <x-notif />
@endsection
