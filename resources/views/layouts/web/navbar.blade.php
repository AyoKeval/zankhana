@php
    $navLinks = [
        ['label' => 'Home', 'url' => url('home'), 'pattern' => 'home'],
        ['label' => 'Book', 'url' => url('book'), 'pattern' => 'book*'],
        ['label' => 'About Us', 'url' => url('about-us'), 'pattern' => 'about-us'],
        [
            'label' => 'Guidelines',
            'url' => '#',
            'pattern' => 'guidelines/*',
            'children' => [
                [
                    'label' => 'Author Guidelines',
                    'url' => route('guidelines', 'author-guidelines'),
                    'pattern' => 'guidelines/author-guidelines',
                ],
                [
                    'label' => 'Manuscript Template Part A',
                    'url' => route('guidelines', 'manuscript-template-part-a'),
                    'pattern' => 'guidelines/manuscript-template-part-a',
                ],
                [
                    'label' => 'Manuscript Template Part B',
                    'url' => route('guidelines', 'manuscript-template-part-b'),
                    'pattern' => 'guidelines/manuscript-template-part-b',
                ],
            ],
        ],
        ['label' => 'Board', 'url' => url('board'), 'pattern' => 'board'],
        ['label' => 'Others', 'url' => url('others'), 'pattern' => 'others'],
        ['label' => 'Contact Us', 'url' => url('contact'), 'pattern' => 'contact'],
        ['label' => 'Login', 'url' => url('login'), 'pattern' => 'login'],
    ];
@endphp

