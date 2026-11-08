<header class="w-full">
    <!-- Top Accessibility/Utility Bar -->
    <div class="bg-gray-800 text-gray-300 text-xs py-1 px-4 hidden md:flex">
        <div class="max-w-7xl mx-auto w-full hidden md:flex justify-between items-center font-medium">

            <div class="flex space-x-4">
                <a href="{{ url('home') }}" class="hover:text-white transition">
                    <i class="fas fa-home"></i> Home
                </a>
                <span>|</span>
                <a href="{{ url('home#main-content') }}" class="hover:text-white transition">
                    Skip to main content
                </a>
            </div>
            <div class="flex space-x-4 items-center">
                <a href="{{ url('contact') }}" class="hover:text-white transition">
                    Contact Us
                </a>
                <span>|</span>
                <a href="{{ url('login') }}" class="hover:text-white transition">
                    Login
                </a>
            </div>
        </div>
    </div>

    <!-- Logo & Branding Banner -->
    <div class="bg-white">
        <div class="px-4 py-4 md:py-6 flex justify-between items-center max-w-7xl mx-auto w-full">
            <div class="flex items-center space-x-6">
                <!-- Branding -->
                <div>
                    <h1
                        class="text-3xl md:text-4xl font-extrabold text-ugcOrange tracking-tight uppercase leading-none mb-1">
                        Zankhana</h1>
                    <p class="text-gray-500 text-sm font-semibold tracking-wide">
                        International e-Journal (Peer Reviewed) | Powered by AyoSoftech</p>
                </div>
            </div>
            <div class="hidden lg:flex items-center space-x-6 shrink-0 text-right">
                <!-- Trust Badges -->
                <div>
                    <p class="text-xs text-gray-500 font-bold uppercase">Impact Factor</p>
                    <p class="text-xl font-black text-gray-800">3.638</p>
                </div>
                <div class="pl-4 border-l border-gray-200">
                    <p class="text-xs text-gray-500 font-bold uppercase">ISSN</p>
                    <p class="text-xl font-black text-gray-800 text-ugcOrange">2350-0271</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Orange Navigation Bar -->
    @include('layouts.web.navbar')

    <!-- Scrolling Marquee Notification -->
    <div class="marquee-container shadow-inner">
        <div class="marquee-content">
            * SUBMIT YOUR PAPER * SUBMISSION LAST DATE: 18 (EVERY MONTH) * ARTICLE ISSUE DATE: 19 (EVERY MONTH) *
            Zankhana International E-Journal *
        </div>
    </div>
</header>
