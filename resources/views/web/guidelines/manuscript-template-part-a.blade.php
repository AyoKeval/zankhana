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
                <span>Manuscript Template Part A</span>
            </div>
            <h1 class="text-3xl font-bold text-gray-900">Manuscript Template: Part A (Title Page & Declarations)</h1>
            <p class="text-gray-600 text-sm mt-1">
                Author identification details, institutional affiliations, acknowledgements, and ethical declarations for
                double-blind submission.
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
                            class="block px-3 py-2 rounded-lg text-sm font-bold bg-orange-50 text-ugcOrange border border-orange-200">
                            ✓ Manuscript Template Part A
                        </a>
                        <a href="{{ route('guidelines', 'manuscript-template-part-b') }}"
                            class="block px-3 py-2 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-ugcOrange transition">
                            Manuscript Template Part B →
                        </a>
                    </div>
                </div>

                <!-- Document Download Box -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5 space-y-3">
                    <h3 class="text-xs font-black uppercase tracking-widest text-gray-400">Official Template PDF</h3>
                    <p class="text-xs text-gray-500 leading-relaxed">Download Part A Title Page & Author Declaration
                        template.</p>
                    <a href="{{ asset('uploads/web/guidelines/manuscript-template-part-a.pdf') }}" download
                        class="flex items-center justify-center gap-2 w-full px-4 py-2.5 rounded-lg bg-ugcOrange hover:bg-ugcDark text-white font-bold text-xs shadow-sm transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        Download Part A (.pdf)
                    </a>
                </div>

                <!-- Double-Blind Notice -->
                <div class="bg-orange-50/70 border border-orange-200 rounded-xl p-5 text-xs text-gray-700 space-y-2">
                    <p class="font-bold text-ugcOrange uppercase tracking-wider text-xs">Double-Blind Review Notice</p>
                    <p class="leading-relaxed">
                        To maintain impartial evaluation, submit Part A separately. Do not include author names,
                        affiliations, or institutional identifiers in Part B (the main manuscript).
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
                            📄
                        </div>
                        <div class="flex-1">
                            <h2 class="h-12 text-xl font-bold text-gray-900 mb-2">Part A: Title Page & Author Declaration
                            </h2>
                            <p class="text-gray-700 text-sm sm:text-base leading-relaxed -ml-16 lg:ml-0 mb-4">
                                Use this template to compile all author and co-author identification, contact information,
                                ethics approval, funding declarations, and signed submission confirmations.
                            </p>
                            <div class="flex flex-wrap gap-2 -ml-16 lg:ml-0">
                                <a href="{{ asset('uploads/web/guidelines/manuscript-template-part-a.pdf') }}" download
                                    class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg bg-ugcOrange hover:bg-ugcDark text-white font-bold text-xs shadow-sm transition">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                    </svg>
                                    Download Part A PDF
                                </a>
                                <a href="{{ asset('uploads/web/guidelines/manuscript-template-part-a.pdf') }}"
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

                <!-- Template Content -->
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
                                <span class="font-bold text-gray-900 block mb-1">Suggested Fonts & Sizes:</span>
                                <div>• <strong>English:</strong> Times New Roman, Main Title: 14pt Bold, Subtitle & Body:
                                    12pt</div>
                                <div>• <strong>Gujarati:</strong> LMG or Tera Font, Main Title: 14pt Bold, Subtitle & Body:
                                    12pt</div>
                                <div>• <strong>Hindi:</strong> Mangal or Krutidev Font, Main Title: 14pt Bold, Subtitle &
                                    Body: 12pt</div>
                                <div>• <strong>Sanskrit:</strong> Mangal Font, Main Title: 14pt Bold, Subtitle & Body: 12pt
                                </div>
                            </div>
                            <p><strong>• Margins & Spacing:</strong> 0.5-inch on all sides; 1.5 line spacing for main text.
                            </p>
                            <p><strong>• Reference Style:</strong> APA 7th Edition consistently applied.</p>
                        </div>
                    </section>

                    <!-- Part A: Required Information Fields -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">2</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Required Information Fields (Part A)
                            </h3>
                        </div>
                        <div class="pl-0 lg:pl-10 space-y-2.5 text-xs sm:text-sm text-gray-700">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                                <div class="p-2.5 bg-gray-50 rounded border border-gray-100"><strong>1. Manuscript
                                        Title:</strong> Concise and informative</div>
                                <div class="p-2.5 bg-gray-50 rounded border border-gray-100"><strong>2. Article
                                        Type:</strong> Research / Review / Case Study</div>
                                <div class="p-2.5 bg-gray-50 rounded border border-gray-100"><strong>3. Author 1 Full
                                        Name:</strong> Complete scholarly name</div>
                                <div class="p-2.5 bg-gray-50 rounded border border-gray-100"><strong>4.
                                        Designation:</strong> Professor / Lecturer / Researcher</div>
                                <div class="p-2.5 bg-gray-50 rounded border border-gray-100"><strong>5. Author 1 College
                                        Name:</strong> Full college or institute</div>
                                <div class="p-2.5 bg-gray-50 rounded border border-gray-100"><strong>6.
                                        Affiliation:</strong> Department, City, State, Country</div>
                                <div class="p-2.5 bg-gray-50 rounded border border-gray-100"><strong>7. Corresponding
                                        Email:</strong> Official contact email</div>
                                <div class="p-2.5 bg-gray-50 rounded border border-gray-100"><strong>8. ORCID:</strong>
                                    Contributor ID (if available)</div>
                            </div>
                            <div class="p-2.5 bg-gray-50 rounded border border-gray-100"><strong>9. Co-Authors:</strong>
                                List full names, designations, affiliations, emails, and ORCID IDs</div>
                            <div class="p-2.5 bg-gray-50 rounded border border-gray-100"><strong>10. Funding
                                    Statement:</strong> Grant/Funding source or "No external funding received"</div>
                            <div class="p-2.5 bg-gray-50 rounded border border-gray-100"><strong>11. Conflict of
                                    Interest:</strong> Disclosure or "The authors declare no conflict of interest"</div>
                            <div class="p-2.5 bg-gray-50 rounded border border-gray-100"><strong>12.
                                    Acknowledgements:</strong> Professional acknowledgements (if any)</div>
                            <div class="p-2.5 bg-gray-50 rounded border border-gray-100"><strong>13. Ethics Approval /
                                    Consent:</strong> Institutional ethics approval reference number</div>
                            <div class="p-2.5 bg-gray-50 rounded border border-gray-100"><strong>14. AI Tool Use
                                    Disclosure:</strong> State tool name and purpose where applicable</div>
                        </div>
                    </section>

                    <!-- Author Declaration -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">3</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Author Declaration Checklist</h3>
                        </div>
                        <p class="text-gray-700 text-xs sm:text-sm leading-relaxed pl-0 lg:pl-10 mb-3">
                            All authors must review and agree to the following 9 declarations prior to manuscript
                            submission:
                        </p>
                        <div class="pl-0 lg:pl-10 space-y-2 text-xs sm:text-sm text-gray-700">
                            <div class="flex items-start gap-2">
                                <span class="text-ugcOrange font-bold">☑</span>
                                <span><strong>Originality:</strong> The manuscript is original and has not been published
                                    previously.</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <span class="text-ugcOrange font-bold">☑</span>
                                <span><strong>Exclusive Submission:</strong> The work is not under consideration by any
                                    other journal or publisher.</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <span class="text-ugcOrange font-bold">☑</span>
                                <span><strong>Author Approval:</strong> All listed co-authors have approved the final
                                    manuscript and consent to submission.</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <span class="text-ugcOrange font-bold">☑</span>
                                <span><strong>Accurate Reporting:</strong> All data, results, citations, and statements are
                                    presented honestly.</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <span class="text-ugcOrange font-bold">☑</span>
                                <span><strong>Ethical Compliance:</strong> Applicable human/animal ethics and informed
                                    consent procedures were followed.</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <span class="text-ugcOrange font-bold">☑</span>
                                <span><strong>Plagiarism & Attribution:</strong> All borrowed ideas, text, and figures are
                                    properly cited with permissions.</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <span class="text-ugcOrange font-bold">☑</span>
                                <span><strong>Conflict of Interest & Funding:</strong> All relevant funding sources and
                                    potential conflicts are disclosed.</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <span class="text-ugcOrange font-bold">☑</span>
                                <span><strong>AI Disclosure:</strong> AI tools have been used and disclosed in accordance
                                    with policy.</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <span class="text-ugcOrange font-bold">☑</span>
                                <span><strong>Copyright & Permissions:</strong> Authors agree to comply with published
                                    copyright and licensing terms.</span>
                            </div>
                        </div>
                    </section>

                </div>

                <!-- Template Download Card at bottom -->
                <div
                    class="p-6 bg-gradient-to-r from-orange-500 to-ugcOrange rounded-xl text-white shadow-md flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div>
                        <h3 class="text-lg font-bold">Download Part A Official Template</h3>
                        <p class="text-white/80 text-xs sm:text-sm">Includes the complete title page layout and signed
                            author declaration form.</p>
                    </div>
                    <a href="{{ asset('uploads/web/guidelines/manuscript-template-part-a.pdf') }}" download
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
