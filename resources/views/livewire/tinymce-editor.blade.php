<div>
    <textarea id="{{ $editorId }}" wire:model.debounce.500ms="content"></textarea>
    <script>
        // ${document}.ready(function(){
        //     const editor = CKEDITOR.replace('{{ $editorId }}');
        //     editor.on('change', function (event) {
        //         console.log(event.editor.getData());
        //         @this.set('content', event.editor.getData());
        //     })
        // })

        CKEDITOR.replace('{{ $editorId }}');
    </script>
</div>
