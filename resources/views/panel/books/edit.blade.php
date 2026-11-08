@extends('layouts.panel')

@section('content')
    <!-- Page Header -->
    <x-ui.page-header
        title="Edit Book / Article"
        description="Update metadata and manuscript documents for {{ $book->title }}."
        :breadcrumbs="[
            'Dashboard' => route('panel.dashboard'),
            'Books' => route('panel.books'),
            $book->title => route('panel.books.show', $book->id),
            'Edit' => ''
        ]"
    >
        <x-slot:actions>
            <x-ui.button variant="outline" size="sm" icon="eye" href="{{ route('panel.books.show', $book->id) }}">
                View Details
            </x-ui.button>
            <x-ui.button variant="outline" size="sm" icon="arrow-left" href="{{ route('panel.books') }}">
                Back to List
            </x-ui.button>
        </x-slot:actions>
    </x-ui.page-header>

    <!-- Edit Form Card -->
    <div class="max-w-4xl">
        <x-ui.card title="Edit Manuscript Information" description="Modify any fields below and save changes.">
            <form id="edit_book_form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $book->id }}" />

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Book Title -->
                    <div class="md:col-span-2">
                        <x-ui.input
                            label="Book / Article Title"
                            name="title"
                            id="title"
                            :value="old('title', $book->title)"
                            placeholder="Book Title"
                            icon="book"
                            :required="true"
                            help="Provide the complete title of the manuscript."
                        />
                    </div>

                    <!-- Author Name -->
                    <div>
                        <x-ui.input
                            label="Author Name(s)"
                            name="author"
                            id="author"
                            :value="old('author', $book->author)"
                            placeholder="Author Name"
                            icon="profile-circle"
                            :required="true"
                            help="Primary author and co-authors."
                        />
                    </div>

                    <!-- Category -->
                    <div>
                        <x-ui.select
                            label="Publication Category"
                            name="category"
                            id="category"
                            :required="true"
                            help="Manuscript category classification."
                        >
                            <option value="article" {{ old('category', $book->category) == 'article' ? 'selected' : '' }}>Article (Individual Paper)</option>
                            <option value="volume" {{ old('category', $book->category) == 'volume' ? 'selected' : '' }}>Volume (Full Edition)</option>
                        </x-ui.select>
                    </div>

                    <!-- Current & Replace PDF Section -->
                    <div class="md:col-span-2">
                        <label class="text-xs font-semibold text-foreground tracking-wide block mb-1.5">
                            Manuscript PDF File <span class="text-xs text-muted-foreground font-normal">(Leave empty to retain existing file)</span>
                        </label>

                        @if ($book->pdf_file)
                            <div class="flex items-center justify-between p-3.5 mb-4 rounded-xl border border-border bg-muted/30">
                                <div class="flex items-center gap-3 min-w-0">
                                    <div class="size-9 rounded-lg bg-red-500/10 text-red-600 flex items-center justify-center shrink-0">
                                        <i class="ki-filled ki-file text-xl"></i>
                                    </div>
                                    <div class="flex flex-col min-w-0">
                                        <span class="text-xs text-muted-foreground font-medium uppercase tracking-wider">Current File on Record</span>
                                        <span class="text-sm font-semibold text-foreground truncate">{{ $book->pdf_file }}</span>
                                    </div>
                                </div>
                                <a href="{{ asset($book->pdf_file) }}" target="_blank" class="kt-btn kt-btn-sm kt-btn-outline inline-flex items-center gap-1.5 shrink-0">
                                    <i class="ki-filled ki-eye"></i>
                                    Preview
                                </a>
                            </div>
                        @endif

                        <!-- Replace / Upload Box -->
                        <div class="p-6 border-2 border-dashed border-border rounded-xl bg-muted/20 hover:border-primary/50 transition text-center flex flex-col items-center justify-center">
                            <i class="ki-filled ki-file-up text-4xl text-primary/70 mb-2"></i>
                            <div class="text-sm font-semibold text-foreground">Click to upload a replacement PDF</div>
                            <p class="text-xs text-muted-foreground mt-1 mb-3">Accepted format: PDF only</p>
                            
                            <input
                                type="file"
                                name="pdf_file"
                                id="pdf_file"
                                accept="application/pdf"
                                class="hidden"
                                onchange="previewSelectedPdf(this)"
                            />

                            <button type="button" onclick="document.getElementById('pdf_file').click()" class="kt-btn kt-btn-sm kt-btn-outline">
                                <i class="ki-filled ki-folder-up"></i>
                                Choose New PDF
                            </button>
                        </div>

                        <p id="pdf_file_error" class="text-xs text-muted-foreground mt-1 mb-0 hidden"></p>

                        <!-- PDF Preview Box -->
                        <div id="pdf_preview_container" class="mt-4 hidden p-4 border border-border rounded-xl bg-background">
                            <div class="flex items-center justify-between mb-3">
                                <div class="flex items-center gap-2.5">
                                    <div class="size-9 rounded-lg bg-red-500/10 text-red-600 flex items-center justify-center">
                                        <i class="ki-filled ki-file text-xl"></i>
                                    </div>
                                    <div class="flex flex-col">
                                        <span id="pdf_preview_name" class="text-sm font-semibold text-foreground truncate max-w-md">new-file.pdf</span>
                                        <span id="pdf_preview_size" class="text-xs text-muted-foreground">0 KB</span>
                                    </div>
                                </div>
                                <button type="button" onclick="clearSelectedPdf()" class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm size-8 text-muted-foreground hover:text-destructive">
                                    <i class="ki-filled ki-cross text-base"></i>
                                </button>
                            </div>
                            <iframe id="pdf_preview_frame" class="w-full h-72 rounded-lg border border-border" src=""></iframe>
                        </div>
                    </div>

                </div>

                <!-- Form Action Buttons -->
                <div class="flex items-center gap-3 mt-8 pt-5 border-t border-border">
                    <button type="button" id="submitBtn" onclick="updateBookForm()" class="kt-btn kt-btn-primary inline-flex items-center gap-2">
                        <i class="ki-filled ki-check"></i>
                        <span>Save Changes</span>
                    </button>
                    <a href="{{ route('panel.books') }}" class="kt-btn kt-btn-outline inline-flex items-center gap-2">
                        Cancel
                    </a>
                </div>
            </form>
        </x-ui.card>
    </div>
