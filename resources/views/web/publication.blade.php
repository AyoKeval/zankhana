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
                <span>Publication</span>
            </div>
            <h1 class="text-3xl font-bold text-gray-900">Publication & Frequency</h1>
            <p class="text-gray-600 text-sm mt-1">Information on publication frequency, schedule, review procedures, and
                editorial contacts.</p>
        </div>

        <!-- Frequency of Publication Section (From private/text/FREQUENCY OF PUBLICATION.txt) -->
        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6 sm:p-8 mb-8">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-gray-100 pb-4 mb-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-ugcOrange block mb-1">Journal
                        Frequency</span>
                    <h2 class="text-2xl font-bold text-gray-900">Frequency of Publication</h2>
                </div>
                <span
                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-orange-100 text-ugcOrange self-start sm:self-auto">
                    ISSN: 2350-0271
                </span>
            </div>

            <div class="space-y-4 text-gray-700 text-sm sm:text-base leading-relaxed mb-8">
                <p>
                    <strong>Zankhana International E-Journal</strong> is a monthly, peer-reviewed, multidisciplinary
                    academic journal published in online mode.
                </p>
                <p>
                    The journal publishes <strong>twelve issues per year</strong>, with each issue scheduled for publication
                    on a monthly basis. It welcomes original research papers, review articles, case studies, conceptual
                    papers, and other scholarly contributions within its stated aims and scope.
                </p>
                <p>
                    All manuscripts are subject to the journal's editorial screening and peer-review process, as applicable.
                    Publication is subject to editorial acceptance and completion of the required publication procedures.
                </p>
            </div>

            <!-- Quick Metrics Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 pt-2">
                <div class="p-4 rounded-xl bg-orange-50/60 border border-orange-200 text-center">
                    <p class="text-[11px] font-bold text-ugcOrange uppercase tracking-wider mb-1">Publication Frequency</p>
                    <p class="text-lg sm:text-xl font-black text-gray-900">Monthly</p>
                </div>
                <div class="p-4 rounded-xl bg-gray-50 border border-gray-200 text-center">
                    <p class="text-[11px] font-bold text-gray-500 uppercase tracking-wider mb-1">Issues per Year</p>
                    <p class="text-lg sm:text-xl font-black text-gray-900">12 Issues</p>
                </div>
                <div class="p-4 rounded-xl bg-orange-50/60 border border-orange-200 text-center">
                    <p class="text-[11px] font-bold text-ugcOrange uppercase tracking-wider mb-1">Publication Format</p>
                    <p class="text-lg sm:text-xl font-black text-gray-900">Online Mode</p>
                </div>
                <div class="p-4 rounded-xl bg-gray-50 border border-gray-200 text-center">
                    <p class="text-[11px] font-bold text-gray-500 uppercase tracking-wider mb-1">Review Process</p>
                    <p class="text-lg sm:text-xl font-black text-gray-900">Peer Review</p>
                </div>
            </div>
        </div>

        <!-- Publishing Team & Editorial Contacts -->
        <div class="mb-4">
            <h2 class="text-xl font-bold text-gray-900 mb-1 border-l-4 border-ugcOrange pl-3">Publishing & Editorial Details
            </h2>
            <p class="text-gray-500 text-xs sm:text-sm pl-4 mb-4">Official publication and editorial contacts for manuscript
                preparation and inquiries.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Chief Editor Contact -->
            <div
                class="bg-white rounded-2xl border border-gray-200 shadow-sm p-5 md:p-6 flex flex-col h-full hover:border-ugcOrange/30 transition-all">
                <h3 class="text-xs font-black uppercase tracking-widest text-gray-400 mb-4 flex items-center gap-4">
                    Chief Editor <span class="h-[1px] flex-grow bg-gray-100"></span>
                </h3>

                <div class="flex flex-row gap-4 sm:gap-6 mb-4">
                    <div
                        class="w-12 h-12 sm:w-16 sm:h-16 shrink-0 rounded-full bg-ugcOrange flex items-center justify-center text-white font-black text-lg sm:text-2xl shadow-lg shadow-orange-100">
                        P</div>
                    <div>
                        <p class="text-lg sm:text-xl font-bold text-gray-900 mb-0.5">Dr. Prashant K. Chauhan</p>
                        <p class="text-xs sm:text-sm font-bold text-ugcOrange uppercase tracking-tighter mb-1.5">Chief
                            Editor</p>
                        <p class="text-[11px] sm:text-xs text-gray-500 leading-relaxed italic">M.A., M.Ed., M.Phil., GSlet,
                            Ph.D.,
                            Scope</p>
                    </div>
                </div>

                <div class="space-y-4 pt-4 border-t border-gray-100 mt-auto">
                    <div>
                        <p class="text-[10px] font-black uppercase text-gray-400 tracking-widest mb-1">Address</p>
                        <p class="text-sm text-gray-600 leading-relaxed">AT. Aliyabada Gangajala Vidyapith, Staff Quarter,
                            Near
                            Railway Station, Aliyabada, Jamnagar - 361110</p>
                    </div>
                    <a href="mailto:prashant2591984@yahoo.com"
                        class="inline-flex items-center gap-2 text-sm font-bold text-gray-700 hover:text-ugcOrange transition-colors">
                        <span class="opacity-50 text-lg">✉</span> prashant2591984@yahoo.com
                    </a>
                </div>
            </div>

            <!-- Publisher / Production Details -->
            <div
                class="bg-white rounded-2xl border border-gray-200 shadow-sm p-5 md:p-6 flex flex-col h-full hover:border-ugcOrange/30 transition-all">
                <h3 class="text-xs font-black uppercase tracking-widest text-gray-400 mb-4 flex items-center gap-4">
                    Publisher & Production <span class="h-[1px] flex-grow bg-gray-100"></span>
                </h3>

                <div class="flex flex-row gap-4 sm:gap-6 mb-4">
                    <div
                        class="w-12 h-12 sm:w-16 sm:h-16 shrink-0 rounded-full bg-gray-800 flex items-center justify-center text-white font-black text-lg sm:text-2xl shadow-lg shadow-gray-100">
                        M</div>
                    <div>
                        <p class="text-lg sm:text-xl font-bold text-gray-900 mb-0.5">Madhav Publication</p>
                        <p class="text-xs sm:text-sm font-bold text-ugcOrange uppercase tracking-tighter mb-1.5">Hitesh D.
                            Parmar (Expert Typist)</p>
                        <p class="text-[11px] sm:text-xs text-gray-500 leading-relaxed italic">Official Publisher of
                            Zankhana International E-Journal</p>
                    </div>
                </div>

                <div class="space-y-4 pt-4 border-t border-gray-100 mt-auto">
                    <div>
                        <p class="text-[10px] font-black uppercase text-gray-400 tracking-widest mb-1">Publisher Address</p>
                        <p class="text-sm text-gray-600 leading-relaxed">"Manas", Panch Pada, Shivaji Nagar, Botad, State:
                            Gujarat — 364710</p>
                    </div>
                    <a href="mailto:zankhanaejournal@gmail.com"
                        class="inline-flex items-center gap-2 text-sm font-bold text-gray-700 hover:text-ugcOrange transition-colors">
                        <span class="opacity-50 text-lg">✉</span> zankhanaejournal@gmail.com
                    </a>
                </div>
            </div>

        </div>
    </main>
@endsection

@section('scripts')
@endsection
