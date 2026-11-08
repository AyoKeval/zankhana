@extends('layouts.web')

@section('styles')
@endsection

@section('content')
    <main class="max-w-7xl mx-auto w-full px-4 py-8 md:py-12 font-sans">

        <!-- Breadcrumb & Page Header -->
        <div class="mb-8 border-b border-gray-200 pb-5">
            <div class="flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-ugcOrange mb-1">
                <a href="{{ url('/home') }}" class="hover:underline">Home</a>
                <span>/</span>
                <span>About Us</span>
            </div>
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-gray-900 tracking-tight">
                About Zankhana International <span class="whitespace-nowrap">E-Journal</span>
            </h1>
            <p class="text-gray-600 mt-2 text-sm sm:text-base max-w-3xl leading-relaxed">
                A multidisciplinary, peer-reviewed, monthly online international research journal dedicated to the
                dissemination of scholarly knowledge and academic research.
            </p>
        </div>

        <!-- Key Highlights / Quick Metadata Strip -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-10">
            <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm text-center">
                <span class="text-xs uppercase tracking-wider font-bold text-gray-400 block mb-1">ISSN (Online)</span>
                <span class="text-lg font-black text-ugcOrange">2350-0271</span>
            </div>
            <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm text-center">
                <span class="text-xs uppercase tracking-wider font-bold text-gray-400 block mb-1">Publication
                    Frequency</span>
                <span class="text-lg font-black text-gray-800">Monthly (12/Year)</span>
            </div>
            <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm text-center">
                <span class="text-xs uppercase tracking-wider font-bold text-gray-400 block mb-1">Review Model</span>
                <span class="text-lg font-black text-gray-800">Peer Reviewed</span>
            </div>
            <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm text-center">
                <span class="text-xs uppercase tracking-wider font-bold text-gray-400 block mb-1">Format & Access</span>
                <span class="text-lg font-black text-ugcOrange">Online Open Access</span>
            </div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

            <!-- Primary Column (8 cols) -->
            <div class="lg:col-span-8 space-y-8">

                <!-- About / Journal Overview -->
                <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 sm:p-8">
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 border-l-4 border-ugcOrange pl-3">
                        Journal Overview
                    </h2>
                    <p class="text-gray-700 leading-relaxed text-sm sm:text-base mb-4">
                        <strong>Zankhana International E-Journal</strong> is an academic journal dedicated to the
                        dissemination of scholarly research, academic knowledge, and intellectual contributions across
                        multiple disciplines. The journal aims to provide a platform for researchers, academicians,
                        teachers, professionals, practitioners, and students to share their research findings and academic
                        perspectives with a wider scholarly community.
                    </p>
                    <p class="text-gray-700 leading-relaxed text-sm sm:text-base">
                        The journal seeks to provide an academic platform for researchers, academicians, teacher educators,
                        teachers, professionals, practitioners, and students to present their research, exchange ideas, and
                        contribute to scholarly discussions. It encourages research that addresses theoretical questions,
                        practical challenges, educational issues, social concerns, and developments across academic
                        disciplines.
                    </p>
                </section>

                <!-- Vision & Mission -->
                <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Vision -->
                    <div
                        class="bg-gradient-to-br from-orange-50/60 to-white rounded-xl border border-orange-200 p-6 shadow-sm flex flex-col justify-between">
                        <div>
                            <div
                                class="w-12 h-12 rounded-lg bg-ugcOrange/10 text-ugcOrange flex items-center justify-center mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Our Vision</h3>
                            <p class="text-gray-700 text-sm leading-relaxed mb-3">
                                The vision of <strong>Zankhana International E-Journal</strong> is to establish itself as a
                                credible, inclusive, and academically oriented platform for the dissemination of
                                high-quality scholarly research and innovative ideas across multiple disciplines.
                            </p>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                The journal aspires to promote a strong research culture, encourage intellectual inquiry,
                                facilitate interdisciplinary and multidisciplinary collaboration, and contribute to the
                                advancement of knowledge, education, and professional practice at national and international
                                levels.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-orange-100 text-xs text-gray-600 italic">
                            Encouraging meaningful academic and societal development through ethical research.
                        </div>
                    </div>

                    <!-- Mission -->
                    <div
                        class="bg-gradient-to-br from-gray-50 to-white rounded-xl border border-gray-200 p-6 shadow-sm flex flex-col justify-between">
                        <div>
                            <div
                                class="w-12 h-12 rounded-lg bg-gray-900/10 text-gray-900 flex items-center justify-center mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Our Mission</h3>
                            <p class="text-gray-700 text-sm leading-relaxed mb-3">
                                The mission of <strong>Zankhana International E-Journal</strong> is to provide an accessible
                                and academically responsible platform for publishing original, relevant, and quality
                                scholarly contributions through a transparent editorial process and appropriate peer-review
                                practices.
                            </p>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Through these commitments, the journal seeks to contribute to the growth of a responsible,
                                collaborative, and research-oriented academic community.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-gray-100 text-xs text-gray-600 italic">
                            Transparent editorial processes & high academic standards.
                        </div>
                    </div>
                </section>

                <!-- Our Commitments -->
                <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 sm:p-8">
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-6 border-l-4 border-ugcOrange pl-3">
                        Our Commitments
                    </h2>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <span
                                class="w-6 h-6 rounded-full bg-orange-100 text-ugcOrange flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">✓</span>
                            <p class="text-sm sm:text-base text-gray-700"><strong>Original Research & Inquiry:</strong>
                                Encouraging original research, critical thinking, innovation, and evidence-based academic
                                inquiry.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span
                                class="w-6 h-6 rounded-full bg-orange-100 text-ugcOrange flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">✓</span>
                            <p class="text-sm sm:text-base text-gray-700"><strong>Interdisciplinary Collaboration:</strong>
                                Promoting interdisciplinary and multidisciplinary research across Education, Arts, Commerce,
                                Science, Social Sciences, Management, and other relevant academic fields.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span
                                class="w-6 h-6 rounded-full bg-orange-100 text-ugcOrange flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">✓</span>
                            <p class="text-sm sm:text-base text-gray-700"><strong>Scholarly Dissemination:</strong>
                                Providing opportunities for researchers, academicians, teachers, professionals,
                                practitioners, and students to disseminate their research findings and scholarly
                                perspectives.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span
                                class="w-6 h-6 rounded-full bg-orange-100 text-ugcOrange flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">✓</span>
                            <p class="text-sm sm:text-base text-gray-700"><strong>Diverse Scholarly Formats:</strong>
                                Encouraging the publication of research papers, review articles, case studies, conceptual
                                papers, analytical studies, technical notes, and other relevant scholarly contributions.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span
                                class="w-6 h-6 rounded-full bg-orange-100 text-ugcOrange flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">✓</span>
                            <p class="text-sm sm:text-base text-gray-700"><strong>Multilingual Communication:</strong>
                                Supporting academic communication and knowledge dissemination in English, Hindi, Gujarati,
                                and Sanskrit, subject to editorial and publication requirements.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span
                                class="w-6 h-6 rounded-full bg-orange-100 text-ugcOrange flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">✓</span>
                            <p class="text-sm sm:text-base text-gray-700"><strong>Ethics & Academic Integrity:</strong>
                                Upholding publication ethics, academic integrity, originality, transparency, and responsible
                                research practices.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span
                                class="w-6 h-6 rounded-full bg-orange-100 text-ugcOrange flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">✓</span>
                            <p class="text-sm sm:text-base text-gray-700"><strong>Social Progress & Educational
                                    Improvement:</strong> Facilitating the exchange of knowledge and ideas that contribute
                                to educational improvement, professional development, and wider social progress.</p>
                        </div>
                    </div>
                </section>

                <!-- Multidisciplinary Scope -->
                <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 sm:p-8">
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 border-l-4 border-ugcOrange pl-3">
                        Multidisciplinary Scope
                    </h2>
                    <p class="text-gray-700 leading-relaxed text-sm sm:text-base mb-6">
                        <strong>Zankhana International E-Journal</strong> is a multidisciplinary journal that welcomes
                        scholarly contributions from a broad range of academic and professional fields. The journal
                        encourages interdisciplinary and multidisciplinary research that contributes to academic
                        understanding, professional practice, and the development of knowledge.
                    </p>

                    <h3 class="text-sm font-bold uppercase text-gray-500 tracking-wider mb-3">Key Academic Disciplines
                        Covered</h3>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span
                            class="bg-orange-50 text-ugcOrange border border-orange-200 px-3 py-1.5 rounded-lg text-xs font-semibold">Education
                            & Teacher Education</span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1.5 rounded-lg text-xs font-semibold">Arts &
                            Humanities</span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1.5 rounded-lg text-xs font-semibold">Commerce &
                            Banking</span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1.5 rounded-lg text-xs font-semibold">Science &
                            Technology</span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1.5 rounded-lg text-xs font-semibold">Social
                            Sciences</span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1.5 rounded-lg text-xs font-semibold">Business
                            Studies & Management</span>
                        <span
                            class="bg-gray-100 text-gray-800 px-3 py-1.5 rounded-lg text-xs font-semibold">Psychology</span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1.5 rounded-lg text-xs font-semibold">Economics &
                            Finance</span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1.5 rounded-lg text-xs font-semibold">Sociology &
                            Social Work</span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1.5 rounded-lg text-xs font-semibold">History &
                            Archaeology</span>
                        <span
                            class="bg-gray-100 text-gray-800 px-3 py-1.5 rounded-lg text-xs font-semibold">Geography</span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1.5 rounded-lg text-xs font-semibold">Political
                            Science</span>
                        <span
                            class="bg-gray-100 text-gray-800 px-3 py-1.5 rounded-lg text-xs font-semibold">Philosophy</span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1.5 rounded-lg text-xs font-semibold">Literature &
                            Languages</span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1.5 rounded-lg text-xs font-semibold">Law & Legal
                            Studies</span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1.5 rounded-lg text-xs font-semibold">Information
                            Technology</span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1.5 rounded-lg text-xs font-semibold">Public
                            Administration</span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1.5 rounded-lg text-xs font-semibold">Physical
                            Education & Sports</span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1.5 rounded-lg text-xs font-semibold">Library &
                            Information Science</span>
                        <span class="bg-orange-100 text-ugcDark px-3 py-1.5 rounded-lg text-xs font-bold">Interdisciplinary
                            Research</span>
                    </div>
                </section>

                <!-- Accepted Scholarly Contributions -->
                <section class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 sm:p-8">
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 border-l-4 border-ugcOrange pl-3">
                        Original Research and Scholarly Contributions
                    </h2>
                    <p class="text-gray-700 text-sm sm:text-base leading-relaxed mb-6">
                        <strong>Zankhana International E-Journal</strong> welcomes original, innovative, and academically
                        rigorous scholarly submissions across the following categories:
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm">
                        <div class="p-3 bg-gray-50 border border-gray-200 rounded-lg flex items-center gap-3">
                            <span class="text-ugcOrange font-bold text-base">•</span>
                            <span class="font-medium text-gray-800">Original empirical and theoretical research
                                papers</span>
                        </div>
                        <div class="p-3 bg-gray-50 border border-gray-200 rounded-lg flex items-center gap-3">
                            <span class="text-ugcOrange font-bold text-base">•</span>
                            <span class="font-medium text-gray-800">Conceptual and analytical studies</span>
                        </div>
                        <div class="p-3 bg-gray-50 border border-gray-200 rounded-lg flex items-center gap-3">
                            <span class="text-ugcOrange font-bold text-base">•</span>
                            <span class="font-medium text-gray-800">Literature reviews and systematic reviews</span>
                        </div>
                        <div class="p-3 bg-gray-50 border border-gray-200 rounded-lg flex items-center gap-3">
                            <span class="text-ugcOrange font-bold text-base">•</span>
                            <span class="font-medium text-gray-800">Case studies</span>
                        </div>
                        <div class="p-3 bg-gray-50 border border-gray-200 rounded-lg flex items-center gap-3">
                            <span class="text-ugcOrange font-bold text-base">•</span>
                            <span class="font-medium text-gray-800">Theme-based research papers</span>
                        </div>
                        <div class="p-3 bg-gray-50 border border-gray-200 rounded-lg flex items-center gap-3">
                            <span class="text-ugcOrange font-bold text-base">•</span>
                            <span class="font-medium text-gray-800">Book reviews</span>
                        </div>
                        <div class="p-3 bg-gray-50 border border-gray-200 rounded-lg flex items-center gap-3">
                            <span class="text-ugcOrange font-bold text-base">•</span>
                            <span class="font-medium text-gray-800">Research-based academic papers</span>
                        </div>
                        <div class="p-3 bg-gray-50 border border-gray-200 rounded-lg flex items-center gap-3">
                            <span class="text-ugcOrange font-bold text-base">•</span>
                            <span class="font-medium text-gray-800">Conceptual frameworks and analytical models</span>
                        </div>
                        <div
                            class="p-3 bg-gray-50 border border-gray-200 rounded-lg flex items-center gap-3 sm:col-span-2">
                            <span class="text-ugcOrange font-bold text-base">•</span>
                            <span class="font-medium text-gray-800">Simulation studies and technical notes</span>
                        </div>
                    </div>

                    <div
                        class="mt-6 p-4 bg-orange-50/70 border border-orange-200 rounded-lg text-xs sm:text-sm text-gray-700 leading-relaxed">
                        <strong>Editorial Notice:</strong> All submissions must comply with the journal’s author guidelines,
                        ethical standards, originality requirements, and editorial policies. Submission does not guarantee
                        acceptance; manuscripts are considered according to the journal’s review and editorial
                        decision-making process.
                    </div>
                </section>

            </div>

            <!-- Sidebar Column (4 cols) -->
            <div class="lg:col-span-4 space-y-6">

                <!-- Languages of Publication -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-3 border-l-4 border-ugcOrange pl-3">
                        Languages of Publication
                    </h3>
                    <p class="text-gray-600 text-xs sm:text-sm mb-4 leading-relaxed">
                        The journal encourages academic expression and knowledge sharing through four recognized languages:
                    </p>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between p-3 bg-gray-50 border border-gray-100 rounded-lg">
                            <span class="text-sm font-bold text-gray-800">English</span>
                            <span class="text-xs font-semibold text-gray-500">International</span>
                        </div>
                        <div
                            class="flex items-center justify-between p-3 bg-orange-50/50 border border-orange-100 rounded-lg">
                            <span class="text-sm font-bold text-gray-800">Hindi (हिन्दी)</span>
                            <span class="text-xs font-semibold text-ugcOrange">National</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-gray-50 border border-gray-100 rounded-lg">
                            <span class="text-sm font-bold text-gray-800">Gujarati (ગુજરાતી)</span>
                            <span class="text-xs font-semibold text-gray-500">Regional</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-gray-50 border border-gray-100 rounded-lg">
                            <span class="text-sm font-bold text-gray-800">Sanskrit (संस्कृतम्)</span>
                            <span class="text-xs font-semibold text-gray-500">Classical</span>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500 mt-3 italic">
                        * Subject to the journal’s author guidelines and editorial requirements.
                    </p>
                </div>

                <!-- Peer-Reviewed Nature -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-3 border-l-4 border-ugcOrange pl-3">
                        Peer-Reviewed Nature
                    </h3>
                    <p class="text-gray-700 text-xs sm:text-sm leading-relaxed mb-3">
                        <strong>Zankhana International E-Journal</strong> follows a peer-review process to evaluate the
                        academic quality, originality, relevance, and scholarly contribution of submitted manuscripts.
                    </p>
                    <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                        Submissions are subject to an initial editorial assessment and, where appropriate, review by subject
                        experts. Editorial decisions are made strictly in accordance with stated editorial policies.
                    </p>
                    <a href="{{ url('publication') }}"
                        class="mt-4 inline-flex items-center text-xs font-bold text-ugcOrange hover:underline">
                        Read Peer Review Process →
                    </a>
                </div>

                <!-- Publication Frequency & Access -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-3 border-l-4 border-ugcOrange pl-3">
                        Monthly & Online Mode
                    </h3>
                    <div class="space-y-3 text-xs sm:text-sm text-gray-700">
                        <div>
                            <span class="font-bold text-gray-900 block mb-0.5">Monthly Regularity:</span>
                            <span>Publishes 12 issues per year, providing opportunities for researchers and academicians to
                                disseminate work on a regular schedule.</span>
                        </div>
                        <div class="pt-2 border-t border-gray-100">
                            <span class="font-bold text-gray-900 block mb-0.5">Online Digital Platform:</span>
                            <span>Enables readers across diverse geographical regions to access scholarly articles and
                                downloadable full-text files at <a href="https://zankhana.org"
                                    class="text-ugcOrange font-bold hover:underline">zankhana.org</a>.</span>
                        </div>
                    </div>
                </div>

                <!-- Our Commitment -->
                <div class="bg-gradient-to-br from-gray-900 to-gray-800 text-white rounded-xl p-6 shadow-sm">
                    <h3 class="text-lg font-bold text-white mb-2">Our Commitment</h3>
                    <p class="text-gray-300 text-xs sm:text-sm leading-relaxed mb-4">
                        Zankhana International E-Journal aims to promote responsible scholarly communication, encourage
                        multidisciplinary academic dialogue, and facilitate the dissemination of research and knowledge
                        among the academic community.
                    </p>
                    <div class="text-xs text-gray-400 border-t border-gray-700 pt-3">
                        Published by <strong>Madhav Publication</strong><br>
                        Botad, Gujarat, India
                    </div>
                </div>

            </div>

        </div>

    </main>
@endsection

@section('scripts')
@endsection
