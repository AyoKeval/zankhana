@extends('layouts.web')

@section('styles')
@endsection

@section('content')
    <div class="font-sans text-gray-800 antialiased">

        <div class="max-w-7xl mx-auto px-6 py-8">
            <a href="javascript:history.back()"
                class="flex items-center text-sm font-medium text-gray-600 hover:text-black transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                BACK TO CATALOGUE
            </a>
        </div>

        <div class="max-w-7xl mx-auto px-6 pb-20">

            <div class="pb-10">
                <span
                    class="text-xs font-bold tracking-widest text-ugcOrange uppercase mb-4 block">{{ $book->category ?? "Uncategorized" }}</span>
                <h1 class="font-serif text-5xl md:text-6xl font-black text-black mb-4">{{ $book->title ?? "Untitled Book" }}
                </h1>
                <p class="italic font-serif text-xl text-gray-500 mb-8">by {{ $book->author ?? "Unknown Author"}}</p>

                <div class="flex gap-12 mb-10">
                    <?php if (!empty($book->category)): ?>
                    <div>
                        <span class="block text-xs font-bold tracking-widest text-gray-400 uppercase">Category</span>
                        <span class="text-lg font-medium">{{ $book->category }}</span>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($book->sell_count)): ?>
                    <div>
                        <span class="block text-xs font-bold tracking-widest text-gray-400 uppercase">Total Downloads</span>
                        <span class="text-lg font-medium">{{ $book->sell_count }}</span>
                    </div>
                    <?php endif; ?>
                    <div>
                        <span class="block text-xs font-bold tracking-widest text-gray-400 uppercase">Format</span>
                        <span class="text-lg font-medium">Digital PDF</span>
                    </div>
                </div>

                <div class="flex flex-wrap gap-4">
                    <button onclick="openReadModal('{{ addslashes($book->title) }}')"
                        class="bg-black text-white px-8 py-3 rounded-full flex items-center font-bold hover:bg-gray-800 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                        Read Now
                    </button>
                    <button onclick="openDownloadModal('{{ addslashes($book->title) }}')"
                        class="btn-outline px-8 py-3 rounded-full flex items-center font-bold hover:bg-white transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        Download PDF
                    </button>
                </div>
            </div>

            <section class="hidden" class2="grid grid-cols-1 md:grid-cols-3 gap-12 mt-12">

                <div class="md:col-span-2 space-y-6">
                    <h2 class="text-2xl font-serif font-bold">About the Publication</h2>
                    <p class="text-gray-700 leading-relaxed">
                        "Saurashtra Ni Rasdhar" is a monumental collection of folk tales from the Saurashtra region of
                        Gujarat, meticulously compiled by the 'National Poet' Jhaverchand Meghani. Part 5 continues the
                        legacy of preserving the oral traditions, showcasing stories of bravery, sacrifice, and the unique
                        cultural ethos of the land.
                    </p>
                    <p class="text-gray-700 leading-relaxed border-l-4 border-ugcOrange pl-6 italic">
                        These stories aren't just myths; they are the rhythmic heartbeats of a civilization that values
                        honor above life itself.
                    </p>

                    <h3 class="text-xl font-bold pt-4">Key Themes</h3>
                    <ul class="list-disc list-inside space-y-2 text-gray-700">
                        <li>Heroic legends of the Charans and Kathis</li>
                        <li>Traditional folklore of the medieval era</li>
                        <li>The linguistic beauty of the Gujarati dialect</li>
                    </ul>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
                    <h3 class="text-sm font-bold tracking-widest text-gray-400 uppercase mb-4">Information</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between border-b border-gray-50 pb-2">
                            <span class="text-gray-500">Language</span>
                            <span class="font-medium">Gujarati</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-50 pb-2">
                            <span class="text-gray-500">Pages</span>
                            <span class="font-medium">210</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-50 pb-2">
                            <span class="text-gray-500">Year</span>
                            <span class="font-medium">1927</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-500">File Size</span>
                            <span class="font-medium">4.2 MB</span>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h3 class="text-sm font-bold tracking-widest text-gray-400 uppercase mb-4">Tags</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-gray-100 px-3 py-1 rounded text-xs font-semibold">History</span>
                            <span class="bg-gray-100 px-3 py-1 rounded text-xs font-semibold">Folklore</span>
                            <span class="bg-gray-100 px-3 py-1 rounded text-xs font-semibold">Literature</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div id="modal" class="fixed inset-0 z-[60] hidden items-center justify-center p-4 bg-black/60 backdrop-blur-sm">
        <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden shadow-2xl">
            <div class="p-8 text-center">
                <p id="modalType" class="text-xs font-bold text-ugcOrange uppercase mb-2">Processing</p>
                <h3 id="modalTitle" class="text-xl font-bold text-gray-900 mb-2 leading-tight">Book Title</h3>
                <p id="modalSub" class="text-sm text-gray-500 mb-8 px-4 leading-relaxed">Preparing your request...</p>

                <div class="relative w-full h-3 bg-gray-100 rounded-full overflow-hidden mb-8">
                    <div id="progressFill"
                        class="absolute top-0 left-0 h-full bg-ugcOrange transition-all duration-300 w-0"></div>
                </div>
                <p id="progressLabel" class="text-sm font-bold text-gray-900 mb-8">0%</p>

                <button id="modalBtn" onclick="closeModal()"
                    class="w-full py-3 rounded-xl bg-gray-100 hover:bg-gray-200 text-gray-800 font-bold transition-colors">
                    ✕ Close
                </button>
            </div>
        </div>
    </div>

    <div id="pdfReaderModal" class="fixed inset-0 z-[100] hidden flex-col bg-[#525659]">
        <div class="flex items-center justify-between px-6 py-3 bg-gray-900 text-white shadow-xl">
            <div class="flex items-center gap-3">
                <span class="text-xl">📖</span>
                <span id="pdfReaderTitle" class="font-bold truncate max-w-[200px] sm:max-w-md italic text-gray-200">Book
                    Title</span>
            </div>
            <button onclick="closePdfReader()"
                class="bg-red-500 hover:bg-red-600 text-white px-4 py-1.5 rounded-lg text-sm font-bold transition-colors">
                ✕ Close Reader
            </button>
        </div>

        <iframe id="pdfReaderFrame" src="" class="flex-1 w-full border-none bg-[#525659]"></iframe>
    </div>
