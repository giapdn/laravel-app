<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dasboard</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

    {{-- CSS mặc định --}}
    <link rel="stylesheet" href="{{ asset('admin_resources/css/styles.min.css') }}">
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <!-- Sidebar Start -->
        @include('admin.layouts.sidebar')
        <!--  Sidebar End -->

        <!--  Main wrapper -->
        <div class="body-wrapper">

            <!--  Header Start -->
            @include('admin.layouts.header')
            <!--  Header End -->

            <!-- Main start -->
            @yield('main')
            {{-- @include('admin.layouts.dashboard') --}}
            <!-- Main end -->
        </div>
    </div>
    <script src="../admin_resources/libs/jquery/dist/jquery.min.js"></script>
    <script src="../admin_resources/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../admin_resources/js/sidebarmenu.js"></script>
    <script src="../admin_resources/js/app.min.js"></script>

    <script src="../admin_resources/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../admin_resources/libs/simplebar/dist/simplebar.js"></script>

    <script src="../admin_resources/js/dashboard.js"></script>
</body>

</html>
