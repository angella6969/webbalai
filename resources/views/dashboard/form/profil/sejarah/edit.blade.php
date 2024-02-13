@extends('layout.dashboard.main')
@section('container')
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-3">Sejarah BBWS Serayu Opak</h5>
                <form method="post" action="/dashboard/profil/sejarah/{{ $sejarah->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <div style="z-index: 999">
                            <textarea id="body" name="body" style="width: 100px;" hidden>{{ old('body', $sejarah->body) }}</textarea>
                        </div>
                    </div>


                    <x-garis />

                    <x-i_img nama="url_foto1" judul="Foto Sejarah 1" nilai="{{ $sejarah->url_foto1 }}" />
                    {{-- <x-i_img nama="url_foto2" judul="Foto Sejarah 2" nilai="{{ $sejarah->url_foto2 }}" />
                    <x-i_img nama="url_foto3" judul="Foto Sejarah 3" nilai="{{ $sejarah->url_foto3 }}" />
                    <x-i_img nama="url_foto4" judul="Foto Sejarah 4" nilai="{{ $sejarah->url_foto4 }}" /> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <x-notif />
    <script>
        ClassicEditor
            .create(document.querySelector('#body'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'blockQuote', 'redo', '|',
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
