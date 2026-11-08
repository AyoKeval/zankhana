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
                <span>Policies</span>
                <span>/</span>
                <span>Publication Ethics</span>
            </div>
            <h1 class="text-3xl font-bold text-gray-900">Publication Ethics & Malpractice Statement</h1>
            <p class="text-gray-600 text-sm mt-1">
                Standards of ethical behavior, research integrity, and publication responsibilities for Zankhana
                International E-Journal.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

            <!-- Sidebar (4 cols) -->
            <aside class="lg:col-span-4 space-y-6">

                <!-- Policies Navigation Box -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5">
                    <h3 class="text-xs font-black uppercase tracking-widest text-gray-400 mb-3">All Policies</h3>
                    <div class="space-y-1.5">
                        <a href="{{ route('privacy', 'publication-ethics') }}"
                            class="block px-3 py-2 rounded-lg text-sm font-bold bg-orange-50 text-ugcOrange border border-orange-200">
                            ✓ Publication Ethics
                        </a>
                        <a href="{{ route('privacy', 'plagiarism-policy') }}"
                            class="block px-3 py-2 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-ugcOrange transition">
                            Plagiarism Policy →
                        </a>
                        <a href="{{ route('privacy', 'copyright-policy') }}"
                            class="block px-3 py-2 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-ugcOrange transition">
                            Copyright Policy →
                        </a>
                    </div>
                </div>

                <!-- Document Download Box -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5 space-y-3">
                    <h3 class="text-xs font-black uppercase tracking-widest text-gray-400">Official Document</h3>
                    <p class="text-xs text-gray-500 leading-relaxed">Download the authenticated PDF version of this policy
                        document.</p>
                    <a href="{{ asset('uploads/web/policy/publication-ethics.pdf') }}" download
                        class="flex items-center justify-center gap-2 w-full px-4 py-2.5 rounded-lg bg-ugcOrange hover:bg-ugcDark text-white font-bold text-xs shadow-sm transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        Download Policy PDF
                    </a>
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
                        <span class="text-gray-400 text-xs block">Editorial Office Email:</span>
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
                            ⚖️
                        </div>
                        <div class="flex-1">
                            <h2 class="h-12 text-xl font-bold text-gray-900 mb-2">Academic Integrity & Ethical Standards
                            </h2>
                            <p class="text-gray-700 text-sm sm:text-base leading-relaxed -ml-16 lg:ml-0 mb-4">
                                <strong>Zankhana International E-Journal</strong> is committed to upholding academic
                                integrity, transparent editorial practices, responsible authorship, and ethical scholarly
                                publishing across all disciplines.
                            </p>
                            <div class="flex flex-wrap gap-2 -ml-16 lg:ml-0">
                                <a href="{{ asset('uploads/web/policy/publication-ethics.pdf') }}" download
                                    class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg bg-ugcOrange hover:bg-ugcDark text-white font-bold text-xs shadow-sm transition">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                    </svg>
                                    Download PDF
                                </a>
                                <a href="{{ asset('uploads/web/policy/publication-ethics.pdf') }}" target="_blank"
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

                <!-- Ethics Points List -->
                <div class="space-y-4">

                    <!-- 1. Research Integrity -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">1</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Research Integrity</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            <strong>Zankhana International E-Journal</strong> is committed to promoting honesty,
                            transparency, accountability, and responsible research practices. Authors must present their
                            research findings accurately and avoid fabrication, falsification, and other forms of research
                            misconduct.
                        </p>
                    </section>

                    <!-- 2. Originality -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">2</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Originality</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            All submitted manuscripts must represent original scholarly work and contribute meaningfully to
                            the relevant field of knowledge. Authors must properly acknowledge all sources and disclose any
                            relevant prior publication or overlapping work.
                        </p>
                    </section>

                    <!-- 3. Plagiarism Prevention -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">3</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Plagiarism Prevention</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            The journal does not accept plagiarism or inappropriate reuse of published material. Manuscripts
                            may be screened using appropriate similarity-detection tools. Similarity reports will be
                            evaluated by the editorial team, and manuscripts involving plagiarism may be returned for
                            correction or rejected in accordance with the journal's Plagiarism Policy.
                        </p>
                    </section>

                    <!-- 4. Authorship -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">4</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Authorship</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            Authorship must reflect genuine and substantial scholarly contributions to the research and
                            manuscript. All listed authors must approve the final manuscript and agree to its submission.
                            Individuals who do not meet authorship criteria should be acknowledged appropriately. Changes in
                            authorship must be justified and approved by all concerned authors.
                        </p>
                    </section>

                    <!-- 5. Conflict of Interest -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">5</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Conflict of Interest</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            Authors, editors, and peer reviewers must disclose any financial, professional, institutional,
                            or personal interests that could influence, or appear to influence, their work or editorial
                            judgment. The journal will take appropriate steps to manage disclosed conflicts and maintain
                            impartiality.
                        </p>
                    </section>

                    <!-- 6. Peer Reviewer Ethics -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">6</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Peer Reviewer Ethics</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            Peer reviewers must evaluate manuscripts objectively, fairly, and confidentially. Reviews should
                            be constructive and based on scholarly quality, originality, methodological soundness, and
                            relevance. Reviewers must disclose potential conflicts of interest, avoid using unpublished
                            information for personal advantage, and report suspected ethical concerns to the editor.
                        </p>
                    </section>

                    <!-- 7. Corrections -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">7</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Corrections</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            The journal is committed to maintaining the accuracy and integrity of the scholarly record. If
                            significant errors are identified in a published article, the journal may publish a correction
                            or clarification after appropriate evaluation. Authors are encouraged to notify the editorial
                            office promptly upon discovering material errors in their published work.
                        </p>
                    </section>

                    <!-- 8. Retractions -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">8</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Retractions</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            The journal may retract a published article when serious concerns, such as unreliable findings,
                            plagiarism, data fabrication or falsification, or significant ethical violations, undermine the
                            integrity of the publication. Retractions will be handled transparently, with an appropriate
                            explanation linked to the original article wherever practicable.
                        </p>
                    </section>

                    <!-- 9. Complaints and Appeals -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">9</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Complaints and Appeals</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            <strong>Zankhana International E-Journal</strong> welcomes reasoned complaints and appeals
                            concerning editorial decisions, peer review, publication ethics, and alleged misconduct.
                            Submissions must be made in writing to the editorial office with relevant details and supporting
                            evidence. All complaints and appeals will be considered fairly, confidentially, and impartially,
                            wherever practicable.
                        </p>
                    </section>

                    <!-- 10. Ethical Commitment -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">10</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Ethical Commitment</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            <strong>Zankhana International E-Journal</strong> is committed to upholding academic integrity,
                            transparent editorial practices, responsible authorship, and ethical scholarly publishing. All
                            authors, editors, and reviewers are expected to comply with these principles and the journal's
                            applicable publication policies.
                        </p>
                    </section>

                </div>

                <!-- Policy Review Notice -->
                <div
                    class="p-4 bg-gray-50 border border-gray-200 rounded-xl text-xs sm:text-sm text-gray-600 leading-relaxed italic">
                    <strong>Policy Review:</strong> Zankhana International E-Journal may revise this policy when necessary
                    to reflect changes in its publication practices and international publication ethics guidelines.
                </div>

            </div>
        </div>

    </main>
@endsection

@section('scripts')
@endsection
