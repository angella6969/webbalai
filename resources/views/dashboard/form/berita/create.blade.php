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
            <h5 class="card-title fw-semibold mb-3">Berita</h5>
            {{-- <div class="card"> --}}
                {{-- <div class="card-body"> --}}
                    <form method="post" action="/dashboard/beritas/" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-3">
                            <label for="judul" class="form-label">judul</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="judul"
                                    value="{{ old('judul') }}" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="input-group">
                                <input type="text" class="form-control" hidden readonly id="slug" name="slug"
                                    placeholder="slug" value="{{ old('slug') }}" required>
                            </div>
                        </div>
                        {{-- <div class="mb-3">
                            <div style="z-index: 999">
                                <textarea id="body" name="body" style="width: 100px;"
                                    value="{{ old('body') }}"></textarea>
                            </div>
                        </div> --}}
                        <x-ck />
                        <div class="separator">
                            <br>
                            <p class="d-flex justify-content-center">Dokumen Pendukunng</p>
                            <div class="line"></div>
                        </div>


                        {{-- <div class="mt-3 mb-3">
                            <label for="url_foto">Foto</label>
                            <input type="file" class="form-control" id="url_foto" name="url_foto"
                                accept="image/*, image/png, image/gif, application/pdf">
                            <h6>PDF Max 5 MB</h6>
                        </div> --}}

                        <div class="mt-3 mb-3">
                            <label for="url_foto">Foto Beranda</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <input type="file" class="form-control @error('url_foto') is-invalid @enderror"
                                id="url_foto" onchange="previewImage()" name="url_foto"
                                accept="image/*, image/png, image/gif,image/sml+svg">
                            <h6>Photo Max 5 MB</h6>

                            @if ($errors->has('url_foto'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('url_foto') }}</strong>
                            </span>
                            @endif
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
    function previewImage() {

            const image = document.querySelector('#url_foto');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();

            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
</script>
{{-- <script>
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
</script> --}}

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

<script>
    const judul = document.querySelector('#judul');
        const slug = document.querySelector('#slug');

        judul.addEventListener('change', function() {
            fetch('/dashboard/beritas/checkSlug?judul=' + judul.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
</script>
@endsection