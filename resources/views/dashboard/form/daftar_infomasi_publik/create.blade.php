@extends('layout.dashboard.main')
@section('container')
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <style>
        .card {
            max-width: 100%;
            overflow-x: auto;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.);
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 8px 12px rgba(230, 138, 38, 1);
        }

        .line {
            border-top: 1px solid rgba(230, 138, 38, 1);
            margin: 10px 0;
        }
    </style>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-3">Daftar Informasi Publik</h5>
                {{-- <div class="card"> --}}
                {{-- <div class="card-body"> --}}
                <form method="post" action="/dashboard/daftar-informasi-publik" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-3">
                        <label for="judul" class="form-label">Informasi Publik</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="nama"
                                value="{{ old('nama') }}" required>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="jenis" class="form-label">Informasi Publik</label>
                        <select class="form-select" aria-label="Default select example" name="jenis" id="jenis">
                            <option selected value="">Kategori Informasi</option>
                            <option value="serta">Serta Merta</option>
                            <option value="setiap-saat">Setiap Saat</option>
                            <option value="berkala">Berkala</option>
                        </select>
                    </div>
                    <div class="separator">
                        <br>
                        <p class="d-flex justify-content-center">Dokumen Pendukunng</p>
                        {{-- <p class="d-flex justify-content-center">Pilih Salah satu : Link / Dokumen</p> --}}
                        <div class="line"></div>
                    </div>

                    {{-- <div class="mb-3">
                        <label for="link" class="form-label">Link</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="link" name="link"
                                placeholder="link jika ada" value="{{ old('link') }}">

                        </div>
                    </div> --}}

                    <div class="mt-3 mb-3">
                        <label for="url_file">PDF</label>
                        <input type="file" class="form-control" id="url_file" name="url_file"
                            accept="image/*, image/png, image/gif, application/pdf">
                        <h6>PDF Max 5 MB</h6>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                {{--
                </div> --}}
                {{-- </div> --}}
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (Session::has('success'))
                iziToast.success({
                    title: 'Success',
                    message: '{{ Session::get('success') }}',
                    position: 'topRight',
                });
            @endif
            @if (Session::has('fail'))
                iziToast.warning({
                    title: 'Warning',
                    message: '{{ Session::get('fail') }}',
                    position: 'topRight',
                });
            @endif
        });
    </script>
{{-- 
    <script>
        const nama = document.querySelector('#nama');
        const slug = document.querySelector('#slug');

        nama.addEventListener('change', function() {
            fetch('/dashboard/infrastruktur/bendungans/checkSlug?nama=' + nama.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script> --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const linkInput = document.getElementById('link');
            const fileInput = document.getElementById('url_file');

            linkInput.addEventListener('input', function() {
                if (linkInput.value.trim() !== '') {
                    fileInput.disabled = true;
                } else {
                    fileInput.disabled = false;
                }
            });

            fileInput.addEventListener('input', function() {
                if (fileInput.files.length > 0) {
                    linkInput.disabled = true;
                } else {
                    linkInput.disabled = false;
                }
            });
        });
    </script>
@endsection
