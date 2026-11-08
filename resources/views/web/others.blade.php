@extends('layouts.web')

@section('styles')
@endsection

@section('content')
  <main class="max-w-7xl mx-auto w-full px-4 py-10 font-sans">
    <div class="mb-4 md:mb-8 border-b border-gray-200 pb-4">
      <p class="text-sm font-semibold uppercase tracking-wider text-ugcOrange">More Information</p>
      <h2 class="text-3xl font-bold text-gray-900">Others</h2>
    </div>

    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
      <div class="flex overflow-x-auto border-b border-gray-200 hide-scrollbar bg-gray-50/50">
        <button
          class="tab-btn px-6 py-4 text-sm font-bold uppercase tracking-widest transition-all border-b-2 border-transparent text-gray-400 hover:text-gray-600 whitespace-nowrap text-ugcOrange border-ugcOrange"
          onclick="showTab('memberlist', this)">Member List</button>
        <button
          class="tab-btn px-6 py-4 text-sm font-bold uppercase tracking-widest transition-all border-b-2 border-transparent text-gray-400 hover:text-gray-600 whitespace-nowrap"
          onclick="showTab('indexing', this)">Indexing & Abstracting</button>
        <button
          class="tab-btn px-6 py-4 text-sm font-bold uppercase tracking-widest transition-all border-b-2 border-transparent text-gray-400 hover:text-gray-600 whitespace-nowrap"
          onclick="showTab('issn', this)">ISSN</button>
      </div>

      <div class="p-4 md:p-8">
        <div id="tab-memberlist" class="tab-panel space-y-4">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4" id="otherMembersGrid">
          </div>
        </div>

        <div id="tab-indexing" class="tab-panel hidden">
          <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" id="indexingPartnersGrid">
          </div>
        </div>

        <div id="tab-issn" class="tab-panel hidden">
          <div class="flex items-center justify-center mb-3">
            <img src="assets/img/indexing-partners/issn.jpg" alt="issn"
              class="max-h-full max-w-full object-contain grayscale group-hover:grayscale-0 transition-all duration-300" />
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection

@section('scripts')
  <script>
    console.log("Others loaded");
  </script>
  <script>
    // Tab Switching Logic
    function showTab(tabId, btn) {
      document.querySelectorAll('.tab-panel').forEach(p => p.classList.add('hidden'));
      document.getElementById(`tab-${tabId}`).classList.remove('hidden');

      document.querySelectorAll('.tab-btn').forEach(b => {
        b.classList.remove('text-ugcOrange', 'border-ugcOrange');
        b.classList.add('text-gray-400');
      });
      btn.classList.add('text-ugcOrange', 'border-ugcOrange');
      btn.classList.remove('text-gray-400');
    }

    // Render Member Grid (Matches Editorial style)
    const otherMembersList = [{
      name: "DAVE CHARULATA J"
    }, {
      name: "DABHI PALLAVIBEN J"
    },
    {
      name: "CHAUHAN CHETANKUMAR R"
    }, {
      name: "CHAUHAN KIRITKUMAR R"
    },
    {
      name: "YAGNIK PINAKINPRASAD K"
    }, {
      name: "PARMAR DHIRAJ R"
    },
    {
      name: "NIHARIKA GAUTAM"
    }, {
      name: "Dr. THAKAR PANKAJBHAI K"
    }
    ];

    const otherMembersGrid = document.getElementById("otherMembersGrid");
    if (otherMembersGrid) {
      otherMembersGrid.innerHTML = otherMembersList.map((member, index) => `
                                  <div class="group p-5 rounded-xl border border-gray-200 hover:border-ugcOrange/30 hover:bg-ugcOrange/5 transition-all duration-300 relative overflow-hidden">
                                      <span class="absolute -right-2 -top-2 text-4xl font-black text-gray-100 group-hover:text-ugcOrange/25 transition-colors pointer-events-none">
                                          ${String(index + 1).padStart(2, '0')}
                                      </span>
                                      <p class="text-base font-bold text-gray-900 relative z-10">${member.name}</p>
                                      <p class="text-xs font-semibold text-ugcOrange/70 mt-1 uppercase tracking-widest">Board Member</p>
                                  </div>
                              `).join('');
    }

    // Render Indexing Partners (Modernized Cards)
    const indexingPartnersList = [{
      link: "#",
      image: "assets/img/indexing-partners/scientific-indexing-services.png",
      name: "Scientific Indexing Services"
    },
    {
      link: "#",
      image: "assets/img/indexing-partners/cosmos-impact-factor.png",
      name: "Cosmos Impact Factor"
    },
    {
      link: "#",
      image: "assets/img/indexing-partners/general-impact-factor.png",
      name: "General Impact Factor"
    },
    {
      link: "#",
      image: "assets/img/indexing-partners/isra.jpg",
      name: "israjif"
    },
    {
      link: "#",
      image: "assets/img/indexing-partners/daij.jpg",
      name: "DRIJ"
    },
    {
      link: "#",
      image: "assets/img/indexing-partners/isra-run.jpg",
      name: "ISRA - RUN"
    }
    ];

    const indexingGrid = document.getElementById("indexingPartnersGrid");
    if (indexingGrid) {
      indexingGrid.innerHTML = indexingPartnersList.map(partner => `
                                  <a href="${partner.link}" target="_blank" class="group block p-4 bg-white border border-gray-200 rounded-xl hover:shadow-lg hover:border-ugcOrange/20 transition-all text-center">
                                      <div class="h-16 flex items-center justify-center mb-3">
                                          <img src="${BASE_URL}/${partner.image}" alt="${partner.name}" class="max-h-full max-w-full object-contain grayscale group-hover:grayscale-0 transition-all duration-300" />
                                      </div>
                                      <p class="text-[10px] font-bold uppercase tracking-tight text-gray-400 group-hover:text-ugcOrange transition-colors">${partner.name}</p>
                                  </a>
                              `).join('');
    }
  </script>
@endsection