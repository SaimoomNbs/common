<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title') {{ config('app.name') }}
    </title>
    <link rel="apple-touch-icon" sizes="76x76" href="https://images.seeklogo.com/logo-png/40/2/discord-black-logo-png_seeklogo-404000.png">
    <link rel="icon" type="image/png" href="https://images.seeklogo.com/logo-png/40/2/discord-black-logo-png_seeklogo-404000.png">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800,900" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <!-- <link id="pagestyle" href="{{asset('assets/css/soft-ui-dashboard.css')}}" rel="stylesheet" /> -->
    <style>
        #global-loader {
            position: fixed;
            z-index: 9999;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: opacity 0.3s ease;
            overflow: hidden !important;
            /* background: rgba(255, 255, 255, 0.63); */
            background: #fff;
            backdrop-filter: blur(9.7px);
            -webkit-backdrop-filter: blur(9.7px);
        }

        .loader-logo {
            width: 70px;
            height: 70px;
            animation: pulse 1.2s infinite ease-in-out;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 0.8;
            }

            50% {
                transform: scale(1.1);
                opacity: 1;
            }

            100% {
                transform: scale(1);
                opacity: 0.8;
            }
        }
    </style>
    @vite('resources/js/app.js')
    @yield('style')
</head>

<body class="g-sidenav-show  bg-gray-100">
    <!-- Loader -->
    <div id="global-loader">
        <img src="https://images.seeklogo.com/logo-png/40/2/discord-black-logo-png_seeklogo-404000.png" alt="Loading..." class="loader-logo">
    </div>
    <!-- sidebar -->
    @include('layouts.sidebar')
    <!-- sidebar -->
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('layouts.header')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            @yield('content')
            <!-- footer -->
            @include('layouts.footer')
        </div>
    </main>
    <script>
        window.addEventListener('load', function() {
            const loader = document.getElementById('global-loader');
            if (loader) {
                loader.style.opacity = '0';
                setTimeout(() => loader.style.display = 'none', 300);
            }
        });
    </script>

    <!--   Core JS Files   -->
    <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('assets/js/soft-ui-dashboard.min.js')}}?v=1.0.3"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- custom script -->
    @yield('script')
</body>

</html>