<aside class="left-sidebar">
    <style>
        .submenu {
            display: none;
        }

        /* Saat mouse di atas elemen <li>, tampilkan submenu */
        .dropdown li:hover .submenu {
            display: block;
        }

        /* CSS untuk mengatur tampilan dropdown */
        .sidebar-item ul {
            display: none;
            /* Sembunyikan submenu awalnya */
        }

        .sidebar-item:hover ul {
            display: block;
            /* Tampilkan submenu saat item utama dihover */
        }
    </style>
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="#" class="text-nowrap logo-img">
                <img src="{{ asset('src\assets\images\bbwsologo.png') }} "width="180" alt="" />
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
                    <span class="hide-menu">Beranda</span>
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
                    <span class="hide-menu">Beranda</span>
                </li>

                {{-- @if (auth()->check() &&
    auth()->user()->isAdmin())
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#" aria-expanded="false">
                            <span>
                                <i class="ti ti-article"></i>
                            </span>
                            <span class="hide-menu">GIS Daerah Irigasi</span>
                        </a>
                    </li>
                    @else
                    <li class="btn"><a href="/login">MASUK</a></li>
                @endif --}}

                <li class="sidebar-item">
                    <a class="sidebar-link" href="/dashboard/foto-beranda" aria-expanded="false">
                        <span>
                            {{-- <i class="ti ti-article"></i> --}}
                        </span>
                        <span class="hide-menu">Foto Beranda</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Menu</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/dashboard/beritas/index" aria-expanded="false">
                        <span>
                            {{-- <i class="ti ti-article"></i> --}}
                        </span>
                        <span class="hide-menu">Berita</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/dashboard/pengumuman" aria-expanded="false">
                        <span>
                            {{-- <i class="ti ti-article"></i> --}}
                        </span>
                        <span class="hide-menu">Pengumuman</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/dashboard/situs-terkait" aria-expanded="false">
                        <span>
                            {{-- <i class="ti ti-article"></i> --}}
                        </span>
                        <span class="hide-menu">Situs Terkait</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    {{-- <i class="ti ti-dots nav-small-cap-icon fs-4"></i> --}}
                    <span class="hide-menu">Infrastruktur</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/dashboard/infrastruktur/bendungans" aria-expanded="false">
                        <span>
                            {{-- <i class="ti ti-cards"></i> --}}
                        </span>
                        <span class="hide-menu">Bendungan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/dashboard/infrastruktur/bendungs" aria-expanded="false">
                        <span>
                            {{-- <i class="ti ti-file-description"></i> --}}
                        </span>
                        <span class="hide-menu">Bendung</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/dashboard/infrastruktur/embungs" aria-expanded="false">
                        <span>
                            {{-- <i class="ti ti-typography"></i> --}}
                        </span>
                        <span class="hide-menu">Embung</span>
                    </a>
                </li>

                {{-- <li class="sidebar-item">
                    <a class="sidebar-link" href="#" aria-expanded="false">
                        <span>
                            <i class="ti ti-typography"></i>
                        </span>
                        <span class="hide-menu">Infrastruktur</span>
                    </a>
                    <ul>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/dashboard/infrastruktur/bendungans">Bendungan</a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/dashboard/infrastruktur/bendungs">Bendung</a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/dashboard/infrastruktur/embungs">Embung</a>
                        </li>
                    </ul>
                </li> --}}

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Daftar Informasi Publik</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/dashboard/daftar-informasi-publik" aria-expanded="false">
                        <span>
                            {{-- <i class="ti ti-cards"></i> --}}
                        </span>
                        <span class="hide-menu">Informasi Publik</span>
                    </a>
                </li>


                {{-- <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown button
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div> --}}
                {{-- <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">AUTH</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                        <span>
                            <i class="ti ti-login"></i>
                        </span>
                        <span class="hide-menu">Login</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                        <span>
                            <i class="ti ti-user-plus"></i>
                        </span>
                        <span class="hide-menu">Register</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">EXTRA</span>
                </li> --}}
                {{-- <li class="sidebar-item">
            <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
              <span>
                <i class="ti ti-mood-happy"></i>
              </span>
              <span class="hide-menu">Icons</span>
            </a>
          </li> --}}

                {{-- <li class="sidebar-item">
                    <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                        <span>
                            <i class="ti ti-aperture"></i>
                        </span>
                        <span class="hide-menu">Sample Page</span>
                    </a>
                </li> --}}
            </ul>
        </nav>
    </div>
</aside>
