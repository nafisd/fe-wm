<!-- resources/views/layouts/master.blade.php -->

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title', 'Dashboard')</title>
    <!-- CSS -->
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/robust/app-assets/css/vendors.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/robust/app-assets/vendors/css/forms/icheck/icheck.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/robust/app-assets/vendors/css/forms/icheck/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/robust/app-assets/vendors/css/charts/morris.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/robust/app-assets/vendors/css/extensions/unslider.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/robust/app-assets/vendors/css/weather-icons/climacons.min.css') }}">
    <!-- END VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/robust/app-assets/css/app.css') }}">
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/robust/app-assets/css/core/menu/menu-types/vertical-compact-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/robust/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/robust/app-assets/css/core/colors/palette-climacon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/robust/app-assets/css/pages/users.css') }}">
    <!-- END Page Level CSS-->
    <!-- Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/robust/assets/css/style.css') }}">
    <!-- Custom CSS-->


    @livewireStyles
</head>

<body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-compact-menu" data-col="2-columns">
     <!-- Navbar -->
     @include('partials.navbar')

    <!-- Sidebar -->
    @include('partials.sidebar')


    <!-- Konten Utama -->
    <div class="main-content">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('partials.footer')

    <!-- JS Robust -->
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('assets/robust/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBDkKetQwosod2SZ7ZGCpxuJdxY3kxo5Po"></script>
    <script src="{{ asset('assets/robust/app-assets/vendors/js/charts/gmaps.min.js') }}"></script>
    <script src="{{ asset('assets/robust/app-assets/vendors/js/forms/icheck/icheck.min.js') }}"></script>
    <script src="{{ asset('assets/robust/app-assets/vendors/js/extensions/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('assets/robust/app-assets/vendors/js/charts/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/robust/app-assets/vendors/js/charts/morris.min.js') }}"></script>
    <script src="{{ asset('assets/robust/app-assets/vendors/js/extensions/unslider-min.js') }}"></script>
    <script src="{{ asset('assets/robust/app-assets/vendors/js/charts/echarts/echarts.js') }}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="{{ asset('assets/robust/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('assets/robust/app-assets/js/core/app.js') }}"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('assets/robust/app-assets/js/scripts/pages/dashboard-fitness.js') }}"></script>
    <!-- END PAGE LEVEL JS-->

    @livewireScripts
</body>

</html>
