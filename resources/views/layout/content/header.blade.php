 <!-- ======= Header ======= -->
 <div class="sub-header">
     <div class="container">
         <div class="row">
             <div class="col-lg-8 col-sm-8">
                 <div class="left-content">
                     <h6>{{ \Carbon\Carbon::now()->isoFormat('D MMMM Y') }} |
                         {{ \Carbon\Carbon::now(new DateTimeZone('Asia/Jakarta'))->format('H:i:s') }} WIB
                     </h6>
                 </div>
             </div>
             <div class="col-lg-4 col-sm-4">
                 <div class="right-icons">
                     <ul>
                         <li><a href="https://www.facebook.com/serayuopak/"><img src="images\icon\facebook.svg"
                                     alt=""></a></li>
                         <li><a href="https://www.instagram.com/pupr_sda_serayuopak/?hl=id"><img
                                     src="images\icon\instagram.svg" alt=""></a></li>
                         <li><a href="https://twitter.com/pupr_sda_so?lang=id"><img src="images\icon\twitter.svg"
                                     alt=""></a></li>
                         <li><a href="https://www.youtube.com/channel/UClOhOH8Ixk2dcIAS9jr2aqg"><img
                                     src="images\icon\youtube.svg" alt=""></a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
     <div class="container d-flex align-items-center justify-content-between">

         <div class="logo">
             {{-- <h1><a href="index.html">Selecao</a></h1> --}}
             <img src="{{ asset('images\logo\logo.svg') }}" style="width: 200px" alt="Logo">
             <!-- Uncomment below if you prefer to use an image logo -->
             <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
         </div>

         <nav id="navbar" class="navbar">
             <ul>
                 <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                 <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                         <li><a href="#">Fungsi dan Tugas</a></li>
                         <li><a href="#">Struktur Organisasi</a></li>
                         <li><a href="#">Visi dan Misi</a></li>
                     </ul>
                 </li>
                 <li class="dropdown"><a href="#"><span>Informasi Publik</span> <i
                             class="bi bi-chevron-down"></i></a>
                     <ul>
                         <li><a href="#">Profil PPID BBWS Serayu Opak</a></li>
                         <li><a href="#">Daftar Informasi Publik</a></li>
                         {{-- <li><a href="#">Visi dan Misi</a></li> --}}
                     </ul>
                 </li>
                 <li class="dropdown"><a href="#"><span>Publikasi</span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                         <li><a href="#">Perencanaan</a></li>
                         <li class="dropdown"><a href="#"><span>Kinerja</span> <i
                                     class="bi bi-chevron-right"></i></a>
                             <ul>
                                 <li><a href="#">Lakip</a></li>
                             </ul>
                         </li>
                         <li class="dropdown"><a href="#"><span>Aplikasi</span> <i
                                     class="bi bi-chevron-right"></i></a>
                             <ul>
                                 <li><a href="#">POSDA</a></li>
                                 <li><a href="#">Hidrologi</a></li>
                             </ul>
                         </li>
                         <li class="dropdown"><a href="#"><span>Galeri</span> <i
                                     class="bi bi-chevron-right"></i></a>
                             <ul>
                                 <li><a href="#">Foto</a></li>
                                 <li><a href="#">Video</a></li>
                             </ul>
                         </li>

                     </ul>
                 </li>
                 <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                         <li><a href="#">Kalatirta</a></li>
                         <li><a href="#">Perpustakaan</a></li>
                         <li class="dropdown"><a href="#"><span>Pengaduan</span> <i
                                     class="bi bi-chevron-right"></i></a>
                             <ul>
                                 <li><a href="#">Pengaduan BBWS Serayu Opak</a></li>
                                 <li><a href="#">Pengaduan PUPR</a></li>
                                 <li><a href="#">Lapor</a></li>
                             </ul>
                         </li>
                     </ul>
                 </li>
                 <div class="input-group">
                     <input type="text" class="form-control" name="keyword" id="s" style="width: 200px; height:30px ;" placeholder="Cari..."
                         required="" aria-label="cari..." data-uw-rm-form="fx">
                     </span>
                 </div>
             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->

     </div>
 </header><!-- End Header -->


 <script>
     // Ambil elemen yang akan diubah margin atasnya
     var scrollBox = document.getElementById('header');

     // Tambahkan event listener untuk mengamati peristiwa scroll
     window.addEventListener('scroll', function() {
         // Tentukan margin atas yang akan diubah (misalnya 20px)
         var newMarginTop = 0;

         // Cek posisi scroll
         if (window.scrollY > 100) { // Ubah 100 menjadi posisi scroll yang sesuai
             // Terapkan margin atas baru
             scrollBox.style.marginTop = newMarginTop + 'px';
             scrollBox.style.header.headerTransparent = rgb(0, 255, 255);;
         } else {
             // Kembalikan margin atas ke nilai awal
             scrollBox.style.marginTop = '40px';
         }
     });
 </script>
