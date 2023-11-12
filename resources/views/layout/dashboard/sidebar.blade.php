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
    <div>

        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="#" class="text-nowrap logo-img">
                <img src="{{ asset('src\assets\images\bbwsologo.png') }} " width="180" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>

        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                @can('Admin')

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Beranda</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('dashboard/foto-beranda*') ? 'active' : '' }}"
                        href="/dashboard/foto-beranda" aria-expanded="false">
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
                    <a class="sidebar-link {{ Request::is('dashboard/beritas*') ? 'active' : '' }}"
                        href="/dashboard/beritas/" aria-expanded="false">
                        <span>
                            {{-- <i class="ti ti-article"></i> --}}
                        </span>
                        <span class="hide-menu">Berita</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('dashboard/pengumuman*') ? 'active' : '' }}"
                        href="/dashboard/pengumuman" aria-expanded="false">
                        <span>
                            {{-- <i class="ti ti-article"></i> --}}
                        </span>
                        <span class="hide-menu">Pengumuman</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Daftar Informasi Publik</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('dashboard/daftar-informasi-publik*') ? 'active' : '' }}"
                        href="/dashboard/daftar-informasi-publik" aria-expanded="false">
                        <span>
                            {{-- <i class="ti ti-cards"></i> --}}
                        </span>
                        <span class="hide-menu">Informasi Publik</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Media </span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('dashboard/media/media-informasi*') ? 'active' : '' }}"
                        href="/dashboard/media/media-informasi" aria-expanded="false">
                        <span>
                            {{-- <i class="ti ti-cards"></i> --}}
                        </span>
                        <span class="hide-menu">Media Informasi</span>
                    </a>
                </li>
                @endcan

                @can('AdminSisda')
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Situs</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('dashboard/situs-terkait*') ? 'active' : '' }}"
                        href="/dashboard/situs-terkait" aria-expanded="false">
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
                    <a class="sidebar-link {{ Request::is('dashboard/infrastruktur/bendungans*') ? 'active' : '' }}"
                        href="/dashboard/infrastruktur/bendungans" aria-expanded="false">
                        <span>
                            {{-- <i class="ti ti-cards"></i> --}}
                        </span>
                        <span class="hide-menu">Bendungan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('dashboard/infrastruktur/bendungs*') ? 'active' : '' }}"
                        href="/dashboard/infrastruktur/bendungs" aria-expanded="false">
                        <span>
                            {{-- <i class="ti ti-file-description"></i> --}}
                        </span>
                        <span class="hide-menu">Bendung</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('dashboard/infrastruktur/embungs*') ? 'active' : '' }}"
                        href="/dashboard/infrastruktur/embungs" aria-expanded="false">
                        <span>
                            {{-- <i class="ti ti-typography"></i> --}}
                        </span>
                        <span class="hide-menu">Embung</span>
                    </a>
                </li>
                @endcan
            </ul>
        </nav>
    </div>


</aside>