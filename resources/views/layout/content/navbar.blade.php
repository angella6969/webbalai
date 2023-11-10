<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto active" href="/"><span data-feather="home">
                </span></a></li>
        <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="/under-Maintenance">Sejarah</a></li>
                <li><a href="/profil/visi-misi">Visi dan Misi</a></li>
                <li><a href="/profil/fungsi-dan-tugas">Fungsi dan Tugas</a></li>
                <li><a href="/profil/struktur-organisasi">Struktur Organisasi</a></li>
                <li><a href="/profil/kontak">Kontak</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Berita</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="/beritas">Berita Balai</a></li>
                <li><a href="/pengumumans">Pengumuman</a></li>
                <li><a href="/under-Maintenance">Agenda Kegiatan</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Info Publik</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="/info-public/daftar-informasi-publik">Daftar Informasi Publik</a></li>
                <li class="dropdown"><a href="#"><span>Perencanaan</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="/under-Maintenance">Rencana Strategis</a></li>
                        <li><a href="/under-Maintenance">Pola WS dan RPSDA</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Kinerja</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="/under-Maintenance">LAKIP</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Infrastruktur</span> <i
                            class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>Informasi</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="/informasi-publik/infrastruktur/bendungans">Bendungan</a></li>
                                <li><a href="/informasi-publik/infrastruktur/bendungs">Bendung</a></li>
                                <li><a href="/informasi-publik/infrastruktur/embungs">Embung</a></li>
                                <li><a href="/under-Maintenance">Irigasi</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Data</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="/under-Maintenance">aplikasi 1</a></li>
                                <li><a href="/under-Maintenance">aplikasi 2</a></li>
                                <li><a href="/under-Maintenance">aplikasi 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Media</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li class="dropdown"><a href="/media/media-informasi/"><span>Media Informasi</span> <i
                            class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="/under-Maintenance">Majalah</a></li>
                        <li><a href="/under-Maintenance">Leaflet dan Brosur</a></li>
                        <li><a href="#">Infografis</a></li>
                    </ul>
                <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="/under-Maintenance">Foto</a></li>
                        <li><a href="https://www.youtube.com/@bbwsserayuopak7569">Video</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

                <li class="dropdown"><a href="#"><span>PPID BBWS SO</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="/layanan/ppid-bbws-so/profil">Profil</a></li>
                        <li><a href="/layanan/ppid-bbws-so/prosedur_pelayanan">Prosedur Pelayanan</a></li>
                        <li><a href="/kalatirta-so">KALATIRTA</a></li>
                    </ul>
                </li>
                <li><a href="#">Perpustakaan Online</a></li>
                <li class="dropdown"><a href="#"><span>Pengaduan</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="/under-Maintenance">Pengaduan Balai</a></li>
                        <li><a href="/under-Maintenance">Pengaduan PUPR</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <div class="input-group">
            <input type="text" class="form-control" name="keyword" id="s"
                style="width: 200px; height:30px ; font-size: .8rem" placeholder="Cari..." required=""
                aria-label="cari..." data-uw-rm-form="fx">
            </span>
        </div>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>


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