@endsection

@section('scripts')
    <script>
        console.log("Book Details loaded");
    </script>
    <script>
        let progressInterval = null;

        function openReadModal(title) {
            setupModal('📖 Reading', title, 'Loading your reading experience…', '✕ Close');

            animateProgress(() => {
                const btn = document.getElementById('modalBtn');
                document.getElementById('modalSub').textContent = 'Ready! Click below to open the reader.';
                btn.textContent = 'Open Reader';
                btn.classList.replace('bg-gray-100', 'bg-gray-900');
                btn.classList.replace('text-gray-800', 'text-white');

                btn.onclick = function () {
                    closeModal();
                    if (btn.textContent === 'Open Reader') {
                        incrementDownload();
                        openPdfReader(title, `${BASE_URL}/uploads/pdfs/{{$book->pdf_file}}#toolbar=0&navpanes=0`);
                    }
                };
            });
        }

        function openDownloadModal(title) {
            setupModal('Downloading', title, 'Preparing your PDF download…', '✕ Close');

            animateProgress(() => {
                const btn = document.getElementById('modalBtn');
                document.getElementById('modalSub').textContent = 'Your file is ready for download.';
                btn.textContent = 'Download';
                btn.classList.replace('bg-gray-100', 'bg-ugcOrange');
                btn.classList.replace('text-gray-800', 'text-white');

                btn.onclick = function () {
                    if (btn.textContent === 'Download') {
                        incrementDownload();
                        const a = document.createElement('a');
                        a.href = `${BASE_URL}/uploads/pdfs/{{$book->pdf_file}}`;
                        a.download = `${title}.pdf`;
                        document.body.appendChild(a);
                        a.click();
                        document.body.removeChild(a);
                    }
                    closeModal();
                };
            });
        }

        function setupModal(type, title, sub, btnText) {
            const modal = document.getElementById('modal');
            document.getElementById('modalType').textContent = type;
            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalSub').textContent = sub;
            const btn = document.getElementById('modalBtn');
            btn.textContent = btnText;

            // Reset styles to default
            btn.className = "w-full py-3 rounded-xl bg-gray-100 hover:bg-gray-200 text-gray-800 font-bold transition-colors";

            document.getElementById('progressFill').style.width = '0%';
            document.getElementById('progressLabel').textContent = '0%';

            modal.classList.replace('hidden', 'flex');
            document.body.classList.add('overflow-hidden');
        }

        function animateProgress(cb) {
            let p = 0;
            progressInterval = setInterval(() => {
                p += Math.random() * 25;
                if (p >= 100) {
                    p = 100;
                    clearInterval(progressInterval);
                    cb();
                }
                document.getElementById('progressFill').style.width = p + '%';
                document.getElementById('progressLabel').textContent = Math.round(p) + '%';
            }, 100);
        }

        function incrementDownload() {
            fetch(`${BASE_URL}/book/{{ $book->id }}/sell`, {
                method: "GET"
            })
                .then(res => res.json())
                .then(data => console.log("Stat updated:", data))
                .catch(err => console.error("Update failed", err));
        }

        function openPdfReader(title, pdfUrl) {
            document.getElementById('pdfReaderTitle').textContent = title;
            document.getElementById('pdfReaderFrame').src = pdfUrl;
            document.getElementById('pdfReaderModal').classList.replace('hidden', 'flex');
            document.body.classList.add('overflow-hidden');
        }

        function closePdfReader() {
            document.getElementById('pdfReaderModal').classList.replace('flex', 'hidden');
            document.getElementById('pdfReaderFrame').src = '';
            document.body.classList.remove('overflow-hidden');
        }

        function closeModal() {
            if (progressInterval) clearInterval(progressInterval);
            document.getElementById('modal').classList.replace('flex', 'hidden');
            document.body.classList.remove('overflow-hidden');
        }
    </script>
@endsection