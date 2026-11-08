<!DOCTYPE html>
<html class="h-full" data-kt-theme="true" data-kt-theme-mode="light" dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="follow, index" name="robots" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ $pageTitle ?? 'Sign In' }} | Zankhana International E-Journal</title>

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('dist/assets/media/app/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('dist/assets/media/app/favicon-16x16.png') }}" />
    <link rel="shortcut icon" href="{{ asset('dist/assets/media/app/favicon.ico') }}" />

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Metronic Vendors & Stylesheets -->
    <link href="{{ asset('dist/assets/vendors/keenicons/styles.bundle.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/assets/css/styles.css') }}" rel="stylesheet" />

    <!-- Theme Mode -->
    <script>
        const defaultThemeMode = 'light';
        let themeMode;

        if (document.documentElement) {
            if (localStorage.getItem('kt-theme')) {
                themeMode = localStorage.getItem('kt-theme');
            } else if (document.documentElement.hasAttribute('data-kt-theme-mode')) {
                themeMode = document.documentElement.getAttribute('data-kt-theme-mode');
            } else {
                themeMode = defaultThemeMode;
            }

            if (themeMode === 'system') {
                themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            }

            document.documentElement.classList.add(themeMode);
        }
    </script>

    @yield('styles')
</head>

<body class="antialiased flex h-full text-base text-foreground bg-background">
    @yield('content')

    <!-- Metronic Core Scripts -->
    <script src="{{ asset('dist/assets/js/core.bundle.js') }}"></script>
    <script src="{{ asset('dist/assets/vendors/ktui/ktui.min.js') }}"></script>

    <script>
        const BASE_URL = "{{ url('/') }}";
    </script>

    @yield('scripts')
</body>

</html>
