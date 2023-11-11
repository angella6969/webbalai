@extends('layout.dashboard.main')
@section('container')
<link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-3">Infrastruktur bendungan</h5>
            <form method="post" action="/dashboard/infrastruktur/bendungans" enctype="multipart/form-data">
                @csrf

                <x-input nama="nama" judul="Nama" nilai="" />
                <x-slug judul="nama" nilai="" />

                <x-input nama="lokasi" judul="Lokasi" nilai="" />
                <x-input nama="wilaya_sungai" judul="Wilaya Sungai" nilai="" />
                <x-input nama="daerah_sliran_sungai" judul="daerah_sliran_sungai " nilai="" />
                <x-input nama="tahun_mulai_pembangunan" judul="tahun_mulai_pembangunan " nilai="" />
                <x-input nama="tahun_selesai_pembangunan" judul="tahun_selesai_pembangunan " nilai="" />
                <x-input nama="tipe_bendungan" judul="tipe_bendungan " nilai="" />
                <x-input nama="tinggi_dasar_sungai" judul="tinggi_dasar_sungai " nilai="" />
                <x-input nama="panjang_puncak" judul="panjang_puncak " nilai="" />
                <x-input nama="lebar_puncak" judul="lebar_puncak " nilai="" />
                <x-input nama="elevasi_puncak" judul="elevasi_puncak " nilai="" />
                <x-input nama="volume_tampung_normal" judul="volume_tampung_normal " nilai="" />
                <x-input nama="volume_tampung_total" judul="volume_tampung_total " nilai="" />

                <x-ck body="body" nilai="" />

                <x-garis />

                <x-i_img nama="url_foto1" judul="Foto Berita" nilai="" img="Foto1" />
                <x-i_img nama="url_foto2" judul="Foto Berita" nilai="" img="Foto2" />
                <x-i_img nama="url_foto3" judul="Foto Berita" nilai="" img="Foto3" />
                <x-i_img nama="url_foto4" judul="Foto Berita" nilai="" img="Foto4" />

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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

{{-- <script>
    const nama = document.querySelector('#nama');
        const slug = document.querySelector('#slug');

        nama.addEventListener('change', function() {
            fetch('/dashboard/infrastruktur/bendungans/checkSlug?nama=' + nama.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
</script> --}}
@endsection