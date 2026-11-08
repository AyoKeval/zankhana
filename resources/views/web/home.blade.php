@extends('layouts.web')

@section('content')
    <main id="main-content" class="flex-grow max-w-7xl mx-auto px-4 w-full py-6 grid grid-cols-1 lg:grid-cols-12 gap-6">

        <!-- Center Main Content (Width ~6 cols) -->
        <section class="lg:col-span-9 space-y-6">
            <!-- Hero Announcement Area -->
            <div class="bg-white rounded border border-gray-200 shadow-sm overflow-hidden">
                <div class="p-6 sm:p-8">
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-ugcOrange leading-tight mb-4 border-b pb-3">
                        Welcome to Zankhana International E-Journal</h2>
                    <p class="text-sm text-gray-700 mb-4 leading-relaxed font-semibold">
                        We warmly welcome you to Zankhana International E-Journal, a multidisciplinary, peer-reviewed,
                        monthly international research journal published in online mode.
                    </p>
                    <p class="text-sm text-gray-600 mb-4 leading-relaxed">
                        Zankhana International E-Journal provides an academic platform for researchers, academicians,
                        scholars, professionals, practitioners and students to disseminate, exchange and share knowledge
                        through high-quality original research papers, empirical and theoretical studies, conceptual papers,
                        review papers, literature reviews, case studies, analytical studies, academic articles, book
                        reviews, technical notes, and research-based scholarly works.
                    </p>
                    <p class="text-sm text-gray-600 mb-4 leading-relaxed">
                        The journal aims to promote multidisciplinary research, intellectual exchange and scholarly
                        communication by providing opportunities for researchers and academicians from diverse academic
                        backgrounds to present their research and contribute to the advancement of knowledge.
                    </p>
                    <p class="text-sm text-gray-600 mb-6 leading-relaxed">
                        Zankhana International E-Journal encourages original, innovative and academically rigorous research
                        from different disciplines and welcomes scholarly contributions from India and across the world. The
                        journal seeks to provide an inclusive platform for the diversity of intellectual pursuits and to
                        facilitate the enrichment and enhancement of knowledge among academic and professional communities.
                    </p>
                    <div class="bg-orange-50 border-l-4 border-ugcOrange p-4 rounded text-sm text-gray-800 font-medium">
                        <span class="font-bold text-ugcOrange">Next Issue Deadline:</span> 18th of this month. Submit
                        your research papers today!
                    </div>
                </div>
            </div>

            <!-- Content Area - Latest Publications -->
            <div class="bg-white rounded border border-gray-200 shadow-sm p-4 sm:p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-bold text-gray-800 uppercase border-l-4 border-ugcOrange pl-3">Latest
                        Publications</h3>
                    <a href="{{ url('book') }}"
                        class="text-sm font-semibold text-ugcOrange hover:underline bg-orange-100 px-3 py-1 rounded">View
                        All →</a>
                </div>

                <!-- Book/Article Grid -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                    <?php $count = 0;
  foreach ($books as $book): ?>
                    <?php  if ($book->is_active == 1): ?>
                    <?php
                    $count++;
                    if ($count > 12) {
                        break;
                    }
                    ?>
                    <a href="{{ url('book') }}/{{ $book->title }}">
                        <div
                            class="group flex flex-col bg-white border border-gray-100 rounded hover:shadow-md transition-all p-3">
                            <div
                                class="w-full bg-gray-100 rounded flex items-center justify-center p-6 text-ugcOrange mb-3">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                            </div>
                            <p class="font-bold text-gray-900 text-sm leading-tight hover:text-ugcOrange mb-1 line-clamp-2">
                                <?= $book->title ?>
                            </p>
                            <p class="text-xs text-gray-500 mb-2">by
                                <?= htmlspecialchars($book->author) ?>
                            </p>
                            <div class="mt-auto">
                                <span
                                    class="inline-block bg-blue-100 text-blue-800 text-[10px] px-2 py-0.5 rounded font-bold uppercase">
                                    <?= htmlspecialchars($book->category) ?>
                                </span>
                            </div>
                        </div>
                    </a>
                    <?php  endif ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Right Sidebar (Width ~3 cols) -->
        <aside class="lg:col-span-3 space-y-6">

            <!-- Editorial Board -->
            <div class="bg-white rounded border border-gray-200 shadow-sm p-4">
                <h3 class="font-bold text-gray-800 mb-3 uppercase text-sm border-b pb-2">Editorial Board</h3>
                <div class="space-y-4 text-sm mt-2">
                    <div>
                        <p class="font-bold text-ugcOrange">Dr. VIPULA V. VAGHELA</p>
                        <p class="text-xs text-gray-500">(Chief Editor)</p>
                        <p class="text-xs text-gray-700 mt-1">Shree Shardapeeth Arts, Commerce and Education college,
                            Dwarka</p>
                    </div>
                    <div>
                        <p class="font-bold text-gray-800">PROF. Darshana C. Bosmiya</p>
                        <p class="text-xs text-gray-500">(Executive Co-Editor)</p>
                    </div>
                    <div>
                        <p class="font-bold text-gray-800">Dr. Prashant K. Chauhan</p>
                        <p class="text-xs text-gray-500">(Chief Editor, M.A., Ph.D.)</p>
                    </div>
                </div>
                <a href="{{ url('board') }}"
                    class="block text-center mt-4 text-xs font-bold text-ugcOrange hover:underline">View
                    Full Board →</a>
            </div>

            <!-- Notice Board -->
            <div class="bg-white rounded border border-gray-200 shadow-sm overflow-hidden">
                <div
                    class="bg-gray-100 px-4 py-2 border-b border-gray-200 text-gray-800 font-bold uppercase text-xs tracking-wide">
                    Fast Track Process
                </div>
                <div class="p-4 space-y-3 text-sm">
                    <p class="text-gray-700">Get your paper published online exactly on the 19th of every month. Submit
                        original work today.</p>
                    <button
                        class="w-full bg-ugcOrange hover:bg-ugcDark text-white font-bold py-2 rounded text-sm transition shadow-sm">Review
                        Process</button>
                </div>
            </div>
        </aside>
    </main>
@endsection
