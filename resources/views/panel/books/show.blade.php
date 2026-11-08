@extends('layouts.panel')

@section('content')
    <!-- Page Header -->
    <x-ui.page-header
        title="Book Details"
        description="Comprehensive information and document inspection for {{ $book->title }}."
        :breadcrumbs="[
            'Dashboard' => route('panel.dashboard'),
            'Books' => route('panel.books'),
            $book->title => ''
        ]"
    >
        <x-slot:actions>
            <x-ui.button variant="primary" size="sm" icon="notepad-edit" href="{{ route('panel.books.edit', $book->id) }}">
                Edit Book
            </x-ui.button>
            <x-ui.button variant="outline" size="sm" icon="arrow-left" href="{{ route('panel.books') }}">
                Back to List
            </x-ui.button>
        </x-slot:actions>
    </x-ui.page-header>

    <!-- Main Content 2-Column Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- Left: Book Metadata -->
        <div class="lg:col-span-2 flex flex-col gap-6">
            <x-ui.card title="Manuscript Information" description="Editorial metadata and publication status.">
                <x-slot:toolbar>
                    <x-ui.badge :variant="$book->is_active ? 'success' : 'warning'" outline="true">
                        {{ $book->is_active ? 'Published' : 'Draft' }}
                    </x-ui.badge>
                </x-slot:toolbar>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Title -->
                    <div class="sm:col-span-2 p-3.5 rounded-lg border border-border bg-muted/20">
                        <span class="text-xs font-semibold text-muted-foreground uppercase tracking-wider block mb-1">
                            Title of Work
                        </span>
                        <h2 class="text-lg font-bold text-foreground leading-snug">{{ $book->title }}</h2>
                    </div>

                    <!-- Author -->
                    <div class="p-3.5 rounded-lg border border-border bg-muted/20">
                        <span class="text-xs font-semibold text-muted-foreground uppercase tracking-wider block mb-1">
                            Author(s)
                        </span>
                        <div class="text-base font-semibold text-foreground flex items-center gap-2">
                            <i class="ki-filled ki-profile-circle text-primary"></i>
                            {{ $book->author }}
                        </div>
                    </div>

                    <!-- Category -->
                    <div class="p-3.5 rounded-lg border border-border bg-muted/20">
                        <span class="text-xs font-semibold text-muted-foreground uppercase tracking-wider block mb-1">
                            Category
                        </span>
                        <div class="mt-1">
                            <x-ui.badge :variant="$book->category === 'volume' ? 'info' : 'primary'">
                                {{ ucfirst($book->category ?? 'article') }}
                            </x-ui.badge>
                        </div>
                    </div>

                    <!-- Sell Count / Downloads -->
                    <div class="p-3.5 rounded-lg border border-border bg-muted/20">
                        <span class="text-xs font-semibold text-muted-foreground uppercase tracking-wider block mb-1">
                            Downloads & Read Count
                        </span>
                        <div class="text-xl font-bold font-mono text-foreground flex items-center gap-2">
                            <i class="ki-filled ki-file-down text-sky-500"></i>
                            {{ number_format($book->sell_count ?? 0) }}
                        </div>
                    </div>

                    <!-- Publisher IP -->
                    <div class="p-3.5 rounded-lg border border-border bg-muted/20">
                        <span class="text-xs font-semibold text-muted-foreground uppercase tracking-wider block mb-1">
                            Uploader IP Address
                        </span>
                        <div class="text-sm font-mono text-foreground flex items-center gap-2">
                            <i class="ki-filled ki-shield-tick text-muted-foreground"></i>
                            {{ $book->ip_address ?? '—' }}
                        </div>
                    </div>

                    <!-- Status Switch -->
                    <div class="p-3.5 rounded-lg border border-border bg-muted/20 sm:col-span-2 flex items-center justify-between">
                        <div>
                            <span class="text-xs font-semibold text-muted-foreground uppercase tracking-wider block mb-0.5">
                                Public Availability Status
                            </span>
                            <span class="text-xs text-muted-foreground">
                                Active status makes the manuscript publicly discoverable and downloadable.
                            </span>
                        </div>
                        <label class="inline-flex items-center gap-2.5 cursor-pointer">
                            <input
                                type="checkbox"
                                class="kt-switch status-toggle"
                                data-id="{{ $book->id }}"
                                {{ $book->is_active ? 'checked' : '' }}
                            />
                            <span class="text-sm font-semibold status-label {{ $book->is_active ? 'text-green-600' : 'text-muted-foreground' }}">
                                {{ $book->is_active ? 'Live / Published' : 'Draft Mode' }}
                            </span>
                        </label>
                    </div>

                    <!-- Dates -->
                    <div class="p-3.5 rounded-lg border border-border bg-muted/20">
                        <span class="text-xs font-semibold text-muted-foreground uppercase tracking-wider block mb-1">
                            Registered On
                        </span>
                        <div class="text-sm font-medium text-foreground">
                            {{ $book->created_at ? $book->created_at->format('d M, Y - h:i A') : '—' }}
                        </div>
                    </div>

                    <div class="p-3.5 rounded-lg border border-border bg-muted/20">
                        <span class="text-xs font-semibold text-muted-foreground uppercase tracking-wider block mb-1">
                            Last Updated
                        </span>
                        <div class="text-sm font-medium text-foreground">
                            {{ $book->updated_at ? $book->updated_at->format('d M, Y - h:i A') : '—' }}
                        </div>
                    </div>
                </div>
            </x-ui.card>
        </div>

        <!-- Right: Manuscript PDF & Document -->
        <div class="flex flex-col gap-6">
            <x-ui.card title="Manuscript Document" description="Direct PDF file access and preview.">
                @if ($book->pdf_file)
                    <div class="flex flex-col gap-4">
                        <div class="p-4 rounded-xl border border-border bg-muted/30 flex items-center gap-3">
                            <div class="size-11 rounded-lg bg-red-500/10 text-red-600 flex items-center justify-center shrink-0">
                                <i class="ki-filled ki-file text-2xl"></i>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="text-sm font-semibold text-foreground truncate" title="{{ basename($book->pdf_file) }}">
                                    {{ basename($book->pdf_file) }}
                                </span>
                                <span class="text-xs text-muted-foreground">PDF Research Paper</span>
                            </div>
                        </div>

                        <div class="flex items-center gap-2">
                            <a href="{{ asset($book->pdf_file) }}" target="_blank" class="kt-btn kt-btn-primary kt-btn-sm grow justify-center inline-flex items-center gap-2">
                                <i class="ki-filled ki-eye"></i>
                                View in New Tab
                            </a>
                            <a href="{{ asset($book->pdf_file) }}" download class="kt-btn kt-btn-outline kt-btn-sm inline-flex items-center gap-2">
                                <i class="ki-filled ki-file-down"></i>
                                Download
                            </a>
                        </div>

                        <div class="border border-border rounded-xl overflow-hidden mt-1">
                            <iframe src="{{ asset($book->pdf_file) }}" class="w-full h-96 border-0"></iframe>
                        </div>
                    </div>
                @else
                    <div class="text-center py-8 text-muted-foreground">
                        <i class="ki-filled ki-file-slash text-4xl mb-2 text-muted-foreground/50"></i>
                        <p class="text-sm font-medium text-foreground">No PDF attached</p>
                        <p class="text-xs text-muted-foreground mt-1">Edit this book to attach a PDF manuscript.</p>
                        <div class="mt-4">
                            <x-ui.button variant="outline" size="sm" icon="notepad-edit" href="{{ route('panel.books.edit', $book->id) }}">
                                Attach Document
                            </x-ui.button>
                        </div>
                    </div>
                @endif
            </x-ui.card>
        </div>

    </div>
@endsection

@section('scripts')
    <script>
        document.querySelectorAll('.status-toggle').forEach(toggle => {
            toggle.addEventListener('change', function () {
                const id = this.dataset.id;
                const status = this.checked ? 1 : 0;
                const el = this;
                const label = el.closest('label').querySelector('.status-label');

                el.disabled = true;

                fetch(`{{ url('panel/books') }}/${id}/status/${status}`, {
                    method: 'GET',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                    }
                })
                .then(res => res.json())
                .then(data => {
                    if (!data.success) {
                        el.checked = !el.checked;
                        alert(data.message || 'Failed to update status.');
                    } else {
                        if (label) {
                            label.textContent = el.checked ? 'Live / Published' : 'Draft Mode';
                            label.className = 'text-sm font-semibold status-label ' + (el.checked ? 'text-green-600' : 'text-muted-foreground');
                        }
                    }
                })
                .catch(() => {
                    el.checked = !el.checked;
                    alert('Server error. Please try again.');
                })
                .finally(() => {
                    el.disabled = false;
                });
            });
        });
    </script>
@endsection
