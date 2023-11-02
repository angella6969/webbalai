<aside class="left-sidebar">
    <style>
        .submenu {
            display: none;
        }

        /* Saat mouse di atas elemen <li>, tampilkan submenu */
        .dropdown li:hover .submenu {
            display: block;
        }
    </style>
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="#" class="text-nowrap logo-img">
                <img src="{{ asset('images/bbwsologo.png') }} "width="180" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Menu</span>
                </li>

                {{-- @if (auth()->check() &&
                        auth()->user()->isAdmin())
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/dashboard/maps" aria-expanded="false">
                            <span>
                                <i class="ti ti-article"></i>
                            </span>
                            <span class="hide-menu"></span>
                        </a>
                    </li>
                @endif --}}

                <li class="sidebar-item">
                    <a class="sidebar-link" href="/dashboard/daerah-irigasi" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu"> </span>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
