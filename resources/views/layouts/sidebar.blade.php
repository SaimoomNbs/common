<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{route('dashboard')}}">
            <img src="https://images.seeklogo.com/logo-png/40/2/discord-black-logo-png_seeklogo-404000.png" loading="lazy" width="18%" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Dev Desk</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <!-- dashboard -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{route('dashboard')}}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>Dashboard </title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(0.000000, 148.000000)">
                                            <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                                            <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <!-- ticket -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#ticketMenu" 
                class="nav-link {{ request()->routeIs('assigned.ticket','new.ticket','all.ticket','open.ticket','pending.ticket','close.ticket') ? 'active' : '' }}" aria-controls="ticketMenu" role="button" 
                aria-expanded="{{ request()->routeIs('assigned.ticket','new.ticket','all.ticket','open.ticket','pending.ticket','close.ticket') ? 'true' : 'false' }}">
                    <div class="icon icon-sm shadow-sm border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <i class="ni ni-compass-04" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Ticket supervision</span>
                </a>
                <div class="collapse {{ request()->routeIs('assigned.ticket','new.ticket','all.ticket','open.ticket','pending.ticket','close.ticket') ? 'show' : '' }}" id="ticketMenu">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item {{ request()->routeIs('assigned.ticket') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('assigned.ticket')}}">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal"> My Tickets </span>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('new.ticket') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('new.ticket')}}">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal"> New Tickets </span>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('all.ticket') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('all.ticket')}}">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal"> All Tickets </span>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('open.ticket') ? 'active' : '' }}">
                            <a class="nav-link " href="{{route('open.ticket')}}">
                                <span class="sidenav-mini-icon"> A </span>
                                <span class="sidenav-normal"> Open / In Progress </span>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('pending.ticket') ? 'active' : '' }}">
                            <a class="nav-link " href="{{route('pending.ticket')}}">
                                <span class="sidenav-mini-icon"> A </span>
                                <span class="sidenav-normal"> On Hold / Pending </span>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('close.ticket') ? 'active' : '' }}">
                            <a class="nav-link " href="{{route('close.ticket')}}">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal"> Closed / Resolved </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal"> Settings </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- user management -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#userMenu" 
                class="nav-link {{ request()->routeIs('user.management','new.user','user.role.permission','banned.user') ? 'active' : '' }}" aria-controls="userMenu" role="button" 
                aria-expanded="{{ request()->routeIs('user.management','new.user','user.role.permission','banned.user') ? 'true' : 'false' }}">
                    <div class="icon icon-sm shadow-sm border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <i class="ni ni-compass-04" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">User Management</span>
                </a>
                <div class="collapse {{ request()->routeIs('user.management','new.user','user.role.permission','banned.user') ? 'show' : '' }}" id="userMenu">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item {{ request()->routeIs('user.management') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('user.management')}}">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal"> All Users </span>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('new.user') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('new.user')}}">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal"> Add New User </span>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('user.role.permission') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('user.role.permission')}}">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal"> Roles & Permissions </span>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('banned.user') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('banned.user')}}">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal"> Banned Users </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal"> Settings </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Category -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#categoryMenu" 
                class="nav-link {{ request()->routeIs('categories','create.category','archive.categories','tags','create.tag','archive.tags') ? 'active' : '' }}" aria-controls="categoryMenu" role="button" 
                aria-expanded="{{ request()->routeIs('categories','create.category','archive.categories','tags','create.tag','archive.tags') ? 'true' : 'false' }}">
                    <div class="icon icon-sm shadow-sm border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <i class="ni ni-compass-04" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Category & Tags</span>
                </a>
                <div class="collapse {{ request()->routeIs('categories','create.category','archive.categories','tags','create.tag','archive.tags') ? 'show' : '' }}" id="categoryMenu">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item {{ request()->routeIs('categories') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('categories')}}">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal"> All Categories </span>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('create.category') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('create.category')}}">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal"> New Category </span>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('archive.categories') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('archive.categories')}}">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal"> Archived Categories </span>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('tags') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('tags')}}">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal"> All Tags </span>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('create.tag') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('create.tag')}}">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal"> Create Tag </span>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('archive.tags') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('archive.tags')}}">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal"> Archived Tags </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal"> Settings </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Pages -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#pagesMenu" 
                class="nav-link {{ request()->routeIs('pages','create.page') ? 'active' : '' }}" aria-controls="pagesMenu" role="button" 
                aria-expanded="{{ request()->routeIs('pages','create.page') ? 'true' : 'false' }}">
                    <div class="icon icon-sm shadow-sm border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <i class="ni ni-compass-04" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Pages</span>
                </a>
                <div class="collapse {{ request()->routeIs('pages','create.page') ? 'show' : '' }}" id="pagesMenu">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item {{ request()->routeIs('pages') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('pages')}}">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal"> All Pages </span>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('create.page') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('create.page')}}">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal"> Create Page </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal"> Settings </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Analytics -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#analyticsMenu" class="nav-link" aria-controls="analyticsMenu" role="button" aria-expanded="false">
                    <div class="icon icon-sm shadow-sm border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <i class="ni ni-compass-04" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Analytics</span>
                </a>
                <div class="collapse" id="analyticsMenu">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal"> Ticket Reports </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal"> Agent Performance </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal"> Customer Insights </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal"> Response Time Reports </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{route('dashboard')}}">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal"> SLA Reports </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Appearance -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#appearanceMenu" class="nav-link" aria-controls="appearanceMenu" role="button" aria-expanded="false">
                    <div class="icon icon-sm shadow-sm border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <i class="ni ni-compass-04" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Appearance</span>
                </a>
                <div class="collapse" id="appearanceMenu">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/appearance/theme-settings.html">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal"> Theme Settings </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/appearance/logo-branding.html">
                                <span class="sidenav-mini-icon"> L </span>
                                <span class="sidenav-normal"> Logo & Branding </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/appearance/navigation-settings.html">
                                <span class="sidenav-mini-icon"> N </span>
                                <span class="sidenav-normal"> Navigation Settings </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/appearance/typography.html">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal"> Typography </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/appearance/custom-css.html">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal"> Custom CSS/JS </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/appearance/footer-meta.html">
                                <span class="sidenav-mini-icon"> F </span>
                                <span class="sidenav-normal"> Footer & Meta Settings </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- App Setting -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#appMenu" class="nav-link" aria-controls="appMenu" role="button" aria-expanded="false">
                    <div class="icon icon-sm shadow-sm border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <i class="ni ni-compass-04" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">App Setting</span>
                </a>
                <div class="collapse" id="appMenu">

                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/settings/general.html">
                                <span class="sidenav-mini-icon"> G </span>
                                <span class="sidenav-normal"> General Settings </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/settings/email.html">
                                <span class="sidenav-mini-icon"> E </span>
                                <span class="sidenav-normal"> Email Settings </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/settings/notification.html">
                                <span class="sidenav-mini-icon"> N </span>
                                <span class="sidenav-normal"> Notification Settings </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/settings/timezone.html">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal"> Timezone & Locale </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/settings/ticket.html">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal"> Ticket Settings </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/settings/user.html">
                                <span class="sidenav-mini-icon"> U </span>
                                <span class="sidenav-normal"> User Preferences </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/settings/security.html">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal"> Security Settings </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/settings/integrations.html">
                                <span class="sidenav-mini-icon"> I </span>
                                <span class="sidenav-normal"> Integrations </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/settings/api-access.html">
                                <span class="sidenav-mini-icon"> A </span>
                                <span class="sidenav-normal"> API Access </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/settings/backup-restore.html">
                                <span class="sidenav-mini-icon"> B </span>
                                <span class="sidenav-normal"> Backup & Restore </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/settings/logs.html">
                                <span class="sidenav-mini-icon"> L </span>
                                <span class="sidenav-normal"> System Logs </span>
                            </a>
                        </li>
                    </ul>

                </div>
            </li>
            <!-- Language -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#languageMenu" class="nav-link" aria-controls="languageMenu" role="button" aria-expanded="false">
                    <div class="icon icon-sm shadow-sm border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <i class="ni ni-compass-04" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Language</span>
                </a>
                <div class="collapse" id="languageMenu">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/language/default-language.html">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal"> Default Language </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/language/manage-languages.html">
                                <span class="sidenav-mini-icon"> M </span>
                                <span class="sidenav-normal"> Manage Languages </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/language/translation-editor.html">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal"> Translation Editor </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/language/auto-translate.html">
                                <span class="sidenav-mini-icon"> A </span>
                                <span class="sidenav-normal"> Auto Translate (via API) </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/language/right-to-left.html">
                                <span class="sidenav-mini-icon"> R </span>
                                <span class="sidenav-normal"> RTL Support </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/language/multi-language.html">
                                <span class="sidenav-mini-icon"> M </span>
                                <span class="sidenav-normal"> Enable Multi-language </span>
                            </a>
                        </li>
                    </ul>

                </div>
            </li>
            <!-- Contact Support -->
            <li class="nav-item">
                <a class="nav-link  " href="">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>office</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g id="office" transform="translate(153.000000, 2.000000)">
                                            <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                                            <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Contact Support</span>
                </a>
            </li>
        </ul>
    </div>
</aside>