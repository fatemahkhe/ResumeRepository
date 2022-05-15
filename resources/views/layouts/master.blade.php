<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Powerfull Resume') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    <!-- Google Fonts -->
    {{-- <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}
  
    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/admin/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/admin/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/admin/quill/quill.snow.css" rel="stylesheet">
    <link href="/assets/vendor/admin/quill/quill.bubble.css" rel="stylesheet">
    <link href="/assets/vendor/admin/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/admin/simple-datatables/style.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="/assets/css/admin/style.css" rel="stylesheet">
    {{-- @livewireStyles --}}


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/admin/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/vendor/admin/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/admin/chart.js/chart.min.js"></script>
    <script src="/assets/vendor/admin/echarts/echarts.min.js"></script>
    <script src="/assets/vendor/admin/quill/quill.min.js"></script>
    <script src="/assets/vendor/admin/simple-datatables/simple-datatables.js"></script>
    <script src="/assets/vendor/admin/tinymce/tinymce.min.js"></script>
    <script src="/assets/vendor/admin/php-email-form/validate.js"></script>
  
    <!-- Template Main JS File -->
    <script src="/assets/js/admin/main.js"></script>
    {{-- @livewireScripts --}}

</head>
<body>
  <main id="app">
    @yield('content')
  </main>
  {{-- <body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals') --}}
</body>
</html>
