    <!-- <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl position-sticky" id="navbarBlur" navbar-scroll="true"> -->
    <nav class="navbar navbar-main navbar-expand-lg position-sticky top-0 px-0 mx-4 bg-gray-100 z-index-sticky shadow-none" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-2 px-0">
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:void(0);" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item pe-3 d-none d-xl-flex align-items-center">
                        <a href="" class="btn btn-white shadow-sm">
                            <span>My Ticket</span>
                            <span class="badge badge-primary">24</span>
                        </a>
                    </li>
                    <li class="nav-item pe-3 d-none d-xl-flex align-items-center">
                        <a href="" class="btn btn-white shadow-sm">
                            <span class="btn-inner--icon me-1"><i class="ni ni-chart-bar-32 text-light"></i></span>
                            <span class="btn-inner--text">Report</span>
                        </a>
                    </li>
                    <li class="nav-item pe-3 d-none d-xl-flex align-items-center">
                        <a href="" class="btn btn-white shadow-sm">
                            <span class="btn-inner--icon me-1"><i class="ni ni-settings-gear-65 text-light"></i></span>
                            <span class="btn-inner--text">Settings</span>
                        </a>
                    </li>
                    <li class="nav-item pe-3 d-none d-xl-flex align-items-center">
                        <a href="" class="btn btn-white shadow-sm">
                            <span>Notifications</span>
                            <span class="badge badge-md badge-circle badge-floating badge-primary border-white">4</span>
                        </a>
                    </li>
                    <li class="nav-item pe-3 d-none d-xl-flex align-items-center">
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn btn-white dropdown-toggle shadow-sm" data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
                                <img src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/US.png" /> Language
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <img src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/DE.png" /> Deutsch
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <img src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/GB.png" /> English(UK)
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <img src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/FR.png" /> Français
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item pe-3 d-flex align-items-center">
                        <div class="dropdown">
                            <button class="btn btn-white dropdown-toggle shadow-sm" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="true">
                                <i class="ni ni-single-02 me-sm-1 text-light"></i>
                                <span class="d-sm-inline d-none text-capitalize">{{ Auth::user()->name }}</span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 43px);" data-popper-placement="bottom-start">
                                <li><a class="dropdown-item" href="{{route('profile.edit')}}">Update Profile</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">Sign Out</a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>