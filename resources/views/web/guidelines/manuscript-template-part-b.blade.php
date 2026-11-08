@extends('layouts.web')

@section('styles')
@endsection

@section('content')
    <main class="max-w-7xl mx-auto w-full px-4 py-8 md:py-12 font-sans">

        <!-- Breadcrumb & Header -->
        <div class="mb-8 border-b border-gray-200 pb-4">
            <div class="flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-ugcOrange mb-1">
                <a href="{{ url('/home') }}" class="hover:underline">Home</a>
                <span>/</span>
                <span>Guidelines</span>
                <span>/</span>
                <span>Manuscript Template Part B</span>
            </div>
            <h1 class="text-3xl font-bold text-gray-900">Manuscript Template: Part B (Main Manuscript)</h1>
            <p class="text-gray-600 text-sm mt-1">
                Anonymized research paper structure, section-by-section breakdown, formatting criteria, and APA 7th
                referencing format.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

            <!-- Sidebar (4 cols) -->
            <aside class="lg:col-span-4 space-y-6">

                <!-- Guidelines Navigation Box -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5">
                    <h3 class="text-xs font-black uppercase tracking-widest text-gray-400 mb-3">Guidelines & Templates</h3>
                    <div class="space-y-1.5">
                        <a href="{{ route('guidelines', 'author-guidelines') }}"
                            class="block px-3 py-2 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-ugcOrange transition">
                            Author Guidelines →
                        </a>
                        <a href="{{ route('guidelines', 'manuscript-template-part-a') }}"
                            class="block px-3 py-2 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-ugcOrange transition">
                            Manuscript Template Part A →
                        </a>
                        <a href="{{ route('guidelines', 'manuscript-template-part-b') }}"
                            class="block px-3 py-2 rounded-lg text-sm font-bold bg-orange-50 text-ugcOrange border border-orange-200">
                            ✓ Manuscript Template Part B
                        </a>
                    </div>
                </div>

                <!-- Document Download Box -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5 space-y-3">
                    <h3 class="text-xs font-black uppercase tracking-widest text-gray-400">Official Template PDF</h3>
                    <p class="text-xs text-gray-500 leading-relaxed">Download Part B Anonymized Main Manuscript template.
                    </p>
                    <a href="{{ asset('uploads/web/guidelines/manuscript-template-part-b.pdf') }}" download
                        class="flex items-center justify-center gap-2 w-full px-4 py-2.5 rounded-lg bg-ugcOrange hover:bg-ugcDark text-white font-bold text-xs shadow-sm transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        Download Part B (.pdf)
                    </a>
                </div>

                <!-- Double Blind Anonymization Reminder -->
                <div class="bg-orange-50/70 border border-orange-200 rounded-xl p-5 text-xs text-gray-700 space-y-2">
                    <p class="font-bold text-ugcOrange uppercase tracking-wider text-xs">Anonymization Requirement</p>
                    <p class="leading-relaxed">
                        Do <strong>NOT</strong> include author names, designations, institutional names, or acknowledgements
                        in this file. All identifying information must be submitted exclusively in Part A.
                    </p>
                </div>

                <!-- Journal Summary Box -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5 space-y-3 text-xs sm:text-sm">
                    <h3 class="text-xs font-black uppercase tracking-widest text-gray-400">Journal Details</h3>
                    <div>
                        <span class="text-gray-400 text-xs block">Journal:</span>
                        <span class="font-bold text-gray-900">Zankhana International E-Journal</span>
                    </div>
                    <div>
                        <span class="text-gray-400 text-xs block">ISSN (Online):</span>
                        <span class="font-bold text-ugcOrange">2350-0271</span>
                    </div>
                    <div>
                        <span class="text-gray-400 text-xs block">Publisher:</span>
                        <span class="font-bold text-gray-900">Madhav Publication</span>
                    </div>
                    <div>
                        <span class="text-gray-400 text-xs block">Submission Contact:</span>
                        <a href="mailto:zankhanaejournal@gmail.com" class="font-bold text-ugcOrange hover:underline">
                            zankhanaejournal@gmail.com
                        </a>
                    </div>
                </div>

            </aside>

            <!-- Main Content (8 cols) -->
            <div class="lg:col-span-8 space-y-6">

                <!-- Core Highlight Banner -->
                <div
                    class="bg-gradient-to-r from-orange-50 to-white rounded-xl border border-orange-200 p-4 sm:p-8 shadow-sm">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-ugcOrange/10 text-ugcOrange flex items-center justify-center font-bold text-2xl shrink-0">
                            📑
                        </div>
                        <div class="flex-1">
                            <h2 class="h-12 text-xl font-bold text-gray-900 mb-2">Part B: Anonymized Main Manuscript</h2>
                            <p class="text-gray-700 text-sm sm:text-base leading-relaxed -ml-16 lg:ml-0 mb-4">
                                This template contains the complete academic structure of your paper (Title, Abstract,
                                Introduction, Methodology, Results, Discussion, and APA 7 References) for double-blind peer
                                review.
                            </p>
                            <div class="flex flex-wrap gap-2 -ml-16 lg:ml-0">
                                <a href="{{ asset('uploads/web/guidelines/manuscript-template-part-b.pdf') }}" download
                                    class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg bg-ugcOrange hover:bg-ugcDark text-white font-bold text-xs shadow-sm transition">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                    </svg>
                                    Download Part B PDF
                                </a>
                                <a href="{{ asset('uploads/web/guidelines/manuscript-template-part-b.pdf') }}"
                                    target="_blank"
                                    class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg bg-white border border-gray-300 text-gray-700 hover:text-ugcOrange hover:border-ugcOrange font-bold text-xs shadow-sm transition">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg>
                                    View in Browser
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Template Sections Breakdown -->
                <div class="space-y-4">

                    <!-- Formatting Checklist -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">1</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Formatting Checklist</h3>
                        </div>
                        <div class="pl-0 lg:pl-10 space-y-2 text-xs sm:text-sm text-gray-700">
                            <p><strong>• File Format:</strong> Microsoft Word (.docx).</p>
                            <div class="p-3 bg-gray-50 rounded-lg border border-gray-100 space-y-1">
                                <span class="font-bold text-gray-900 block mb-1">Font Selection:</span>
                                <div>• <strong>English:</strong> Times New Roman (Main Title: 14pt, Subtitle & Body: 12pt)
                                </div>
                                <div>• <strong>Gujarati:</strong> LMG or Tera Font (Main Title: 14pt, Subtitle & Body: 12pt)
                                </div>
                                <div>• <strong>Hindi:</strong> Mangal or Krutidev Font (Main Title: 14pt, Subtitle & Body:
                                    12pt)</div>
                                <div>• <strong>Sanskrit:</strong> Mangal Font (Main Title: 14pt, Subtitle & Body: 12pt)
                                </div>
                            </div>
                            <p><strong>• Margins:</strong> 0.5-inch on all sides; line spacing: 1.5 for main text.</p>
                        </div>
                    </section>

                    <!-- Abstract & Keywords -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">2</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Title, Abstract & Keywords</h3>
                        </div>
                        <div class="pl-0 lg:pl-10 space-y-2.5 text-xs sm:text-sm text-gray-700">
                            <div>
                                <span class="font-bold text-gray-900 block">Title:</span>
                                <span>Concise, specific, and informative without abbreviations.</span>
                            </div>
                            <div class="pt-2 border-t border-gray-100">
                                <span class="font-bold text-gray-900 block">Abstract:</span>
                                <span>A concise summary stating the Background/Objective, Methodology, Sample/Data Source,
                                    Key Findings, and Conclusion.</span>
                            </div>
                            <div class="pt-2 border-t border-gray-100">
                                <span class="font-bold text-gray-900 block">Keywords:</span>
                                <span>Provide 4–6 specific keywords separated by semicolons (e.g. <em>Higher Education;
                                        Teacher Training; Qualitative Analysis</em>).</span>
                            </div>
                        </div>
                    </section>

                    <!-- Introduction & Literature Review -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">3</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Introduction, Literature Review &
                                Objectives</h3>
                        </div>
                        <div class="pl-0 lg:pl-10 space-y-2.5 text-xs sm:text-sm text-gray-700">
                            <p><strong>• Introduction:</strong> Introduce the research topic, problem statement, rationale,
                                significance, research gap, and context.</p>
                            <p><strong>• Literature Review:</strong> Critical synthesis of existing literature; clearly
                                highlight the specific knowledge gap being addressed.</p>
                            <p><strong>• Objectives / Questions / Hypotheses:</strong> Clear enumeration of research
                                objectives, guiding research questions, and formulated hypotheses.</p>
                        </div>
                    </section>

                    <!-- Methodology -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">4</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Methodology</h3>
                        </div>
                        <div class="pl-0 lg:pl-10 grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs sm:text-sm text-gray-700">
                            <div class="p-2.5 bg-gray-50 rounded border border-gray-100"><strong>Research Design:</strong>
                                Design and academic rationale</div>
                            <div class="p-2.5 bg-gray-50 rounded border border-gray-100"><strong>Population &
                                    Sample:</strong> Sampling method and sample size</div>
                            <div class="p-2.5 bg-gray-50 rounded border border-gray-100"><strong>Tools & Measures:</strong>
                                Instruments, reliability, and validity</div>
                            <div class="p-2.5 bg-gray-50 rounded border border-gray-100"><strong>Data Collection:</strong>
                                Procedures, timeline, and setting</div>
                            <div class="p-2.5 bg-gray-50 rounded border border-gray-100"><strong>Data Analysis:</strong>
                                Statistical software & tests used</div>
                            <div class="p-2.5 bg-gray-50 rounded border border-gray-100"><strong>Ethical
                                    Compliance:</strong> Consent and participant confidentiality</div>
                        </div>
                    </section>

                    <!-- Results & Discussion -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">5</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Results, Discussion & Conclusion</h3>
                        </div>
                        <div class="pl-0 lg:pl-10 space-y-2.5 text-xs sm:text-sm text-gray-700">
                            <p><strong>• Results / Findings:</strong> Present findings clearly and objectively. Number all
                                tables and figures with descriptive titles, and refer to them explicitly in the text.</p>
                            <p><strong>• Discussion:</strong> Interpret results in light of research questions and prior
                                literature, explaining theoretical and practical implications.</p>
                            <p><strong>• Conclusion & Recommendations:</strong> Summarize core findings, acknowledge
                                research limitations, and suggest avenues for future inquiry.</p>
                        </div>
                    </section>

                    <!-- References (APA 7th Edition) -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">6</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">References (APA 7th Edition Style)
                            </h3>
                        </div>
                        <div class="pl-0 lg:pl-10 space-y-2 text-xs sm:text-sm text-gray-700">
                            <p>List only works cited in the text. Every in-text citation must have a matching reference
                                entry:</p>
                            <div
                                class="p-3 bg-gray-50 rounded-lg border border-gray-100 space-y-2 font-mono text-[11px] sm:text-xs text-gray-800">
                                <div><strong>Journal Article:</strong><br>Author, A. A., & Author, B. B. (Year). Title of
                                    the article. <em>Journal Title</em>, <em>volume</em>(issue), page–page.
                                    https://doi.org/xxxxx</div>
                                <div><strong>Book:</strong><br>Author, A. A. (Year). <em>Title of the book</em>. Publisher.
                                </div>
                                <div><strong>Webpage:</strong><br>Organization or Author. (Year, Month Day). <em>Title of
                                        webpage</em>. Website Name. URL</div>
                            </div>
                        </div>
                    </section>

                </div>

                <!-- Template Download Card at bottom -->
                <div
                    class="p-6 bg-gradient-to-r from-orange-500 to-ugcOrange rounded-xl text-white shadow-md flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div>
                        <h3 class="text-lg font-bold">Download Part B Official Template</h3>
                        <p class="text-white/80 text-xs sm:text-sm">Ready-to-use Microsoft Word document structure for
                            double-blind submission.</p>
                    </div>
                    <a href="{{ asset('uploads/web/guidelines/manuscript-template-part-b.pdf') }}" download
                        class="px-5 py-2.5 bg-white text-ugcOrange hover:bg-gray-100 font-bold text-xs sm:text-sm rounded-lg shadow transition whitespace-nowrap">
                        Download PDF (.pdf)
                    </a>
                </div>

            </div>
        </div>

    </main>
@endsection

@section('scripts')
@endsection
