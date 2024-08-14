<div wire:ignore class="mb-4">
    <textarea id="{{ $summernoteId }}">{{ $content }}</textarea>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            console.log('DOMContentLoaded');
            initializeSummernote();
        });

        Livewire.on('refreshSummernote', () => {
            console.log('refreshSummernote');
            initializeSummernote();
        });

        function initializeSummernote() {
            console.log('Initializing Summernote');
            const summernoteId = @json($summernoteId);
            const content = @json($content);

            $('#' + summernoteId).summernote({
                tabsize: 2,
                height: 120,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ],
                callbacks: {
                    onChange: function(contents, $editable) {
                        @this.set('content', contents);
                    }
                }
            });
        }
    </script>
</div>
