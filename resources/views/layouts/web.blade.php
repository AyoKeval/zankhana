<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle . ' | ' ?? '' }}Zankhana</title>
</head>

@include('layouts.web.head')

@yield('styles')

<body class="font-sans text-gray-800 antialiased flex flex-col min-h-screen">

    <!-- UGC-Inspired Header Section -->
    @include('layouts.web.header')

    <!-- Zankhana Wireframe: Main 3-Column Layout -->
    @yield('content')

    <!-- Global Footer -->
    @include('layouts.web.footer')

    <script>
        const BASE_URL = "{{ url('/') }}";
    </script>

    @yield('scripts')

</body>

</html>
