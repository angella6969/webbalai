<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>


<div class="mb-3 mt-3">
    <div style="z-index: 999">
        <textarea hidden id="{{ $body }}" name="{{ $body }}" style="width: 100px;">{{ old('$body', $body) }}</textarea>
    </div>
    <h6>*mohon tulis dengan rinci dan jelas</h6>
</div>

<script>
    ClassicEditor
        .create(document.querySelector('#{{ $body }}'), {
            toolbar: ['redo', '|', 'undo'],

        })
        .catch(error => {
            console.log(error);
        });
</script>
