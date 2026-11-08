@extends('layouts.panel')

@section('content')
    <!-- Page Header -->
    <x-ui.page-header title="{{ $pageTitle ?? 'Books & Manuscripts' }}"
        description="Browse, manage, and publish scholarly manuscripts and articles." :breadcrumbs="['Dashboard' => route('panel.dashboard'), 'Books' => '']">
        <x-slot:actions>
            <x-ui.button variant="primary" size="sm" icon="plus" href="{{ route('panel.books.create') }}">
                Add New Book
            </x-ui.button>
        </x-slot:actions>
    </x-ui.page-header>

    <!-- Filter / Stats Pills -->
    <div class="flex items-center gap-2 mb-5 flex-wrap">
        <a href="{{ route('panel.books') }}"
            class="kt-btn kt-btn-sm kt-btn-primary rounded-lg font-medium inline-flex items-center gap-2">
            <span>All Books</span>
            <span class="kt-badge kt-badge-sm bg-white/20 text-white rounded-md">{{ $books->total() ?? 0 }}</span>
        </a>
        <div class="kt-btn kt-btn-sm kt-btn-outline rounded-lg font-medium inline-flex items-center gap-2">
            <span class="size-2 rounded-full bg-green-500"></span>
            <span>Published</span>
            <span class="kt-badge kt-badge-sm kt-badge-success kt-badge-outline rounded-md"
                id="publishedCount">{{ $publishedCount ?? 0 }}</span>
        </div>
        <div class="kt-btn kt-btn-sm kt-btn-outline rounded-lg font-medium inline-flex items-center gap-2">
            <span class="size-2 rounded-full bg-yellow-500"></span>
            <span>Drafts</span>
            <span class="kt-badge kt-badge-sm kt-badge-warning kt-badge-outline rounded-md"
                id="draftCount">{{ $draftCount ?? 0 }}</span>
        </div>
    </div>

    <!-- Main Card & Table -->
    <x-ui.card>
        <!-- Card Toolbar -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-5">
            <div class="kt-input max-w-sm w-full">
                <i class="ki-filled ki-magnifier text-muted-foreground"></i>
                <input type="text" id="tableSearchInput" placeholder="Search books, authors, categories..."
                    class="grow bg-transparent text-sm text-foreground focus:outline-none min-w-0" />
            </div>
            <div class="flex items-center gap-2 text-xs text-muted-foreground">
                <i class="ki-filled ki-information-2 text-sm"></i>
                Toggle switch to instantly publish or draft a book
            </div>
        </div>

        <!-- Table Responsive Container -->
        <div class="overflow-x-auto">
            <table class="kt-table w-full text-left border-collapse" id="booksTable">
                <thead>
                    <tr
                        class="border-b border-border text-xs uppercase tracking-wider text-muted-foreground font-semibold bg-muted/20">
                        <th class="py-3.5 px-4 w-12 text-center">#</th>
                        <th class="py-3.5 px-4">Title</th>
                        <th class="py-3.5 px-4">Author</th>
                        <th class="py-3.5 px-4">Category</th>
                        <th class="py-3.5 px-4 text-center">Status</th>
                        <th class="py-3.5 px-4 text-center">Downloads</th>
                        <th class="py-3.5 px-4">Created Date</th>
                        <th class="py-3.5 px-4 text-end">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-border text-sm">
                    @forelse ($books as $index => $book)
                        <tr class="hover:bg-muted/30 transition group book-row"
                            data-search="{{ strtolower($book->title . ' ' . $book->author . ' ' . $book->category) }}">
                            <td class="py-3.5 px-4 text-center text-xs text-muted-foreground font-mono">
                                {{ $books->firstItem() + $index }}
                            </td>

                            <!-- Title -->
                            <td class="py-3.5 px-4 font-medium">
                                <a href="{{ route('panel.books.show', $book->id) }}"
                                    class="text-foreground hover:text-primary font-semibold line-clamp-2 transition leading-snug">
                                    {{ $book->title }}
                                </a>
                                @if ($book->pdf_file)
                                    <span class="inline-flex items-center gap-1 text-[11px] text-muted-foreground mt-0.5">
                                        <i class="ki-filled ki-file text-red-500"></i> PDF Attached
                                    </span>
                                @endif
                            </td>

                            <!-- Author -->
                            <td class="py-3.5 px-4 text-secondary-foreground">
                                <span class="font-medium text-foreground">{{ $book->author }}</span>
                            </td>

                            <!-- Category -->
                            <td class="py-3.5 px-4">
                                <x-ui.badge :variant="$book->category === 'volume' ? 'info' : 'primary'" outline="true">
                                    {{ ucfirst($book->category ?? 'article') }}
                                </x-ui.badge>
                            </td>

                            <!-- Status Toggle -->
                            <td class="py-3.5 px-4 text-center">
                                <label class="inline-flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="kt-switch status-toggle" data-id="{{ $book->id }}"
                                        {{ $book->is_active ? 'checked' : '' }} />
                                    <span
                                        class="text-xs font-medium status-label {{ $book->is_active ? 'text-green-600' : 'text-muted-foreground' }}">
                                        {{ $book->is_active ? 'Live' : 'Draft' }}
                                    </span>
                                </label>
                            </td>

                            <!-- Sell Count / Downloads -->
                            <td class="py-3.5 px-4 text-center font-mono font-semibold text-foreground">
                                {{ number_format($book->sell_count ?? 0) }}
                            </td>

                            <!-- Created Date -->
                            <td class="py-3.5 px-4 text-xs text-muted-foreground whitespace-nowrap">
                                {{ $book->created_at ? $book->created_at->format('d M, Y') : '—' }}
                            </td>

                            <!-- Actions -->
                            <td class="py-3.5 px-4 text-end">
                                <div class="inline-flex items-center gap-1">
                                    <a href="{{ route('panel.books.show', $book->id) }}"
                                        class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm size-8 text-secondary-foreground hover:text-primary"
                                        title="View Details">
                                        <i class="ki-filled ki-eye text-base"></i>
                                    </a>
                                    <a href="{{ route('panel.books.edit', $book->id) }}"
                                        class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm size-8 text-secondary-foreground hover:text-primary"
                                        title="Edit Book">
                                        <i class="ki-filled ki-notepad-edit text-base"></i>
                                    </a>
                                    <form action="{{ route('panel.books.destroy', $book->id) }}" method="POST"
                                        class="inline"
                                        onsubmit="return confirm('Are you sure you want to remove this book?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm size-8 text-secondary-foreground hover:text-destructive cursor-pointer"
                                            title="Delete">
                                            <i class="ki-filled ki-trash text-base"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-12 text-muted-foreground">
                                <div class="flex flex-col items-center justify-center gap-2">
                                    <i class="ki-filled ki-book-open text-4xl text-muted-foreground/40"></i>
                                    <span class="text-base font-semibold text-foreground">No books found</span>
                                    <p class="text-xs text-muted-foreground">Get started by creating your first book or
                                        research manuscript.</p>
                                    <div class="mt-2">
                                        <x-ui.button variant="primary" size="sm" icon="plus"
                                            href="{{ route('panel.books.create') }}">
                                            Add Book
                                        </x-ui.button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination & Footer -->
        <x-slot:footer>
            <div class="text-xs text-muted-foreground font-medium">
                Showing <span class="text-foreground font-semibold">{{ $books->firstItem() ?? 0 }}</span> to <span
                    class="text-foreground font-semibold">{{ $books->lastItem() ?? 0 }}</span> of <span
                    class="text-foreground font-semibold">{{ $books->total() ?? 0 }}</span> records
            </div>
            <div>
                {{ $books->links('vendor.pagination') }}
            </div>
        </x-slot:footer>
    </x-ui.card>
