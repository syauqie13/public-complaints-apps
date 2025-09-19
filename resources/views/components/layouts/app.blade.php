<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title', 'Dashboard') </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('image/cs.png') }}" type="image/x-icon">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('mazer/assets/extensions/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/assets/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/assets/compiled/css/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/assets/compiled/css/iconly.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/assets/compiled/css/table-datatable.css') }}">
    @yield('css')
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Init Theme -->
    <script src="{{ asset('mazer/assets/static/js/initTheme.js') }}"></script>

    <div id="app">
        <!-- Sidebar -->
        <livewire:atom.sidebar>

            <div id="main">
                <!-- Header -->
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>

                <!-- Page Content -->
                {{ $slot }}

            </div>

            <!-- Footer -->
            <livewire:atom.footer>

    </div>


    <!-- Scripts -->
    <script src="{{ asset('mazer/assets/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('mazer/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('mazer/assets/compiled/js/app.js') }}"></script>

    <!-- Apexcharts -->
    <script src="{{ asset('mazer/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('mazer/assets/static/js/pages/dashboard.js') }}"></script>

    <!-- data tables -->
    <script src="{{asset('mazer/assets/extensions/simple-datatables/umd/simple-datatables.js')}}"></script>
    <script src="{{ asset('mazer/assets/static/js/pages/simple-datatables.js') }}"></script>

</body>

</html>
