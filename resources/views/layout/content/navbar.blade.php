<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
        <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">Visi dan Misi</a></li>
                <li><a href="#">Sejarah</a></li>
                <li><a href="#">Fungsi dan Tugas</a></li>
                <li><a href="#">Struktur Organisasi</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Berita</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">Berita Balai</a></li>
                <li><a href="#">Pengumuman</a></li>
                {{-- <li><a href="#">Visi dan Misi</a></li> --}}
            </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Informasi Publik</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">PPID BBWS Serayu Opak</a></li>
                <li><a href="#">Daftar Informasi Publik</a></li>
                <li class="dropdown"><a href="#"><span>Perencanaan</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">Rencana Strategis</a></li>
                        <li><a href="#">Pola WS dan RPSDA</a></li>
                    </ul>
                </li>
                <li><a href="#">Agenda Kegiatan</a></li>
            </ul>
        </li>

        <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li class="dropdown"><a href="#"><span>Kalatirta</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="http://202.169.239.20/">AiR(e-Rekomtek BBWS SO)</a></li>
                        <li class="dropdown"><a href="#"><span>Permohonan Informasi SDA</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Prosedur Pelayanan</a></li>
                                <li><a href="#">Form Permohonan</a></li>
                                <li><a href="#">Pengajuan Keberatan</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Perpustakaan</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>Data dan Informasi</span> <i
                            class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>Data Teknis</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            {{-- <ul>
                                <li><a href="#">Aplikasi 1</a></li>
                                <li><a href="#">Aplikasi 2</a></li>
                                <li><a href="#">Aplikasi 3</a></li>
                            </ul> --}}
                        </li>
                        <li class="dropdown"><a href="#"><span>Data Kinerja</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">LAKIP</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Pengaduan</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">Pengaduan BBWS SO</a></li>
                        <li><a href="#">Pengaduan PUPR</a></li>
                        <li><a href="#">Lapor</a></li>
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
        <div class="input-group">
            <input type="text" class="form-control" name="keyword" id="s" style="width: 200px; height:30px ;"
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