@endsection

@section('scripts')
    <script>
        // Client-side quick filter
        const searchInput = document.getElementById('tableSearchInput');
        if (searchInput) {
            searchInput.addEventListener('input', function() {
                const query = this.value.toLowerCase().trim();
                document.querySelectorAll('.book-row').forEach(row => {
                    const haystack = row.getAttribute('data-search') || '';
                    row.style.display = haystack.includes(query) ? '' : 'none';
                });
            });
        }

        // Status Toggle Handler
        document.querySelectorAll('.status-toggle').forEach(toggle => {
            toggle.addEventListener('change', function() {
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
                                label.textContent = el.checked ? 'Live' : 'Draft';
                                label.className = 'text-xs font-medium status-label ' + (el.checked ?
                                    'text-green-600' : 'text-muted-foreground');
                            }
                        }
                    })
                    .catch(() => {
                        el.checked = !el.checked;
                        alert('Server error. Please try again.');
                    })
                    .finally(() => {
                        el.disabled = false;

                        const publishedEl = document.getElementById('publishedCount');
                        const draftEl = document.getElementById('draftCount');

                        if (publishedEl && draftEl) {
                            let published = parseInt(publishedEl.textContent.replace(/\D/g, '')) || 0;
                            let draft = parseInt(draftEl.textContent.replace(/\D/g, '')) || 0;

                            if (status == 1) {
                                published++;
                                draft = Math.max(0, draft - 1);
                            } else {
                                published = Math.max(0, published - 1);
                                draft++;
                            }

                            publishedEl.textContent = published;
                            draftEl.textContent = draft;
                        }
                    });
            });
        });
    </script>
@endsection
