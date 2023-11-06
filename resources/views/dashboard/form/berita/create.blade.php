@extends('layout.dashboard.main')
@section('container')
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
            <h5 class="card-title fw-semibold mb-4">Berita</h5>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="/dashboard/beritas/store" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="judul" class="form-label">judul</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="judul"
                                    value="{{ old('judul') }}" required>

                            </div>
                        </div>
                        <div class="mb-3">
                            {{-- <label for="slug" class="form-label">slug</label> --}}
                            <div class="input-group">
                                <input type="text" class="form-control" disabled id="slug" name="slug"
                                    placeholder="slug" value="{{ old('slug') }}" required>

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">body</label>
                            <input id="body" type="hidden" name="body">
                            <trix-editor input="body"></trix-editor>


                            {{-- <div class="input-group">
                                <input type="text" class="form-control" id="body" name="body" placeholder="body"
                                    value="{{ old('body') }}" required>

                            </div> --}}
                        </div>
                        <div class="separator">
                            <br>
                            <p class="d-flex justify-content-center">Dokumen Pendukunng</p>
                            <div class="line"></div>
                        </div>

                        {{-- <div class="mb-3">
                            <label for="Pengumuman" class="form-label">Link</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="url_pengumuman" name="url_pengumuman"
                                    placeholder="link pengumuman  jika ada" value="{{ old('url_pengumuman') }}">

                            </div>
                        </div> --}}



                        <div class="mt-3 mb-3">
                            <label for="url_foto">Foto</label>
                            <input type="file" class="form-control" id="url_foto" name="url_foto"
                                accept="image/*, image/png, image/gif, application/pdf">
                            <h6>PDF Max 5 MB</h6>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div>
    <div class="owl-item" style="width: 305.356px; margin-right: 30px;" tabindex="-1" aria-hidden="true">
        <div class="appear-animation animated fadeInLeftShorter appear-animation-visible"
            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
            <article class="card rounded border-0 p-0">

                <a
                    href="https://pu.go.id/berita/sistem-pengelolaan-air-limbah-domestik-kota-palembang-diresmikan-tingkatkan-kesehatan-masyarakat-dan-kualitas-lingkungan"><img
                        src="https://pu.go.id/assets/front/img/blogs/sistem-pengelolaan-air-limbah-domestik-kota-palembang-diresmikan-tingkatkan-kesehatan-masyarakat-dan-kualitas-lingkungan-IMG-20231026-WA0180.jpg"
                        class="card-img-top hover-effect-2" alt="" style="height: 200px;object-fit: none;"></a>

                <div class="card-body">
                    <h3 class="font-weight-bold text-4 mb-1"><a
                            href="https://pu.go.id/berita/sistem-pengelolaan-air-limbah-domestik-kota-palembang-diresmikan-tingkatkan-kesehatan-masyarakat-dan-kualitas-lingkungan"
                            class="link-color-dark">Sistem Pengelolaan Air Limbah Domestik Kota Palembang Diresmikan,
                            Tingkatkan Kesehatan Masyarakat dan Kualitas Lingkungan</a></h3>
                    <span class="text-color-dark mb-3"><i class="far fa-clock text-color-primary"></i>
                        26 Oktober 2023 </span>
                </div>
            </article>
        </div>
    </div>
</div> --}}
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

judul.addEventListener('input', function() {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const judulValue = judul.value;

    // Jika judul kosong, clear input slug
    if (judulValue === '') {
        slug.value = '';
        return; // Keluar dari event handler
    }

    fetch('/dashboard/beritas/checkSlug', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken,
        },
        body: JSON.stringify({ judul: judulValue }),
    })
    .then(response => response.json())
    .then(data => slug.value = data.slug);
});



document.addEventListener('trix-file-accept'. function (e) {
    e.preventDefault();
})
</script>

