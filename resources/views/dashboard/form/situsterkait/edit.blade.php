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
            <h5 class="card-title fw-semibold mb-3">update Situs Terkait</h5>
            <form method="post" action="/dashboard/situs-terkait" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="url_situs" class="form-label">Link</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="url_situs" name="url_situs"
                            placeholder="url situs jika ada" value="{{ old('url_situs',$situsterkaits->url_situs) }}">

                    </div>
                </div>

                <div class="mt-3 mb-3">
                    <label for="image">Foto Beranda</label>
                    <input type="hidden" name="oldImage" id="oldImage" value="{{ $situsterkaits->image }}">

                    @if ($situsterkaits->image)
                    <img src="{{ asset('storage/' . substr($situsterkaits->image,6)) }}"
                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    @endif

                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                        onchange="previewImage()" name="image" accept="image/*, image/png, image/gif">
                    <h6>Photo Max 5 MB</h6>

                    @if ($errors->has('image'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<script>
    function previewImage() {

            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();

            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
</script>
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

{{-- <script>
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
</script> --}}
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