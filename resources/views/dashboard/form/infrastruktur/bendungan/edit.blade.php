@extends('layout.dashboard.main')
@section('container')
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-3">Infrastruktur bendungan</h5>
            <form method="post" action="{{ route('bendungans.update', ['bendungan' => $bendungan->id]) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <x-input nama="nama" judul="Nama" nilai="{{ $bendungan->nama }}" />
                <x-slug judul="nama" nilai="{{ $bendungan->slug }}" rute="infrastruktur/bendungans" />

                <x-input nama="lokasi" judul="Lokasi" nilai="{{ $bendungan->lokasi }}" />
                <x-input nama="wilaya_sungai" judul="Wilaya Sungai" nilai="{{ $bendungan->wilaya_sungai }}" />
                <x-input nama="daerah_sliran_sungai" judul="daerah_sliran_sungai "
                    nilai="{{ $bendungan->daerah_sliran_sungai }}" />
                <x-input nama="tahun_mulai_pembangunan" judul="tahun_mulai_pembangunan "
                    nilai="{{ $bendungan->tahun_mulai_pembangunan }}" />
                <x-input nama="tahun_selesai_pembangunan" judul="tahun_selesai_pembangunan "
                    nilai="{{ $bendungan->tahun_selesai_pembangunan }}" />
                <x-input nama="tipe_bendungan" judul="tipe_bendungan " nilai="{{ $bendungan->tipe_bendungan }}" />
                <x-input nama="tinggi_dasar_sungai" judul="tinggi_dasar_sungai "
                    nilai="{{ $bendungan->tinggi_dasar_sungai }}" />
                <x-input nama="panjang_puncak" judul="panjang_puncak " nilai="{{ $bendungan->panjang_puncak }}" />
                <x-input nama="lebar_puncak" judul="lebar_puncak " nilai="{{ $bendungan->lebar_puncak }}" />
                <x-input nama="elevasi_puncak" judul="elevasi_puncak " nilai="{{ $bendungan->elevasi_puncak }}" />
                <x-input nama="volume_tampung_normal" judul="volume_tampung_normal "
                    nilai="{{ $bendungan->volume_tampung_normal }}" />
                <x-input nama="volume_tampung_total" judul="volume_tampung_total "
                    nilai="{{ $bendungan->volume_tampung_total }}" />

                <div class="mb-3">
                    <div style="z-index: 999">
                        <textarea id="body" name="body" style="width: 100px;"
                            hidden>{{ old('body', $bendungan->body) }}</textarea>
                    </div>
                </div>

                <x-garis />

                <x-i_img nama="url_foto1" judul="Foto Berita" nilai="{{ $bendungan->url_foto1 }}" />
                <x-i_img nama="url_foto2" judul="Foto Berita" nilai="{{ $bendungan->url_foto2 }}" />
                <x-i_img nama="url_foto3" judul="Foto Berita" nilai="{{ $bendungan->url_foto3 }}" />
                <x-i_img nama="url_foto4" judul="Foto Berita" nilai="{{ $bendungan->url_foto4 }}" />

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