{{-- <script>
    // Ambil elemen-elemen yang diperlukan
        const TahunPengerjaan = document.getElementById('TahunPengerjaan');
        const inputLainnyaTahunPengerjaan = document.getElementById('inputLainnyaTahunPengerjaan');

        // Tambahkan event listener untuk memantau perubahan pada select
        TahunPengerjaan.addEventListener('change', function() {
            if (TahunPengerjaan.value === 'lainnya') {
                inputLainnyaTahunPengerjaan.style.display = 'block';
            } else {
                inputLainnyaTahunPengerjaan.style.display = 'none';
            }
        });

        const metodeLangsir = document.getElementById('metodeLangsir');
        const inputLainnyaMetode = document.getElementById('inputLainnyaMetode');
        const pilihanLainnyaMetode = document.getElementById('pilihanLainnyaMetode');

        metodeLangsir.addEventListener('change', function() {
            if (metodeLangsir.value === 'lainnya') {
                inputLainnyaMetode.style.display = 'block';
                pilihanLainnyaMetode.required = true;
            } else {
                inputLainnyaMetode.style.display = 'none';
                pilihanLainnyaMetode.required = false;
            }
        });

        const kondisiLokasiPekerjaan = document.getElementById('KondisiLokasiPekerjaan');
        const inputLainnyaKondisiLokasiPekerjaan = document.getElementById('inputLainnyaKondisiLokasiPekerjaan');
        const pilihanLainnyaKondisiLokasiPekerjaan = document.getElementById('pilihanLainnyaKondisiLokasiPekerjaan');

        kondisiLokasiPekerjaan.addEventListener('change', function() {
            if (kondisiLokasiPekerjaan.value === 'lainnya') {
                inputLainnyaKondisiLokasiPekerjaan.style.display = 'block';
                pilihanLainnyaKondisiLokasiPekerjaan.required = true;
            } else {
                inputLainnyaKondisiLokasiPekerjaan.style.display = 'none';
                pilihanLainnyaKondisiLokasiPekerjaan.required = false;
            }
        });

        const kondisiTanahLokasiPekerjaan = document.getElementById('KondisiTanahLokasiPekerjaan');
        const inputLainnyaKondisiTanahLokasiPekerjaan = document.getElementById('inputLainnyaKondisiTanahLokasiPekerjaan');
        const pilihanLainnyaKondisiTanahLokasiPekerjaan = document.getElementById(
            'pilihanLainnyaKondisiTanahLokasiPekerjaan');

        kondisiTanahLokasiPekerjaan.addEventListener('change', function() {
            if (kondisiTanahLokasiPekerjaan.value === 'lainnya') {
                inputLainnyaKondisiTanahLokasiPekerjaan.style.display = 'block';
                pilihanLainnyaKondisiTanahLokasiPekerjaan.required = true;
            } else {
                inputLainnyaKondisiTanahLokasiPekerjaan.style.display = 'none';
                pilihanLainnyaKondisiTanahLokasiPekerjaan.required = false;
            }
        });

        const potensiMasalahSosial = document.getElementById('PotensiMasalahSosial');
        const inputLainnyaPotensiMasalahSosial = document.getElementById('inputLainnyaPotensiMasalahSosial');
        const pilihanLainnyaPotensiMasalahSosial = document.getElementById('pilihanLainnyaPotensiMasalahSosial');

        potensiMasalahSosial.addEventListener('change', function() {
            if (potensiMasalahSosial.value === 'lainnya') {
                inputLainnyaPotensiMasalahSosial.style.display = 'block';
                pilihanLainnyaPotensiMasalahSosial.required = true;
            } else {
                inputLainnyaPotensiMasalahSosial.style.display = 'none';
                pilihanLainnyaPotensiMasalahSosial.required = false;
            }
        });
</script>

<script>
    function addNamaField() {
            var namaContainer = document.getElementById('nama-container');
            var inputGroup = document.createElement('div');
            inputGroup.className = 'input-group mb-3';

            var input = document.createElement('input');
            input.type = 'text';
            input.className = 'form-control';
            input.name = 'names[]';
            input.placeholder = 'Nama';

            var appendDiv = document.createElement('div');
            appendDiv.className = 'input-group-append';

            var removeButton = document.createElement('button');
            removeButton.className = 'btn btn-outline-secondary';
            removeButton.type = 'button';
            removeButton.textContent = '-';
            removeButton.onclick = function() {
                namaContainer.removeChild(inputGroup);
            };

            appendDiv.appendChild(removeButton);
            inputGroup.appendChild(input);
            inputGroup.appendChild(appendDiv);
            namaContainer.appendChild(inputGroup);
        }
</script> --}}

{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
            const urlPengumumanInput = document.getElementById('url_pengumuman');
            const dokumenInput = document.getElementById('dokumen');

            urlPengumumanInput.addEventListener('input', function() {
                if (urlPengumumanInput.value.trim() !== '') {
                    dokumenInput.disabled = true;
                } else {
                    dokumenInput.disabled = false;
                }
            });

            dokumenInput.addEventListener('input', function() {
                if (dokumenInput.files.length > 0) {
                    urlPengumumanInput.disabled = true;
                } else {
                    urlPengumumanInput.disabled = false;
                }
            });
        });
</script> --}}
@endsection