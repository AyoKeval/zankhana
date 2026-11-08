@extends('layouts.web')

@section('styles')
    <style>
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
@endsection

@section('content')
    <main class="max-w-7xl mx-auto w-full px-4 py-10 font-sans">
        <div class="mb-4 md:mb-8 border-b border-gray-200 pb-4">
            <p class="text-sm font-semibold uppercase tracking-wider text-ugcOrange">Leadership</p>
            <h2 class="text-3xl font-bold text-gray-900">Editorial Board</h2>
        </div>

        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="flex overflow-x-auto border-b border-gray-200 hide-scrollbar bg-gray-50/50">
                <button
                    class="tab-btn px-4 py-3 sm:py-4 text-sm font-bold uppercase tracking-widest transition-all border-b-2 whitespace-nowrap text-ugcOrange border-ugcOrange"
                    onclick="showTab('editorial', this)">Editorial Board</button>
                @if ($groupedMembers->has('overseas') && $groupedMembers->get('overseas')->isNotEmpty())
                    <button
                        class="tab-btn px-4 py-3 sm:py-4 text-sm font-bold uppercase tracking-widest transition-all border-b-2 border-transparent text-gray-400 whitespace-nowrap"
                        onclick="showTab('overseas', this)">Overseas Board</button>
                @endif
                @if ($groupedMembers->has('advisory') && $groupedMembers->get('advisory')->isNotEmpty())
                    <button
                        class="tab-btn px-4 py-3 sm:py-4 text-sm font-bold uppercase tracking-widest transition-all border-b-2 border-transparent text-gray-400 whitespace-nowrap"
                        onclick="showTab('advisory', this)">Advisory Board</button>
                @endif
                @if ($groupedMembers->has('review') && $groupedMembers->get('review')->isNotEmpty())
                    <button
                        class="tab-btn px-4 py-3 sm:py-4 text-sm font-bold uppercase tracking-widest transition-all border-b-2 border-transparent text-gray-400 whitespace-nowrap"
                        onclick="showTab('review', this)">Review Committee</button>
                @endif
                @if ($groupedMembers->has('other') && $groupedMembers->get('other')->isNotEmpty())
                    <button
                        class="tab-btn px-4 py-3 sm:py-4 text-sm font-bold uppercase tracking-widest transition-all border-b-2 border-transparent text-gray-400 whitespace-nowrap"
                        onclick="showTab('other', this)">Other Experts</button>
                @endif
            </div>

            <div class="p-4 md:p-8">
                <!-- Search & Filter Bar -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-3">
                    <div class="relative w-full max-w-md">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400">
                            <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input type="text" id="boardFilterInput"
                            placeholder="Filter by name, designation, or institution..." autocomplete="off"
                            class="w-full pl-10 pr-9 py-2.5 rounded-xl border border-gray-200 bg-gray-50/70 text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:border-ugcOrange focus:bg-white focus:ring-2 focus:ring-ugcOrange/20 transition-all" />
                        <button type="button" id="clearFilterBtn" onclick="clearBoardFilter()"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 hidden cursor-pointer"
                            title="Clear filter">
                            <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="text-xs text-gray-500 font-medium self-end sm:self-auto flex items-center gap-1.5">
                        <span id="filterCountDisplay">Showing all members</span>
                    </div>
                </div>

                <!-- TAB 1: Editorial Board -->
                <div id="tab-editorial" class="tab-panel space-y-4">
                    @php
                        $editorialAll = $groupedMembers->get('editorial', collect());
                        $chiefEditors = $editorialAll->filter(
                            fn($m) => str_contains(strtolower($m->designation), 'editor-in-chief'),
                        );
                        $editorialMembers = $editorialAll->reject(
                            fn($m) => str_contains(strtolower($m->designation), 'editor-in-chief'),
                        );
                    @endphp

                    @if ($chiefEditors->isNotEmpty())
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach ($chiefEditors as $index => $editor)
                                <div onclick="openMemberModal({{ $editor->id }})"
                                    data-name="{{ strtolower($editor->name) }}"
                                    data-designation="{{ strtolower($editor->designation ?? '') }}"
                                    data-institution="{{ strtolower($editor->institution ?? '') }}"
                                    data-search="{{ strtolower($editor->name . ' ' . ($editor->designation ?? '') . ' ' . ($editor->institution ?? '')) }}"
                                    class="leadership-card mt-4 flex flex-col sm:flex-row gap-4 p-4 rounded-xl border {{ $index === 0 ? 'border-ugcOrange/20 bg-orange-50/30' : 'border-gray-200 bg-gray-50/50' }} hover:border-ugcOrange/40 cursor-pointer transition-all">
                                    <div
                                        class="w-12 h-12 shrink-0 rounded-full {{ $index === 0 ? 'bg-ugcOrange shadow-md shadow-orange-200' : 'bg-gray-800' }} hidden sm:flex items-center justify-center text-white font-black text-lg">
                                        {{ substr(trim(str_replace(['Dr.', 'Prof.', 'Rt.'], '', $editor->name)), 0, 1) }}
                                    </div>
                                    <div>
                                        <p
                                            class="text-xs font-black uppercase tracking-widest {{ $index === 0 ? 'text-ugcOrange' : 'text-gray-500' }} mb-1">
                                            {{ $editor->designation }}
                                        </p>
                                        <p class="text-base font-bold text-gray-900 leading-tight mb-1">{{ $editor->name }}
                                        </p>
                                        <p class="text-sm text-gray-500 leading-relaxed">{{ $editor->institution }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <div>
                        <h3 class="text-xs font-black uppercase tracking-widest text-gray-400 mb-4 flex items-center gap-4">
                            Board Members <span class="h-[1px] flex-grow bg-gray-100"></span>
                        </h3>
                        @include('web.partials.board-member-table', [
                            'members' => $editorialMembers,
                            'startNumber' => $chiefEditors->count() + 1,
                        ])
                    </div>
                </div>

                <!-- TAB 2: Overseas Board -->
                <div id="tab-overseas" class="tab-panel mt-4 hidden">
                    <h3 class="text-xs font-black uppercase tracking-widest text-gray-400 mb-4 flex items-center gap-4">
                        Overseas Board <span class="h-[1px] flex-grow bg-gray-100"></span>
                    </h3>
                    @include('web.partials.board-member-table', [
                        'members' => $groupedMembers->get('overseas', collect()),
                        'startNumber' => 1,
                    ])
                </div>

                <!-- TAB 3: Advisory Board -->
                <div id="tab-advisory" class="tab-panel mt-4 hidden">
                    <h3 class="text-xs font-black uppercase tracking-widest text-gray-400 mb-4 flex items-center gap-4">
                        Advisory Board <span class="h-[1px] flex-grow bg-gray-100"></span>
                    </h3>
                    @include('web.partials.board-member-table', [
                        'members' => $groupedMembers->get('advisory', collect()),
                        'startNumber' => 1,
                    ])
                </div>

                <!-- TAB 4: Review Committee -->
                <div id="tab-review" class="tab-panel mt-4 hidden">
                    <h3 class="text-xs font-black uppercase tracking-widest text-gray-400 mb-4 flex items-center gap-4">
                        Review Committee <span class="h-[1px] flex-grow bg-gray-100"></span>
                    </h3>
                    @include('web.partials.board-member-table', [
                        'members' => $groupedMembers->get('review', collect()),
                        'startNumber' => 1,
                    ])
                </div>

                <!-- TAB 5: Other Experts -->
                @if ($groupedMembers->has('other') && $groupedMembers->get('other')->isNotEmpty())
                    <div id="tab-other" class="tab-panel mt-4 hidden">
                        <h3 class="text-xs font-black uppercase tracking-widest text-gray-400 mb-4 flex items-center gap-4">
                            Other Experts <span class="h-[1px] flex-grow bg-gray-100"></span>
                        </h3>
                        @include('web.partials.board-member-table', [
                            'members' => $groupedMembers->get('other', collect()),
                            'startNumber' => 1,
                        ])
                    </div>
                @endif
            </div>
        </div>
    </main>

    <!-- Modal for Member Full Details -->
    <div id="memberModal"
        class="fixed inset-0 z-50 hidden items-center justify-center p-4 sm:p-6 bg-black/60 backdrop-blur-sm" role="dialog"
        aria-modal="true" aria-labelledby="modalName">
        <!-- Modal Card Container -->
        <div id="modalContainer"
            class="bg-white rounded-2xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-hidden flex flex-col border border-gray-100 transform transition-all duration-300 scale-95 opacity-0">

            <!-- Modal Header -->
            <div
                class="p-5 sm:p-6 border-b border-gray-100 bg-gradient-to-r from-orange-50/60 via-white to-orange-50/20 flex items-start justify-between gap-4">
                <div class="flex items-center gap-4 min-w-0">
                    <div id="modalAvatar"
                        class="size-14 rounded-2xl bg-gradient-to-br from-orange-500 to-ugcOrange text-white font-extrabold text-2xl flex items-center justify-center shrink-0 shadow-md shadow-orange-500/20">
                        Z
                    </div>
                    <div class="min-w-0">
                        <div class="flex items-center gap-2 flex-wrap mb-1">
                            <span id="modalDesignationBadge"
                                class="px-2.5 py-0.5 rounded-full text-[11px] font-bold uppercase tracking-wider bg-ugcOrange/10 text-ugcOrange border border-ugcOrange/20">
                                Designation
                            </span>
                            <span id="modalBoardTypeBadge"
                                class="px-2.5 py-0.5 rounded-full text-[11px] font-medium bg-gray-100 text-gray-700 capitalize">
                                Board
                            </span>
                        </div>
                        <h2 id="modalName" class="text-xl sm:text-2xl font-bold text-gray-900 leading-tight truncate">
                            Member Name
                        </h2>
                    </div>
                </div>

                <!-- Close Button (X) -->
                <button type="button" onclick="closeMemberModal()"
                    class="text-gray-400 hover:text-gray-700 bg-gray-100 hover:bg-gray-200 size-9 rounded-full flex items-center justify-center transition-colors shrink-0"
                    aria-label="Close modal">
                    <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Modal Body (Scrollable) -->
            <div class="p-5 sm:p-6 overflow-y-auto space-y-4">

                <!-- Institutional Affiliation -->
                <div class="bg-gray-50/90 rounded-xl p-4 border border-gray-100 space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-gray-400">Institutional Affiliation</h4>

                    <div class="flex items-start gap-3">
                        <div
                            class="size-8 rounded-lg bg-orange-100 text-ugcOrange flex items-center justify-center shrink-0 text-sm mt-0.5">
                            🏛️
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 font-medium">Institution / College</p>
                            <p id="modalInstitution" class="text-sm font-semibold text-gray-800 leading-snug"></p>
                        </div>
                    </div>

                    <div id="modalUniversityRow" class="flex items-start gap-3">
                        <div
                            class="size-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 text-sm mt-0.5">
                            🎓
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 font-medium">Affiliated University</p>
                            <p id="modalUniversity" class="text-sm font-semibold text-gray-800 leading-snug"></p>
                        </div>
                    </div>
                </div>

                <!-- Expertise / Subject Specialization -->
                <div id="modalExpertiseRow" class="bg-gray-50/90 rounded-xl p-4 border border-gray-100">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-2">Subject Expertise &
                        Methodology</h4>
                    <div class="flex items-center gap-2">
                        <span class="size-2 rounded-full bg-ugcOrange"></span>
                        <span id="modalExpertise" class="text-sm font-semibold text-gray-900"></span>
                    </div>
                </div>

                <!-- Contact & Address -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div id="modalEmailRow"
                        class="bg-gray-50/90 rounded-xl p-4 border border-gray-100 flex flex-col justify-between">
                        <div>
                            <h4 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-1">Email Address</h4>
                            <a id="modalEmail" href=""
                                class="text-sm font-bold text-ugcOrange hover:underline break-all flex items-center gap-1.5 mt-1">
                                <span class="text-xs">✉</span>
                                <span id="modalEmailText"></span>
                            </a>
                        </div>
                    </div>

                    <div id="modalAddressRow" class="bg-gray-50/90 rounded-xl p-4 border border-gray-100">
                        <h4 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-1">Official Address</h4>
                        <p id="modalAddress" class="text-xs text-gray-600 leading-relaxed mt-1"></p>
                    </div>
                </div>

                <!-- Academic Profiles & Research Links -->
                <div id="modalProfilesRow"
                    class="bg-gradient-to-br from-orange-50/30 to-gray-50 rounded-xl p-4 border border-gray-100">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">Academic & Research Links
                    </h4>
                    <div class="flex flex-wrap gap-2.5" id="modalProfilesContainer">
                        <!-- Injected via JavaScript -->
                    </div>
                </div>

            </div>

            <!-- Modal Footer -->
            <div class="p-4 sm:px-6 border-t border-gray-100 bg-gray-50 flex items-center justify-between">
                <span class="text-xs text-gray-500 font-medium">Zankhana International E-Journal</span>
                <button type="button" onclick="closeMemberModal()"
                    class="px-5 py-2 rounded-xl bg-gray-900 hover:bg-gray-800 text-white text-xs font-bold transition shadow-sm">
                    Close
                </button>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Store all members data from server
        const membersData = {!! json_encode($members) !!};

        // Tab Switching Logic (matches old clean style)
        function showTab(tabId, btn) {
            document.querySelectorAll('.tab-panel').forEach(p => p.classList.add('hidden'));
            const target = document.getElementById(`tab-${tabId}`);
            if (target) {
                target.classList.remove('hidden');
            }

            document.querySelectorAll('.tab-btn').forEach(b => {
                b.classList.remove('text-ugcOrange', 'border-ugcOrange');
                b.classList.add('text-gray-400', 'border-transparent');
            });

            btn.classList.add('text-ugcOrange', 'border-ugcOrange');
            btn.classList.remove('text-gray-400', 'border-transparent');

            // Re-apply filter on tab switch
            applyBoardFilter();
        }

        // Live Filter Logic (filters Name, Designation, and Institution)
        const filterInput = document.getElementById('boardFilterInput');
        const clearBtn = document.getElementById('clearFilterBtn');
        const countDisplay = document.getElementById('filterCountDisplay');

        function applyBoardFilter() {
            const query = (filterInput ? filterInput.value : '').toLowerCase().trim();

            if (clearBtn) {
                clearBtn.classList.toggle('hidden', query === '');
            }

            const activePanel = document.querySelector('.tab-panel:not(.hidden)');
            if (!activePanel) return;

            // Filter leadership cards if in this panel
            const leadershipCards = activePanel.querySelectorAll('.leadership-card');
            let visibleLeadership = 0;
            leadershipCards.forEach(card => {
                const name = (card.getAttribute('data-name') || '').toLowerCase();
                const designation = (card.getAttribute('data-designation') || '').toLowerCase();
                const institution = (card.getAttribute('data-institution') || '').toLowerCase();
                const text = card.getAttribute('data-search') || `${name} ${designation} ${institution}`;

                const matches = query === '' || text.includes(query);
                card.style.display = matches ? '' : 'none';
                if (matches) visibleLeadership++;
            });

            // Filter table rows
            const rows = activePanel.querySelectorAll('.member-row');
            let visibleRows = 0;
            rows.forEach(row => {
                const name = (row.getAttribute('data-name') || '').toLowerCase();
                const designation = (row.getAttribute('data-designation') || '').toLowerCase();
                const institution = (row.getAttribute('data-institution') || '').toLowerCase();
                const text = row.getAttribute('data-search') || `${name} ${designation} ${institution}`;

                const matches = query === '' || text.includes(query);
                row.style.display = matches ? '' : 'none';
                if (matches) visibleRows++;
            });

            // Show/hide "No members matching" row
            const noMatchRows = activePanel.querySelectorAll('.no-filter-match');
            noMatchRows.forEach(noMatch => {
                noMatch.classList.toggle('hidden', visibleRows > 0 || query === '');
            });

            // Update count display
            const totalVisible = visibleRows + visibleLeadership;
            const totalInPanel = rows.length + leadershipCards.length;
            if (countDisplay) {
                if (query === '') {
                    countDisplay.textContent = `Showing all members (${totalInPanel})`;
                } else {
                    countDisplay.textContent = `Found ${totalVisible} of ${totalInPanel} members`;
                }
            }
        }

        function clearBoardFilter() {
            if (filterInput) {
                filterInput.value = '';
                applyBoardFilter();
                filterInput.focus();
            }
        }

        if (filterInput) {
            filterInput.addEventListener('input', applyBoardFilter);
        }

        // Initialize count on page load
        document.addEventListener('DOMContentLoaded', applyBoardFilter);

        // Open Modal with Member Details
        function openMemberModal(id) {
            const member = membersData.find(m => m.id === id);
            if (!member) return;

            // Avatar initial
            const cleanName = member.name.replace(/^(Dr\.|Prof\.|Rt\.)\s+/i, '').trim();
            const initial = cleanName.charAt(0) || member.name.charAt(0);
            document.getElementById('modalAvatar').textContent = initial;

            // Name & Designation
            document.getElementById('modalName').textContent = member.name;
            document.getElementById('modalDesignationBadge').textContent = member.designation || 'Member';

            // Board Type Label
            const typeLabels = {
                'editorial': 'Editorial Board',
                'overseas': 'Overseas Board',
                'advisory': 'Advisory Board',
                'review': 'Review Committee',
                'other': 'Academic Advisor'
            };
            document.getElementById('modalBoardTypeBadge').textContent = typeLabels[member.board_type] || member.board_type;

            // Institution
            document.getElementById('modalInstitution').textContent = member.institution || '—';

            // University
            const univRow = document.getElementById('modalUniversityRow');
            if (member.university) {
                document.getElementById('modalUniversity').textContent = member.university;
                univRow.classList.remove('hidden');
            } else {
                univRow.classList.add('hidden');
            }

            // Expertise
            const expRow = document.getElementById('modalExpertiseRow');
            if (member.expertise) {
                document.getElementById('modalExpertise').textContent = member.expertise;
                expRow.classList.remove('hidden');
            } else {
                expRow.classList.add('hidden');
            }

            // Email
            const emailRow = document.getElementById('modalEmailRow');
            if (member.email) {
                document.getElementById('modalEmail').href = 'mailto:' + member.email;
                document.getElementById('modalEmailText').textContent = member.email;
                emailRow.classList.remove('hidden');
            } else {
                emailRow.classList.add('hidden');
            }

            // Address
            const addrRow = document.getElementById('modalAddressRow');
            if (member.address) {
                document.getElementById('modalAddress').textContent = member.address;
                addrRow.classList.remove('hidden');
            } else {
                addrRow.classList.add('hidden');
            }

            // Research Profiles & Links
            const profilesContainer = document.getElementById('modalProfilesContainer');
            const profilesRow = document.getElementById('modalProfilesRow');
            profilesContainer.innerHTML = '';
            let hasProfiles = false;

            // Google Scholar
            if (member.google_scholar) {
                hasProfiles = true;
                if (member.google_scholar.startsWith('http')) {
                    profilesContainer.innerHTML += `
                        <a href="${member.google_scholar}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-blue-50 text-blue-700 hover:bg-blue-100 border border-blue-200 text-xs font-semibold transition">
                            <span>🎓 Google Scholar</span>
                            <svg class="size-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </a>
                    `;
                } else {
                    profilesContainer.innerHTML += `
                        <span class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-blue-50 text-blue-700 border border-blue-200 text-xs font-medium">
                            <span>🎓 Scholar ID: ${member.google_scholar}</span>
                        </span>
                    `;
                }
            }

            // ResearchGate
            if (member.researchgate) {
                hasProfiles = true;
                profilesContainer.innerHTML += `
                    <a href="${member.researchgate}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-teal-50 text-teal-700 hover:bg-teal-100 border border-teal-200 text-xs font-semibold transition">
                        <span>🟢 ResearchGate</span>
                        <svg class="size-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    </a>
                `;
            }

            // Scopus ID
            if (member.scopus_id) {
                hasProfiles = true;
                profilesContainer.innerHTML += `
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-amber-50 text-amber-800 border border-amber-200 text-xs font-semibold">
                        <span>📚 Scopus ID: ${member.scopus_id}</span>
                    </span>
                `;
            }

            // Other Academic Links or Annotations
            if (member.other) {
                hasProfiles = true;
                const items = member.other.split(',');
                items.forEach(item => {
                    const str = item.trim();
                    if (!str) return;

                    if (str.includes('http')) {
                        let label = 'Profile';
                        let url = str;
                        if (str.includes(':')) {
                            const colonIndex = str.indexOf(':');
                            const prefix = str.substring(0, colonIndex).trim();
                            const remainder = str.substring(colonIndex + 1).trim();
                            label = prefix.replace(/_/g, ' ').toUpperCase();
                            url = remainder;
                        }

                        profilesContainer.innerHTML += `
                            <a href="${url}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-orange-50 text-ugcOrange hover:bg-orange-100 border border-orange-200 text-xs font-semibold transition">
                                <span>🔗 ${label}</span>
                                <svg class="size-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            </a>
                        `;
                    } else {
                        profilesContainer.innerHTML += `
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-gray-100 text-gray-700 border border-gray-200 text-xs font-medium">
                                <span>🏷️ ${str}</span>
                            </span>
                        `;
                    }
                });
            }

            if (hasProfiles) {
                profilesRow.classList.remove('hidden');
            } else {
                profilesRow.classList.add('hidden');
            }

            // Display Modal with animation
            const modal = document.getElementById('memberModal');
            const container = document.getElementById('modalContainer');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.classList.add('overflow-hidden');

            setTimeout(() => {
                container.classList.remove('scale-95', 'opacity-0');
                container.classList.add('scale-100', 'opacity-100');
            }, 10);
        }

        // Close Modal
        function closeMemberModal() {
            const modal = document.getElementById('memberModal');
            const container = document.getElementById('modalContainer');
            container.classList.remove('scale-100', 'opacity-100');
            container.classList.add('scale-95', 'opacity-0');

            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.classList.remove('overflow-hidden');
            }, 200);
        }

        // Close on Backdrop Click
        document.getElementById('memberModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeMemberModal();
            }
        });

        // Close on ESC Key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeMemberModal();
            }
        });
    </script>
@endsection
