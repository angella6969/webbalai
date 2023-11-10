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
            <h5 class="card-title fw-semibold mb-3">Infrastruktur bendungan</h5>
            {{-- <div class="card"> --}}
                {{-- <div class="card-body"> --}}
                    <form method="post" action="/dashboard/infrastruktur/bendungan" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-3">
                            <label for="judul" class="form-label">Nama</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="nama"
                                    value="{{ old('nama') }}" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="input-group">
                                <input type="text" class="form-control" readonly id="slug" name="slug"
                                    placeholder="slug" value="{{ old('slug') }}" required>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="lokasi" class="form-label">lokasi</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="lokasi"
                                    value="{{ old('lokasi') }}" required>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="wilaya_sungai" class="form-label">wilaya_sungai</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="wilaya_sungai" name="wilaya_sungai"
                                    placeholder="wilaya_sungai" value="{{ old('wilaya_sungai') }}" required>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="daerah_sliran_sungai" class="form-label">daerah_sliran_sungai</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="daerah_sliran_sungai"
                                    name="daerah_sliran_sungai" placeholder="daerah_sliran_sungai"
                                    value="{{ old('daerah_sliran_sungai') }}" required>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="tahun_mulai_pembangunan" class="form-label">tahun_mulai_pembangunan</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="tahun_mulai_pembangunan"
                                    name="tahun_mulai_pembangunan" placeholder="tahun_mulai_pembangunan"
                                    value="{{ old('tahun_mulai_pembangunan') }}" required>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="tahun_selesai_pembangunan" class="form-label">tahun_selesai_pembangunan</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="tahun_selesai_pembangunan"
                                    name="tahun_selesai_pembangunan" placeholder="tahun_selesai_pembangunan"
                                    value="{{ old('tahun_selesai_pembangunan') }}" required>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="tipe_bendungan" class="form-label">tipe_bendungan</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="tipe_bendungan" name="tipe_bendungan"
                                    placeholder="tipe_bendungan" value="{{ old('tipe_bendungan') }}" required>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="tinggi_dasar_sungai" class="form-label">tinggi_dasar_sungai</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="tinggi_dasar_sungai"
                                    name="tinggi_dasar_sungai" placeholder="tinggi_dasar_sungai"
                                    value="{{ old('tinggi_dasar_sungai') }}" required>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="panjang_puncak" class="form-label">panjang_puncak</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="panjang_puncak" name="panjang_puncak"
                                    placeholder="panjang_puncak" value="{{ old('panjang_puncak') }}" required>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="lebar_puncak" class="form-label">lebar_puncak</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="lebar_puncak" name="lebar_puncak"
                                    placeholder="lebar_puncak" value="{{ old('lebar_puncak') }}" required>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="elevasi_puncak" class="form-label">elevasi_puncak</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="elevasi_puncak" name="elevasi_puncak"
                                    placeholder="elevasi_puncak" value="{{ old('elevasi_puncak') }}" required>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="volume_tampung_normal" class="form-label">volume_tampung_normal</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="volume_tampung_normal"
                                    name="volume_tampung_normal" placeholder="volume_tampung_normal"
                                    value="{{ old('volume_tampung_normal') }}" required>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="volume_tampung_total" class="form-label">volume_tampung_total</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="volume_tampung_total"
                                    name="volume_tampung_total" placeholder="volume_tampung_total"
                                    value="{{ old('volume_tampung_total') }}" required>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="irigasi" class="form-label">irigasi</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="irigasi" name="irigasi"
                                    placeholder="irigasi" value="{{ old('irigasi') }}" required>
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


                        <div class="mt-3 mb-3">
                            <label for="url_foto1">Foto</label>
                            <input type="file" class="form-control" id="url_foto1" name="url_foto1"
                                accept="image/*, image/png, image/gif, application/pdf">
                            <h6>PDF Max 5 MB</h6>
                        </div>
                        <div class="mt-3 mb-3">
                            <label for="url_foto2">Foto</label>
                            <input type="file" class="form-control" id="url_foto2" name="url_foto2"
                                accept="image/*, image/png, image/gif, application/pdf">
                            <h6>PDF Max 5 MB</h6>
                        </div>
                        <div class="mt-3 mb-3">
                            <label for="url_foto3">Foto</label>
                            <input type="file" class="form-control" id="url_foto3" name="url_foto3"
                                accept="image/*, image/png, image/gif, application/pdf">
                            <h6>PDF Max 5 MB</h6>
                        </div>
                        <div class="mt-3 mb-3">
                            <label for="url_foto4">Foto</label>
                            <input type="file" class="form-control" id="url_foto4" name="url_foto4"
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
    const nama = document.querySelector('#nama');
        const slug = document.querySelector('#slug');

        nama.addEventListener('change', function() {
            fetch('/dashboard/infrastruktur/bendungans/checkSlug?nama=' + nama.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
</script>
@endsection