<nav class="bg-ugcOrange text-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center min-h-12 text-sm font-medium">

            {{-- Desktop Menu --}}
            <div class="hidden md:flex items-center shrink-0">
                @foreach ($navLinks as $item)
                    @if (($item['pattern'] ?? '') === 'login')
                        @continue
                    @endif
                    <div class="relative uppercase shrink-0{{ !empty($item['children']) ? ' group' : '' }}">
                        <a href="{{ $item['url'] }}"
                            class="whitespace-nowrap px-2 xl:px-3 py-2 rounded transition {{ request()->is($item['pattern']) ? 'bg-black/20' : 'hover:bg-black/10' }} {{ !empty($item['children']) ? 'flex items-center gap-1 xl:gap-2' : '' }}">
                            {{ $item['label'] }}
                            @if (!empty($item['children']))
                                <svg class="w-3 h-3 transition-transform group-hover:rotate-180" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m6 9 6 6 6-6" />
                                </svg>
                            @endif
                        </a>
                        {{-- Dropdown submenu --}}
                        @if (!empty($item['children']))
                            <div
                                class="absolute left-0 top-full z-50 hidden min-w-56 rounded bg-ugcOrange text-white shadow-lg group-hover:block group-focus-within:block">
                                @foreach ($item['children'] as $child)
                                    <a href="{{ $child['url'] }}"
                                        class="block px-3 py-2 text-xs xl:text-sm border-b border-white/30 last:border-b-0 whitespace-nowrap transition-colors {{ request()->is($child['pattern']) ? 'bg-black/20' : 'hover:bg-black/10' }}">
                                        {{ $child['label'] }}
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>

            {{-- Desktop Search --}}
            <div
                class="hidden md:flex flex-1 justify-end ml-2 lg:ml-4 min-w-[120px] max-w-[180px] lg:max-w-xs xl:max-w-sm">
                <form action="{{ url('search') }}" method="GET" class="relative w-full">
                    <input type="text" name="q" value="{{ request('q') }}" placeholder="Search..."
                        class="w-full text-gray-800 rounded-sm py-1.5 px-3 pr-14 text-xs md:text-sm focus:outline-none focus:ring-2 focus:ring-black">
                    <button type="submit"
                        class="absolute right-2 top-2 text-ugcOrange font-bold text-xs hover:text-black transition-colors">SEARCH</button>
                </form>
            </div>

            {{-- Mobile Button --}}
            <button id="mobile-menu-button" type="button" aria-label="Toggle navigation menu"
                aria-controls="mobile-menu" aria-expanded="false"
                class="md:hidden ml-auto text-white hover:bg-black/10 p-2 rounded focus:outline-none transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-gray-200">
        <div class="px-4 py-2 space-y-1">
            @foreach ($navLinks as $index => $item)
                @php
                    $isActive = request()->is($item['pattern'] ?? '');
                    $hasChildren = !empty($item['children']);
                    $submenuId = 'mobile-submenu-' . $index;

                    $isChildActive =
                        $hasChildren &&
                        collect($item['children'])->contains(fn($child) => request()->url() === $child['url']);
                @endphp

                <div class="">

                    {{-- Main menu item --}}
                    <div class="flex items-center">
                        @if ($hasChildren)
                            <button type="button" data-submenu-button="{{ $submenuId }}"
                                aria-expanded="{{ $isChildActive ? 'true' : 'false' }}"
                                aria-controls="{{ $submenuId }}" aria-label="Toggle {{ $item['label'] }} submenu"
                                class="flex-1 block px-4 py-3 text-xs font-bold rounded-lg transition uppercase text-start {{ $isActive || $isChildActive ? 'bg-ugcOrange text-white' : 'text-ugcOrange py-2 hover:bg-ugcOrange hover:text-white' }}">
                                {{ $item['label'] }}
                            </button>
                        @else
                            <a href="{{ $hasChildren ? '#' : $item['url'] }}"
                                @if ($isActive || $isChildActive) aria-current="page" @endif
                                @if ($hasChildren)  @endif
                                class="flex-1 block px-4 py-3 text-xs font-bold rounded-lg transition uppercase{{ $isActive || $isChildActive ? 'bg-ugcOrange text-white' : 'text-ugcOrange py-2 hover:bg-ugcOrange hover:text-white' }}">
                                {{ $item['label'] }}
                            </a>
                        @endif
                    </div>

                    {{-- Expandable submenu --}}
                    @if ($hasChildren)
                        <div id="{{ $submenuId }}"
                            class="{{ $isChildActive ? '' : 'hidden' }} border border-ugcOrange px-2 py-2 rounded-lg">
                            @foreach ($item['children'] as $child)
                                @php
                                    $childActive = request()->url() === $child['url'];
                                @endphp

                                <a href="{{ $child['url'] }}"
                                    class="block px-3 py-2 text-sm border-b border-white/30 last:border-b-0 rounded-md {{ request()->is($child['pattern']) ? 'bg-ugcOrange text-white' : 'text-ugcOrange bg-white hover:bg-ugcOrange hover:text-white' }}">
                                    {{ $child['label'] }}
                                </a>
                            @endforeach
                        </div>
                    @endif

                </div>
            @endforeach

        </div>

        {{-- Mobile Search --}}
        <div class="p-4 border-t border-gray-100">
            <form action="{{ url('search') }}" method="GET" class="relative">
                <input type="text" name="q" value="{{ request('q') }}"
                    placeholder="Search Articles, Authors..."
                    class="w-full bg-gray-100 rounded-lg py-3 px-4 pr-14 text-gray-900 focus:outline-none focus:ring-2 focus:ring-ugcOrange">
                <button type="submit" class="absolute right-3 top-3 text-ugcOrange font-bold"> GO</button>
            </form>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        const icon = document.getElementById('menu-icon');

        if (!btn || !menu || !icon) return;

        const hamburgerPath = 'M4 6h16M4 12h16M4 18h16';
        const closePath = 'M6 18L18 6M6 6l12 12';

        function setMenuOpen(isOpen) {
            menu.classList.toggle('hidden', !isOpen);
            btn.setAttribute('aria-expanded', String(isOpen));
            icon.setAttribute('d', isOpen ? closePath : hamburgerPath);
        }

        btn.addEventListener('click', function() {
            setMenuOpen(menu.classList.contains('hidden'));
        });

        menu.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                setMenuOpen(false);
            });
        });

        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768) {
                setMenuOpen(false);
            }
        });

        document.querySelectorAll('[data-submenu-button]').forEach(function(button) {
            button.addEventListener('click', function() {
                const submenuId = button.dataset.submenuButton;
                const submenu = document.getElementById(submenuId);
                const chevron = button.querySelector('[data-chevron]');

                if (!submenu) return;

                const isOpen = !submenu.classList.contains('hidden');

                submenu.classList.toggle('hidden', isOpen);
                button.setAttribute('aria-expanded', String(!isOpen));

                if (chevron) {
                    chevron.classList.toggle('rotate-180', !isOpen);
                }
            });
        });

        document.querySelectorAll('[data-submenu-trigger]').forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                const submenuId = link.dataset.submenuTrigger;
                const button = document.querySelector(
                    '[data-submenu-button="' + submenuId + '"]'
                );

                if (button) button.click();
            });
        });

    });
</script>
