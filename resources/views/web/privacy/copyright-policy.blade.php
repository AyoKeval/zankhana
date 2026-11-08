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
                <span>Copyright Policy</span>
            </div>
            <h1 class="text-3xl font-bold text-gray-900">Copyright & Open Access Policy</h1>
            <p class="text-gray-600 text-sm mt-1">
                Terms governing copyright ownership, author rights, open access distribution, and third-party material
                usage.
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
                            class="block px-3 py-2 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-ugcOrange transition">
                            Publication Ethics →
                        </a>
                        <a href="{{ route('privacy', 'plagiarism-policy') }}"
                            class="block px-3 py-2 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-ugcOrange transition">
                            Plagiarism Policy →
                        </a>
                        <a href="{{ route('privacy', 'copyright-policy') }}"
                            class="block px-3 py-2 rounded-lg text-sm font-bold bg-orange-50 text-ugcOrange border border-orange-200">
                            ✓ Copyright Policy
                        </a>
                    </div>
                </div>

                <!-- Document Download Box -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5 space-y-3">
                    <h3 class="text-xs font-black uppercase tracking-widest text-gray-400">Official Document</h3>
                    <p class="text-xs text-gray-500 leading-relaxed">Download the authenticated PDF version of this policy
                        document.</p>
                    <a href="{{ asset('uploads/web/policy/copyright-policy.pdf') }}" download
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
                        <span class="text-gray-400 text-xs block">Editorial Complaints Email:</span>
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
                            ©
                        </div>
                        <div class="flex-1">
                            <h2 class="h-12 text-xl font-bold text-gray-900 mb-2">Author-Centric Copyright Ownership</h2>
                            <p class="text-gray-700 text-sm sm:text-base leading-relaxed -ml-16 lg:ml-0 mb-4">
                                Copyright of published articles remains with the respective author(s). <strong>Zankhana
                                    International E-Journal</strong> operates under open access principles to facilitate
                                scholarly advancement while respecting author ownership.
                            </p>
                            <div class="flex flex-wrap gap-2 -ml-16 lg:ml-0">
                                <a href="{{ asset('uploads/web/policy/copyright-policy.pdf') }}" download
                                    class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg bg-ugcOrange hover:bg-ugcDark text-white font-bold text-xs shadow-sm transition">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                    </svg>
                                    Download PDF
                                </a>
                                <a href="{{ asset('uploads/web/policy/copyright-policy.pdf') }}" target="_blank"
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

                <!-- 9 Points Grid / List -->
                <div class="space-y-4">

                    <!-- 1. Copyright Ownership -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">1</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Copyright Ownership</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            Copyright of published articles remains with the respective author(s), unless otherwise agreed
                            in writing or required by applicable law. Authors are responsible for ensuring that their
                            manuscripts do not infringe upon the rights of third parties.
                        </p>
                    </section>

                    <!-- 2. Open Access Policy -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">2</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Open Access Policy</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            <strong>Zankhana International E-Journal</strong> aims to provide access to scholarly research
                            for academic, educational, and research purposes. Access to published articles is subject to the
                            journal's applicable publication terms.
                        </p>
                    </section>

                    <!-- 3. Author Rights -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">3</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Author Rights</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            Authors may use their published work for teaching, research, academic presentations, and other
                            scholarly purposes, subject to any written agreement with the journal. Appropriate
                            acknowledgement and citation of the original publication in <strong>Zankhana International
                                E-Journal</strong> is expected.
                        </p>
                    </section>

                    <!-- 4. Publication Rights -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">4</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Publication Rights</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            Authors grant the journal the publication and distribution rights agreed upon during the
                            publication process.
                        </p>
                    </section>

                    <!-- 5. Third-Party Materials -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">5</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Third-Party Materials</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            Authors must obtain permission for copyrighted third-party materials wherever required and
                            provide appropriate citations and acknowledgements. Authors are responsible for ensuring that
                            submitted content does not unlawfully infringe intellectual property rights.
                        </p>
                    </section>

                    <!-- 6. Originality and Author Responsibility -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">6</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Originality and Author Responsibility
                            </h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            Authors must ensure that submitted manuscripts are original, properly cited, and prepared in
                            accordance with the journal's publication ethics policy. Authors must disclose relevant
                            conflicts of interest and obtain approval from all co-authors before submission.
                        </p>
                    </section>

                    <!-- 7. Previously Published Articles -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">7</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Previously Published Articles</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            Authors must disclose any previous publication or existing publication agreement relating to
                            their manuscripts. Duplicate publication and unauthorised reproduction are not permitted.
                        </p>
                    </section>

                    <!-- 8. Copyright Complaints -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">8</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Copyright Complaints</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            Copyright-related complaints should be submitted to the journal's official editorial contact
                            with relevant details and supporting evidence. The journal will review complaints and take
                            appropriate action where necessary.
                        </p>
                    </section>

                    <!-- 9. Website Copyright -->
                    <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 sm:p-8">
                        <div class="flex items-center gap-2 mb-2">
                            <span
                                class="w-7 h-7 rounded-lg bg-orange-100 text-ugcOrange font-bold text-xs flex items-center justify-center shrink-0">9</span>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900">Website Copyright</h3>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed pl-0 lg:pl-10">
                            The journal's logo, website design, branding, and other website content are separate from the
                            copyright in individual articles. Their use requires appropriate authorisation where applicable.
                        </p>
                    </section>

                </div>

                <!-- Policy Review Notice -->
                <div
                    class="p-4 bg-gray-50 border border-gray-200 rounded-xl text-xs sm:text-sm text-gray-600 leading-relaxed italic">
                    <strong>Policy Review:</strong> Zankhana International E-Journal may revise this policy when necessary
                    to reflect changes in its publication practices and applicable law.
                </div>

            </div>
        </div>

    </main>
@endsection

@section('scripts')
@endsection
