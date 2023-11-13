<label for="{{ $nama }}">{{ $judul }}</label>
<input type="hidden" name="oldPdf" id="oldPdf" value="{{ $nilai }}">

@if ($nilai)
    <!-- Tampilkan link ke PDF yang sudah ada -->
    <a href="{{ asset('storage/' . substr($nilai, 6)) }}" target="_blank">View PDF</a>
@else
    <!-- Tampilkan pesan jika tidak ada PDF yang sudah ada -->
    <p>No PDF uploaded</p>
@endif

<input type="file" class="form-control @error('$nama') is-invalid @enderror" id="{{ $nama }}"
    onchange="previewPdf('{{ $nama }}')" name="{{ $nama }}" accept="application/pdf">
<h6>PDF Max 5 MB</h6>

<script>
    function previewPdf(id) {
        const pdfInput = document.querySelector(`#${id}`);
        const oldPdfInput = document.querySelector('#oldPdf');

        // Hapus preview yang lama (jika ada)
        const oldPdfPreview = document.querySelector('#pdf-preview');
        if (oldPdfPreview) {
            oldPdfPreview.remove();
        }

        // Sembunyikan preview gambar (jika ada)
        const imgPreview = document.querySelector(`#img-preview-${id}`);
        if (imgPreview) {
            imgPreview.style.display = 'none';
        }

        // Sisipkan preview baru
        const pdfPreview = document.createElement('object');
        pdfPreview.data = URL.createObjectURL(pdfInput.files[0]);
        pdfPreview.width = '100%';
        pdfPreview.height = '500px';
        pdfPreview.id = 'pdf-preview'; // Pastikan ID preview baru unik

        // Masukkan preview baru setelah input file
        pdfInput.parentNode.insertBefore(pdfPreview, pdfInput.nextSibling);

        // Perbarui nilai input hidden dengan nilai terbaru
        oldPdfInput.value = '';
        oldPdfInput.value = pdfInput.value;
    }
</script>
