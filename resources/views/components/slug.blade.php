<div class="mb-3">
    <div class="input-group">
        <input type="text" class="form-control"  readonly id="slug" name="slug" placeholder="slug"
            value="{{ old('slug',$nilai) }}" required>
    </div>
</div>
 
<script>
    const judul = document.querySelector('#{{ $judul }}');
    const slug = document.querySelector('#slug');

    judul.addEventListener('change', function() {
        fetch('/dashboard/beritas/checkSlug?judul=' + judul.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script>