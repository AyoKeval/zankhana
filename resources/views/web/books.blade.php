@extends('layouts.web')

@section('styles')
@endsection

@section('content')
    <main class="max-w-7xl mx-auto w-full px-4 py-10 font-sans">
        <div class="mb-4 md:mb-8 border-b border-gray-200 pb-4">
            <p class="text-sm font-semibold uppercase tracking-wider text-ugcOrange">Research Archive</p>
            <h2 class="text-3xl font-bold text-gray-900">Books</h2>
        </div>

        <section
            class="grid grid-cols-2 md:flex flex-wrap gap-2 md:gap-4 mb-4 md:mb-8 items-center bg-gray-50 p-4 rounded-xl border border-gray-100">

            <div class="col-span-2 md:flex-grow min-w-[250px]">
                <input type="search" id="searchInput" placeholder="Search books or authors..."
                    class="w-full px-4 py-1.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-ugcOrange focus:border-ugcOrange outline-none transition-all">
            </div>

            <select id="categoryFilter"
                class="px-4 py-2 rounded-lg border border-gray-300 bg-white focus:ring-2 focus:ring-ugcOrange outline-none cursor-pointer">
                <option value="all">All Categories</option>
                <option value="article">Article</option>
                <option value="volume">Volume</option>
            </select>

            <select id="sortByFilter"
                class="px-4 py-2 rounded-lg border border-gray-300 bg-white focus:ring-2 focus:ring-ugcOrange outline-none cursor-pointer">
                <option value="title_asc">Title (A → Z)</option>
                <option value="title_desc">Title (Z → A)</option>
                <option value="author_asc">Author (A → Z)</option>
                <option value="author_desc">Author (Z → A)</option>
                <option value="popular_desc">Popular (High → Low)</option>
                <option value="popular_asc">Popular (Low → High)</option>
                <option value="published_desc">Date (Newest)</option>
                <option value="published_asc">Date (Oldest)</option>
            </select>

            <button onclick="toggleView()"
                class="col-span-2 md:flex items-center gap-2 px-6 py-2 bg-ugcOrange hover:bg-ugcDark text-white font-medium rounded-lg transition-colors">
                <span>Change View</span>
            </button>
        </section>

        <section>
            <div id="booksContainer"
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2 md:gap-4 transition-all duration-300">
                <?php foreach ($books as $book): ?>
                <?php  if ($book->is_active == 1): ?>
                <div class="book-card bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300 group"
                    data-category="<?= htmlspecialchars($book->category) ?>"
                    data-title="<?= htmlspecialchars($book->title) ?>" data-popular="<?= $book->sell_count ?>"
                    data-author="<?= htmlspecialchars($book->author) ?>"
                    data-published="<?= strtotime($book->created_at) ?>">

                    <a href="book/<?= $book->title ?>" class="block p-4 h-full">
                        <div class="flex flex-col h-full card-content">
                            <p class="text-xs font-bold text-ugcOrange uppercase mb-2">
                                <?= htmlspecialchars($book->category) ?>
                            </p>
                            <h3 class="book-title text-lg font-bold text-gray-900 mb-1 leading-tight transition-colors">
                                <?= $book->title ?>
                            </h3>
                            <p class="book-author text-sm text-gray-600 italic mb-2 ">by
                                <?= htmlspecialchars($book->author) ?>
                            </p>

                            <div class="mt-auto pt-2 border-t border-gray-100 flex items-center justify-between">
                                <span class="text-xs font-medium text-gray-500">
                                    Downloads: <span class="text-gray-900 font-bold"><?= $book->sell_count ?? 0 ?></span>
                                </span>
                                <span
                                    class="text-ugcOrange text-sm font-bold opacity-0 group-hover:opacity-100 transition-opacity">View
                                    →</span>
                            </div>
                        </div>
                    </a>
                </div>
                <?php  endif ?>
                <?php endforeach; ?>
            </div>

            <div id="noBooksFound" class="hidden flex-col items-center justify-center py-32 text-center">
                <div class="text-6xl mb-4 grayscale opacity-50">📚</div>
                <h3 class="text-2xl font-bold text-gray-800 mb-2">No Books Found</h3>
                <p class="text-gray-500 max-w-xs mx-auto">
                    We couldn't find any books matching your search. Try a different keyword or category.
                </p>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <script>
        console.log("Books loaded");
    </script>
    <script>
        let searchQuery = '';
        let selectedCategory = 'all';
        let sortBy = 'title_asc';

        // --- Event Listeners ---
        document.getElementById('searchInput').addEventListener('input', (e) => {
            searchQuery = e.target.value.toLowerCase().trim();
            filterBooks();
        });

        document.getElementById('categoryFilter').addEventListener('change', (e) => {
            selectedCategory = e.target.value.toLowerCase();
            filterBooks();
        });

        document.getElementById('sortByFilter').addEventListener('change', (e) => {
            sortBy = e.target.value;
            localStorage.setItem('bookSort', sortBy);
            sortBooks();
        });

        // --- Core Functions ---
        function filterBooks() {
            const books = document.querySelectorAll('.book-card');
            let visibleCount = 0;

            books.forEach(card => {
                const title = (card.querySelector('.book-title')?.textContent || '').toLowerCase();
                const author = (card.querySelector('.book-author')?.textContent || '').toLowerCase();
                const category = (card.getAttribute('data-category') || '').toLowerCase();

                const matchSearch = title.includes(searchQuery) || author.includes(searchQuery);
                const matchCategory = selectedCategory === 'all' || category === selectedCategory;

                if (matchSearch && matchCategory) {
                    card.classList.remove('hidden');
                    visibleCount++;
                } else {
                    card.classList.add('hidden');
                }
            });

            const emptyState = document.getElementById('noBooksFound');
            if (visibleCount === 0) {
                emptyState.classList.replace('hidden', 'flex');
            } else {
                emptyState.classList.replace('flex', 'hidden');
            }

            sortBooks();
        }

        function sortBooks() {
            const container = document.getElementById('booksContainer');
            const books = Array.from(container.querySelectorAll('.book-card'));

            books.sort((a, b) => {
                const valA = a.dataset;
                const valB = b.dataset;

                switch (sortBy) {
                    case 'title_asc':
                        return valA.title.localeCompare(valB.title);
                    case 'title_desc':
                        return valB.title.localeCompare(valA.title);
                    case 'author_asc':
                        return valA.author.localeCompare(valB.author);
                    case 'author_desc':
                        return valB.author.localeCompare(valA.author);
                    case 'popular_asc':
                        return parseInt(valA.popular) - parseInt(valB.popular);
                    case 'popular_desc':
                        return parseInt(valB.popular) - parseInt(valA.popular);
                    case 'published_asc':
                        return parseInt(valA.published) - parseInt(valB.published);
                    case 'published_desc':
                        return parseInt(valB.published) - parseInt(valA.published);
                    default:
                        return 0;
                }
            });

            books.forEach(book => container.appendChild(book));
        }

        function toggleView() {
            const container = document.getElementById('booksContainer');
            const isGrid = container.classList.contains('grid-cols-1') && !container.classList.contains('sm:grid-cols-2');

            if (!isGrid) {
                // Switch to List View
                container.classList.remove('sm:grid-cols-2', 'lg:grid-cols-3', 'xl:grid-cols-4');
                container.classList.add('grid-cols-1');
            } else {
                // Switch back to Grid View
                container.classList.add('sm:grid-cols-2', 'lg:grid-cols-3', 'xl:grid-cols-4');
            }
        }

        // --- Init ---
        document.addEventListener('DOMContentLoaded', () => {
            const savedSort = localStorage.getItem('bookSort');
            if (savedSort) {
                sortBy = savedSort;
                document.getElementById('sortByFilter').value = savedSort;
            }
            filterBooks();
        });
    </script>
@endsection
