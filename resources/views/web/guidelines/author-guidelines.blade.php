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
                <span>Author Guidelines</span>
            </div>
            <h1 class="text-3xl font-bold text-gray-900">Author Guidelines</h1>
            <p class="text-gray-600 text-sm mt-1">
                Instructions for manuscript preparation, formatting, referencing, ethical compliance, and submission to
                Zankhana International E-Journal.
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
                            class="block px-3 py-2 rounded-lg text-sm font-bold bg-orange-50 text-ugcOrange border border-orange-200">
                            ✓ Author Guidelines
                        </a>
                        <a href="{{ route('guidelines', 'manuscript-template-part-a') }}"
                            class="block px-3 py-2 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-ugcOrange transition">
                            Manuscript Template Part A →
                        </a>
                        <a href="{{ route('guidelines', 'manuscript-template-part-b') }}"
                            class="block px-3 py-2 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-ugcOrange transition">
                            Manuscript Template Part B →
                        </a>
                    </div>
                </div>

                <!-- Document Download Box -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5 space-y-3">
                    <h3 class="text-xs font-black uppercase tracking-widest text-gray-400">Official Document</h3>
                    <p class="text-xs text-gray-500 leading-relaxed">Download the authenticated PDF version of the Author
                        Guidelines.</p>
                    <a href="{{ asset('uploads/web/guidelines/author-guidelines.pdf') }}" download
                        class="flex items-center justify-center gap-2 w-full px-4 py-2.5 rounded-lg bg-ugcOrange hover:bg-ugcDark text-white font-bold text-xs shadow-sm transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        Download Guidelines PDF
                    </a>
                </div>

                <!-- Quick Submission Checklist -->
                <div class="bg-orange-50/60 rounded-xl border border-orange-200 p-5 space-y-2 text-xs">
                    <h3 class="font-bold text-ugcOrange uppercase tracking-wider text-xs">Quick Submission Checklist</h3>
                    <ul class="space-y-1.5 text-gray-700">
                        <li class="flex items-start gap-1.5">
                            <span class="text-ugcOrange font-bold">✓</span> File in Microsoft Word (.docx) format
                        </li>
                        <li class="flex items-start gap-1.5">
                            <span class="text-ugcOrange font-bold">✓</span> Margins 0.5" all sides, 1.5 line spacing
                        </li>
                        <li class="flex items-start gap-1.5">
                            <span class="text-ugcOrange font-bold">✓</span> Part A: Title page & signed declaration
                        </li>
                        <li class="flex items-start gap-1.5">
                            <span class="text-ugcOrange font-bold">✓</span> Part B: Anonymized main manuscript
                        </li>
                        <li class="flex items-start gap-1.5">
                            <span class="text-ugcOrange font-bold">✓</span> APA 7th referencing style
                        </li>
                    </ul>
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
                        <span class="text-gray-400 text-xs block">Submission Email:</span>
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
                            📝
                        </div>
                        <div class="flex-1">
                            <h2 class="h-12 text-xl font-bold text-gray-900 mb-2">Instructions for Authors</h2>
                            <p class="text-gray-700 text-sm sm:text-base leading-relaxed -ml-16 lg:ml-0 mb-4">
                                <strong>Zankhana International E-Journal</strong> is a multidisciplinary scholarly journal
                                providing a platform for researchers, academicians, educators, professionals, and students
                                to publish original research across diverse disciplines.
                            </p>
                            <div class="flex flex-wrap gap-2 -ml-16 lg:ml-0">
                                <a href="{{ asset('uploads/web/guidelines/author-guidelines.pdf') }}" download
                                    class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg bg-ugcOrange hover:bg-ugcDark text-white font-bold text-xs shadow-sm transition">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                    </svg>
                                    Download PDF
                                </a>
                                <a href="{{ asset('uploads/web/guidelines/author-guidelines.pdf') }}" target="_blank"
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

                <!-- Guidelines Points List -->
                <div class="space-y-4">

                    <!-- 1. Scope of Submissions -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">1</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Scope of Submissions</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10 mb-3">
                            The journal considers scholarly contributions in areas including Education, Arts and Humanities,
                            Commerce, Science, Social Sciences, Management, and interdisciplinary studies. The following
                            types of manuscripts may be considered:
                        </p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pl-0 lg:pl-10 text-xs sm:text-sm text-gray-700">
                            <div class="p-2 bg-gray-50 rounded border border-gray-100">• Original Research Papers</div>
                            <div class="p-2 bg-gray-50 rounded border border-gray-100">• Review Articles & Literature
                                Reviews</div>
                            <div class="p-2 bg-gray-50 rounded border border-gray-100">• Conceptual & Theoretical Papers
                            </div>
                            <div class="p-2 bg-gray-50 rounded border border-gray-100">• Case Studies & Analytical Studies
                            </div>
                            <div class="p-2 bg-gray-50 rounded border border-gray-100">• Technical Notes & Models</div>
                            <div class="p-2 bg-gray-50 rounded border border-gray-100">• Book Reviews & Academic Notes</div>
                        </div>
                    </section>

                    <!-- 2. Originality and Exclusivity -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">2</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Originality and Exclusivity</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            Submitted manuscripts must be original and must not have been published previously in
                            substantially the same form or be under simultaneous consideration by another journal. Authors
                            must disclose relevant preprints, conference publications, related manuscripts, or overlapping
                            content at the time of submission. All sources must be properly acknowledged and cited.
                        </p>
                    </section>

                    <!-- 3. Manuscript Preparation & Languages -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">3</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Manuscript Preparation & Formatting
                                Checklist</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10 mb-3">
                            Authors should prepare manuscripts in Microsoft Word (.docx) format with 0.5-inch margins on all
                            sides and 1.5 line spacing.
                        </p>
                        <div class="pl-0 lg:pl-10 space-y-2 text-xs sm:text-sm text-gray-700">
                            <div class="p-3 bg-orange-50/50 rounded-lg border border-orange-100">
                                <span class="font-bold text-gray-900 block mb-1">Language & Typography
                                    Specifications:</span>
                                <ul class="space-y-1">
                                    <li><strong>English:</strong> Times New Roman (Title: 14pt Bold, Subtitle/Body: 12pt)
                                    </li>
                                    <li><strong>Gujarati:</strong> LMG or Tera Font (Title: 14pt Bold, Subtitle/Body: 12pt)
                                    </li>
                                    <li><strong>Hindi:</strong> Mangal or Krutidev Font (Title: 14pt Bold, Subtitle/Body:
                                        12pt)</li>
                                    <li><strong>Sanskrit:</strong> Mangal Font (Title: 14pt Bold, Subtitle/Body: 12pt)</li>
                                </ul>
                            </div>
                            <p><strong>Required Components:</strong> Concise Title, Abstract, 4–6 Keywords, Main Text
                                (Introduction, Literature Review, Objectives, Methodology, Results, Discussion, Conclusion),
                                and References (APA 7th Edition style).</p>
                        </div>
                    </section>

                    <!-- 4. Authorship and Affiliations -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">4</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Authorship and Affiliations</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            Authorship must reflect genuine scholarly contributions. All listed authors must approve the
                            final manuscript and agree to its submission. Authors must provide accurate names, designations,
                            college names, institutional affiliations, and contact details. Any change in authorship after
                            submission requires valid justification and the agreement of all concerned authors.
                        </p>
                    </section>

                    <!-- 5. Plagiarism and Similarity Screening -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">5</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Plagiarism and Similarity Screening
                            </h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            All manuscripts must comply with the journal's Plagiarism Policy. Appropriate
                            similarity-detection tools may be used during editorial screening. Similarity reports are
                            evaluated in context; a similarity percentage alone does not establish plagiarism. Manuscripts
                            involving plagiarism, inadequate attribution, or other serious originality concerns may be
                            returned for correction or rejected.
                        </p>
                    </section>

                    <!-- 6. Research Ethics -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">6</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Research Ethics</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            Authors must ensure that their research is conducted responsibly and that findings are reported
                            accurately. For research involving human participants, personal data, or sensitive information,
                            authors must provide relevant ethical approval, informed consent, or permissions where
                            applicable. Fabrication, falsification, and misleading reporting are unacceptable.
                        </p>
                    </section>

                    <!-- 7. Peer Review and Editorial Decisions -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">7</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Peer Review and Editorial Decisions
                            </h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            Manuscripts are subject to an initial editorial assessment and, where appropriate, double-blind
                            peer review in accordance with the journal's Peer Review Policy. Editorial decisions are based
                            on the manuscript's relevance, originality, scholarly quality, methodological soundness, and
                            compliance with publication ethics. Submission does not guarantee acceptance or publication.
                        </p>
                    </section>

                    <!-- 8. References and Copyright -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">8</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">References and Copyright</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            Authors must cite all sources accurately and obtain permission to reproduce copyrighted material
                            wherever required. Authors are responsible for the accuracy of references, quotations, data, and
                            figures. Copyright ownership remains with the respective author(s) in accordance with the
                            journal's Copyright Policy.
                        </p>
                    </section>

                    <!-- 9. Use of Artificial Intelligence -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">9</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Use of Artificial Intelligence (AI)
                            </h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            Authors remain fully responsible for the accuracy, originality, and integrity of their
                            submissions. AI-assisted tools must not be listed as authors. Where required, authors must
                            disclose the use of generative AI or AI-assisted tools in preparing the manuscript and verify
                            all AI-generated content before submission.
                        </p>
                    </section>

                    <!-- 10. Manuscript Submission -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">10</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Manuscript Submission Process</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            Authors should submit their complete manuscript along with Part A (Title page with author
                            details & signed declaration) and Part B (Anonymized main paper) through the designated
                            submission method or email to <a href="mailto:zankhanaejournal@gmail.com"
                                class="text-ugcOrange font-bold hover:underline">zankhanaejournal@gmail.com</a>.
                        </p>
                    </section>

                    <!-- 11. Revision and Final Proof -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">11</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Revision and Final Proof</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            Authors invited to revise a manuscript should address editorial and reviewer comments carefully
                            and submit a revised version with a point-by-point response within the specified timeframe.
                            Authors must review the final proof and report any remaining errors before publication.
                        </p>
                    </section>

                    <!-- 12. Publication Charges -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">12</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Publication Charges</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            Any applicable submission fees, article processing charges, or publication charges are
                            communicated transparently through the official website or editorial office. Authors should
                            consult the current policy before submission.
                        </p>
                    </section>

                    <!-- 13. Final Declaration -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-green-100 text-green-700 font-bold text-xs flex items-center justify-center shrink-0">✓</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Final Declaration</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            By submitting a manuscript to <strong>Zankhana International E-Journal</strong>, authors confirm
                            that the information provided is accurate, the manuscript complies with the journal's applicable
                            policies, all co-authors have approved the submission, and all relevant ethical and copyright
                            requirements have been addressed.
                        </p>
                    </section>

                </div>

                <!-- Policy Review Notice -->
                <div
                    class="p-4 bg-gray-50 border border-gray-200 rounded-xl text-xs sm:text-sm text-gray-600 leading-relaxed italic">
                    <strong>Editorial Note:</strong> Authors are requested to prepare their submissions using the official
                    templates (Part A and Part B) available for download.
                </div>

            </div>
        </div>

    </main>
@endsection

@section('scripts')
@endsection
