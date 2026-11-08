<!DOCTYPE html>
<html class="h-full" data-kt-theme="true" data-kt-theme-mode="light" dir="ltr" lang="en">

<head>
    <title>{{ $pageTitle ?? 'Panel' }} | Zankhana International E-Journal</title>
    @include('layouts.panel.head')
    @yield('styles')
</head>

<body
    class="antialiased flex h-full text-base text-foreground bg-background [--header-height:60px] [--sidebar-width:270px] lg:overflow-hidden bg-muted">

    <!-- Page Base -->
    <div class="flex grow h-full overflow-hidden">

        <!-- Mobile Header -->
        @include('layouts.panel.header')

        <!-- Metronic Sidebar -->
        @include('layouts.panel.sidebar')

        <!-- Content Area Wrapper -->
        <div class="flex flex-col lg:flex-row grow pt-(--header-height) lg:pt-0 h-full overflow-hidden">
            <div
                class="flex flex-col grow items-stretch rounded-xl bg-background border border-input lg:ms-(--sidebar-width) mt-0 lg:mt-[15px] m-[15px] overflow-hidden shadow-xs">

                <!-- Scrollable Content -->
                <div class="flex flex-col grow kt-scrollable-y-auto [--kt-scrollbar-width:auto] p-4 lg:p-6"
                    id="scrollable_content">
                    <main class="grow pb-8" role="content">
                        @yield('content')
                    </main>

                    @include('layouts.panel.footer')
                </div>

            </div>
        </div>

    </div>

    <!-- Metronic Core Scripts -->
    <script src="{{ asset('dist/assets/js/core.bundle.js') }}"></script>
    <script src="{{ asset('dist/assets/vendors/ktui/ktui.min.js') }}"></script>
    <script src="{{ asset('dist/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dist/assets/js/widgets/general.js') }}"></script>

    <script>
        const BASE_URL = "{{ url('/') }}";
    </script>

    @yield('scripts')
</body>

</html>
