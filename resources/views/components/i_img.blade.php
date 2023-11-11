<div class="mt-3 mb-3">
    <label for="{{ $nama }}">{{ $judul }}</label>
    <input type="hidden" name="oldImage" id="oldImage" value="{{ $nilai }}">

    @if ($nilai)
    <img src="{{ asset('storage/' . substr($nilai,6)) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
    @else
    <img class="img-preview img-fluid mb-3 col-sm-5">
    @endif

    {{-- <img class="img-preview img-fluid mb-3 col-sm-5"> --}}
    <input type="file" class="form-control @error('$nama') is-invalid @enderror" id="{{ $nama }}"
        onchange="previewImage()" name="{{ $nama }}" accept="image/*, image/png, image/gif">
    <h6>Photo Max 5 MB</h6>

    @if ($errors->has('$nama'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('$nama') }}</strong>
    </span>
    @endif
</div>

<script>
    function previewImage() {
        const image = document.querySelector('#{{ $nama }}');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();

        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>