@endsection

@section('scripts')
    <script>
        function previewSelectedPdf(input) {
            const file = input.files[0];
            const container = document.getElementById('pdf_preview_container');
            const nameEl = document.getElementById('pdf_preview_name');
            const sizeEl = document.getElementById('pdf_preview_size');
            const frame = document.getElementById('pdf_preview_frame');

            if (file) {
                if (file.type !== 'application/pdf') {
                    alert('Please select a valid PDF file.');
                    input.value = '';
                    container.classList.add('hidden');
                    return;
                }

                nameEl.textContent = file.name;
                sizeEl.textContent = (file.size / (1024 * 1024)).toFixed(2) + ' MB';
                frame.src = URL.createObjectURL(file);
                container.classList.remove('hidden');
            }
        }

        function clearSelectedPdf() {
            const input = document.getElementById('pdf_file');
            input.value = '';
            document.getElementById('pdf_preview_container').classList.add('hidden');
            document.getElementById('pdf_preview_frame').src = '';
        }

        function updateBookForm() {
            const form = document.getElementById('edit_book_form');
            const formData = new FormData(form);

            // Clear previous errors
            document.querySelectorAll('[id$="_error"]').forEach(el => {
                el.classList.add('hidden');
                el.classList.remove('text-destructive');
                el.textContent = '';
            });

            // Loading state
            const btn = document.getElementById('submitBtn');
            const originalHtml = btn.innerHTML;
            btn.disabled = true;
            btn.innerHTML = '<span class="inline-block animate-spin mr-2">⟳</span> Saving...';

            fetch('{{ route('panel.books.store') }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                }
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    window.location.href = '{{ route('panel.books') }}';
                } else if (data.errors) {
                    Object.keys(data.errors).forEach(field => {
                        const errorEl = document.getElementById(field + '_error');
                        if (errorEl) {
                            errorEl.textContent = data.errors[field][0];
                            errorEl.classList.remove('hidden');
                            errorEl.classList.add('text-destructive');
                        }
                    });
                } else if (data.message) {
                    alert(data.message);
                }
            })
            .catch(() => {
                alert('An unexpected server error occurred. Please try again.');
            })
            .finally(() => {
                btn.disabled = false;
                btn.innerHTML = originalHtml;
            });
        }
    </script>
@endsection
