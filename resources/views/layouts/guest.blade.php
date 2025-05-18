<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') {{ config('app.name') }}</title>
    <link rel="apple-touch-icon" sizes="76x76" href="https://images.seeklogo.com/logo-png/40/2/discord-black-logo-png_seeklogo-404000.png">
    <link rel="icon" type="image/png" href="https://images.seeklogo.com/logo-png/40/2/discord-black-logo-png_seeklogo-404000.png">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous" defer></script>
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

<body class="g-sidenav-show">
    <!-- Loader -->
    <div id="global-loader">
        <img src="https://images.seeklogo.com/logo-png/40/2/discord-black-logo-png_seeklogo-404000.png" alt="Loading..." class="loader-logo">
    </div>
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid">
                        <a class="navbar-brand font-weight-bolder ms-lg-0" href="{{route('dashboard')}}">
                            <img src="https://images.seeklogo.com/logo-png/40/2/discord-black-logo-png_seeklogo-404000.png" loading="lazy" width="10%" class="d-lg-inline d-none navbar-brand-img h-100">
                            {{ config('app.name') }}
                        </a>
                        <img src="https://images.seeklogo.com/logo-png/40/2/discord-black-logo-png_seeklogo-404000.png" loading="lazy" width="10%" class="d-lg-none d-block">
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                            <ul class="navbar-nav navbar-nav-hover ms-auto">
                                <li class="nav-item mx-2">
                                    <a href="" class="nav-link">
                                        Terms & Conditions
                                    </a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a href="" class="nav-link">
                                        FAQ
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav d-lg-block d-none">
                                @if(request()->routeIs('login'))
                                <li class="nav-item">
                                    <a href="{{route('register')}}" class="btn btn-sm shadow-none bg-primary text-white  btn-round mb-0 me-1">Sign Up</a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a href="{{route('login')}}" class="btn btn-sm shadow-none bg-primary text-white  btn-round mb-0 me-1">Sign In</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../../../pages/dashboards/default.html">
                            Dev Desk
                        </a>
                        <img src="https://images.seeklogo.com/logo-png/40/2/discord-black-logo-png_seeklogo-404000.png" width="10%"> 
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                            <ul class="navbar-nav navbar-nav-hover mx-auto">
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center " id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                        Pages
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav d-lg-block d-none">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/product/soft-ui-dashboard-pro" class="btn btn-sm  bg-primary  btn-round mb-0 me-1" onclick="smoothToPricing('pricing-soft-ui')">Buy Now</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav> -->
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content mt-0">
        {{ $slot }}
        <footer class="footer pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-4 mx-auto text-center">
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Company
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            About Us
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Team
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Products
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Blog
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                            Pricing
                        </a>
                    </div>
                    <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-dribbble" aria-hidden="true"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-twitter" aria-hidden="true"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-instagram" aria-hidden="true"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-pinterest" aria-hidden="true"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-github" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 mx-auto text-center mt-1">
                        <p class="mb-0 text-secondary">
                            Copyright © <script>
                                document.write(new Date().getFullYear())
                            </script>2025 Soft by Creative Tim.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
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
    <!-- <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script> -->
    <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('assets/js/soft-ui-dashboard.min.js')}}?v=1.0.3"></script>

    @yield('script')
</body>

</html>