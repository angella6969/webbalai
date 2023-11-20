 <!-- ======= Footer ======= -->
 <style>
     .table-striped th,
     .table-striped td {
         width: 33.33%;
     }

     .table-striped {
         background-color: rgba(10, 10, 10, 0) !important;
         padding: 16px 16px;
         background-color: var(--bs-table-bg);
         border-bottom-width: var(--bs-border-width);
         -webkit-box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
         box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
     }
 </style>
 <footer id="footer">
     <div class="container">
         <div class="row">
             <div class="col-lg-4">
                 <h2 class="text-3 mb-3" style=" color:rgb(255, 255, 255); font-size: 18px;">
                     Kontak Kami</h2>
                 <div class="mb-3">
                     <p class="mb-1" style="color: white; font-size: 14px;">
                         <b>Balai Besar Wilayah Sungai Serayu Opak</b><br role="presentation" data-uw-rm-sr="">
                     </p>
                     <p style="color: white; font-size: 14px;">
                         Jl. Solo Km. 6, Ngentak, Caturtunggal, Sleman,
                         Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281
                     </p>
                     <a href="#" aria-label="call +62217228497" style="color: white; font-size: 14px;"
                         uw-rm-vague-link-id="tel:+62217228497$call +62217228497" data-uw-rm-vglnk="">
                         Telp: (0274) 489-172 <br>Fax: (0274) 489-552</a><br role="presentation" data-uw-rm-sr="">
                     <a href="mailto:ppid_bbwsso@pu.go.id" style="color: white; font-size: 14px;"
                         aria-label="send an email to ppid_bbwsso@pu.go.id"
                         uw-rm-vague-link-id="mailto:ppid_bbwsso@pu.go.id$send an email to ppid_bbwsso@pu.go.id"
                         data-uw-rm-vglnk="">ppid_bbwsso@pu.go.id: (Permintaan Informasi/data)</a><br
                         role="presentation" data-uw-rm-sr="">
                     <a href="mailto:so.umum@yahoo.co.id" style="color: white; font-size: 14px;"
                         aria-label="send an email to so.umum@yahoo.co.id"
                         uw-rm-vague-link-id="mailto:so.umum@yahoo.co.id$send an email to so.umum@yahoo.co.id"
                         data-uw-rm-vglnk="">so.umum@yahoo.co.id: (Persuratan)</a><br role="presentation"
                         data-uw-rm-sr="">
                     <p></p>
                     {{-- <p class="mb-1" style="color: white; font-size: 14px;">
                       Anda juga dapat menghubungi kami dengan <a href="#"
                           style="text-decoration: underline;">klik link ini</a>
                   </p> --}}
                 </div>
             </div>
             <div class="col-lg-4 mb-4 mb-lg-0">
                 <h2 class="text-3 mb-3" style="font-size: 18px;">Tautan</h2>
                 <ul class="">
                     <li class="mb-2"><i data-feather="chevron-right"></i><a style="color: white; font-size: 14px;"
                             href="/profil/main-map">Sitemap</a></li>
                     <li class="mb-2"><i data-feather="chevron-right"></i><a style="color: white; font-size: 14px;"
                             href="#">Layanan Publik
                             BBWS
                             SO</a></li>
                     <li class="mb-2"><i data-feather="chevron-right"></i><a style="color: white; font-size: 14px;"
                             href="https://airbbwsso.net/" target="_blank">AiR (Rekomtek BBWS SO) </a></li>
                     {{-- <li class="mb-2"><i data-feather="chevron-right"></i><a style="color: white; font-size: 14px;"
                             href="">Renstra BBBWS
                             Serayu Opak </a></li> --}}
                     <li class="mb-2"><i data-feather="chevron-right"></i><a style="color: white; font-size: 14px;"
                             href="https://sahabat.pu.go.id/eppid/" target="_blank">E-PPID PUPR </a>
                     </li>
                     <li class="mb-2"><i data-feather="chevron-right"></i><a style="color: white; font-size: 14px;"
                             href="https://jdih.pu.go.id/" target="_blank">JDIH PUPR </a>
                     </li>
                     {{-- <li class="mb-2"><i data-feather="chevron-right"></i><a style="color: white; font-size: 14px;"
                             href="#">Pola WS </a></li> --}}
                     <li class="mb-2"><i data-feather="chevron-right"></i><a style="color: white; font-size: 14px;"
                             href="https://simantu.pu.go.id/login.php" target="_blank">Knowledge
                             Management </a></li>
                 </ul>
             </div>

             <div class="col-lg-4 mb-4 mb-lg-0 ">
                 <h2 class="text-3 mb-3" style="font-size: 18px;">Statistik Pengunjung</h2>
                 <ul class="" style="padding-left: .5rem; font-size: 14px;">
                     {{-- <li class="mb-2"><a style="color: white; " href="#">Pengunjung Online --}}
                     {{-- <li class="mb-2"><a style="color: white; " href="#">Pengunjung Online
                             : orang</a></li> --}}
                     <li class="mb-2"><a style="color: white; " href="">Pengunjung Hari
                             ini : {{ $dailyVisitorCount }}</a></li>
                     <li class="mb-2"><a style="color: white; " href="#">Pengunjung Minggu
                             Ini : {{ $weeklyVisitorCount }} </a>
                     </li>
                     <li class="mb-2"><a style="color: white; " href="#">Pengunjung Bulan Ini :
                             {{ $monthlyVisitorCount }}</a></li>
                     <li class="mb-2"><a style="color: white; " href="#">Pengunjung Tahun Ini :
                             {{ $yearlyVisitorCount }}</a></li>
                 </ul>
             </div>

         </div>
     </div>
     <div class="container">
         <div class="row">
             <div class="mobil"
                 style="  
            width: 100px;
            height: 100px;
            background-image: url('/images/truck-1.png');
            background-size: contain;
            background-repeat: no-repeat;
            position: absolute;
            z-index:999;">
             </div>
             <div class="mobil"
                 style=" 
            width: 100px;
            height: 100px;
            background-image: url('/images/truck-2.png');
            background-size: contain;
            background-repeat: no-repeat;
            position: absolute;
            z-index:999;">
             </div>
         </div>
     </div>


 </footer><!-- End Footer -->

 <div class="copyright d-flex justify-content-center footer2">
     Hak Cipta &copy; 2023 Sisda Balai Besar Wilayah Sungai Serayu Opak | Ditjen
     Sumber
     Daya Air | Kementerian PUPR. All Rights Reserved
 </div>
 <div class="footer2 social-links">
     <div class=" d-flex justify-content-center">
         <a style="margin:20px; font-size: 24px;" href="https://twitter.com/pupr_sda_so?lang=id" class="twitter"><i
                 class="bx bxl-twitter"></i></a>
         <a style="margin:20px; font-size: 24px;" href="https://www.facebook.com/serayuopak/" class="facebook"><i
                 class="bx bxl-facebook"></i></a>
         <a style="margin:20px; font-size: 24px;" href="https://www.instagram.com/pupr_sda_serayuopak/?hl=id"
             class="instagram"><i class="bx bxl-instagram"></i></a>
         <a style="margin:20px; font-size: 24px;" href="https://www.youtube.com/channel/UClOhOH8Ixk2dcIAS9jr2aqg"
             class="google-plus"><i class="bx bxl-youtube"></i></a>
     </div>
 </div>


 <script>
     //  var mobil1 = document.querySelectorAll('.mobil')[0];
     var mobil2 = document.querySelectorAll('.mobil')[1];
     var mobil3 = document.querySelectorAll('.mobil')[0];
     //  var posisi1 = 0;
     var posisi2 = window.innerWidth - 100; // Mengatur posisi awal elemen kedua
     var posisi3 = window.innerWidth - 100; // Mengatur posisi awal elemen kedua
     //  var kecepatan1 = 6;
     var kecepatan2 = 2;
     var kecepatan3 = 1;
     //  var arah1 = 1;
     var arah2 = -1; // Arah elemen kedua berlawanan dengan elemen pertama
     var arah3 = -1; // Arah elemen kedua berlawanan dengan elemen pertama

     function animasi() {
         //  posisi1 += kecepatan1 * arah1;
         posisi2 += kecepatan2 * arah2;
         posisi3 += kecepatan3 * arah3;
         //  mobil1.style.left = posisi1 + "px";
         mobil2.style.left = posisi2 + "px";
         mobil3.style.left = posisi3 + "px";

         // Memantulkan elemen pertama saat mencapai batas tertentu
         //  if (posisi1 >= window.innerWidth - mobil1.offsetWidth || posisi1 <= 0) {
         //      arah1 = -arah1;
         //      mobil1.style.transform = 'scaleX(' + -arah1 + ')';
         //  }

         // Memantulkan elemen kedua saat mencapai batas tertentu
         if (posisi2 >= window.innerWidth - mobil2.offsetWidth || posisi2 <= 0) {
             arah2 = -arah2;
             mobil2.style.transform = 'scaleX(' + -arah2 + ')';
         }

         if (posisi3 >= window.innerWidth - mobil3.offsetWidth || posisi3 <= 0) {
             arah3 = -arah3;
             mobil3.style.transform = 'scaleX(' + -arah3 + ')';
         }

         requestAnimationFrame(animasi);
     }

     animasi();
 </script>
