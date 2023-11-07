<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto active" href="/"><span data-feather="home">
                </span></a></li>
        <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">Sejarah</a></li>
                <li><a href="/profil/visi-misi">Visi dan Misi</a></li>
                <li><a href="#">Fungsi dan Tugas</a></li>
                <li><a href="/profil/struktur-organisasi">Struktur Organisasi</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Berita</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="/beritas">Berita Balai</a></li>
                <li><a href="/pengumumans">Pengumuman</a></li>
                <li><a href="#">Agenda Kegiatan</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Info Publik</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">PPID BBWS SO</a></li>
                {{-- <li><a href="#">Daftar Informasi Publik</a></li> --}}
                <li class="dropdown"><a href="#"><span>Daftar Informasi Publik</span> <i
                            class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">Informasi Berkala</a></li>
                        <li><a href="#">Informasi Setiap Saat </a></li>
                        <li><a href="#">Informasi Serta Merta</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Perencanaan</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">Rencana Strategis</a></li>
                        <li><a href="#">Pola WS dan RPSDA</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Kinerja</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">LAKIP</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Infrastruktur</span> <i
                            class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>Informasi</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="/informasi-publik/infrastruktur/bendungans">Bendungan</a></li>
                                <li><a href="#">Bendung</a></li>
                                <li><a href="#">Embung</a></li>
                                <li><a href="#">Irigasi</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Data</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">aplikasi 1</a></li>
                                <li><a href="#">aplikasi 2</a></li>
                                <li><a href="#">aplikasi 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Media</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li class="dropdown"><a href="#"><span>Media Informasi</span> <i
                            class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">Majalah</a></li>
                        <li><a href="#">Leaflet dan Brosur</a></li>
                        <li><a href="#">Infografis</a></li>
                    </ul>
                <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">Foto</a></li>
                        <li><a href="https://www.youtube.com/@bbwsserayuopak7569">Video</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li class="dropdown"><a href="#"><span>Terpadu</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">Prosedur Pelayanan</a></li>
                        <li><a href="#">KALATIRTA</a></li>
                        <li><a href="#">Perpustakaan Online</a></li>
                    </ul>
                </li>

                {{-- <li class="dropdown"><a href="#"><span>Data dan Informasi</span> <i
                            class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>Data Teknis</span> <i
                                    class="bi bi-chevron-right"></i></a>
                        </li>
                        <li class="dropdown"><a href="#"><span>Data Kinerja</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">LAKIP</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}
                <li class="dropdown"><a href="#"><span>Pengaduan</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">Pengaduan Balai</a></li>
                        <li><a href="#">Pengaduan PUPR</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <div class="input-group">
            <input type="text" class="form-control" name="keyword" id="s" style="width: 200px; height:30px ; font-size: .8rem"
                placeholder="Cari..." required="" aria-label="cari..." data-uw-rm-form="fx">
            </span>
        </div>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->


<script>
    // Ambil elemen yang akan diubah margin atasnya
    var scrollBox = document.getElementById('navbar');

    // Tambahkan event listener untuk mengamati peristiwa scroll
    window.addEventListener('scroll', function() {
        // Tentukan margin atas yang akan diubah (misalnya 20px)
        var newMarginTop = 0;

        // Cek posisi scroll
        if (window.scrollY > 100) {
            // Terapkan margin atas baru
            scrollBox.style.marginTop = newMarginTop + 'px';
        } else {
            // Kembalikan margin atas ke nilai awal
            scrollBox.style.marginTop = '40px';
        }
    });
</script>
