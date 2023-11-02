 <!-- ======= Footer ======= -->

 <footer id="footer">
     <div class="container">
         <div class="row">
             <div class="col-4">
                 <h1>Kontak Kami</h1>
                 <h5>Balai Besar Wilayah Sungai Serayu Opak</h5>
                 <h5>Jl. Solo Km. 6, Ngentak, Caturtunggal, Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281
                 </h5>
                 <h5>Telepon & Fax
                     Telp: (0274) 489-172
                     Fax: (0274) 489-552</h5>
                 <h5>Email
                     ppid_bbwsso@pu.go.id: (Permintaan Informasi/data)
                     so.umum@yahoo.co.id: (Persuratan)</h5>
             </div>
             <div class="col-4">
                 <h1>Informasi Publik</h1>
                 <h5>Layanan Publik BBWS SO</h5>
                 <h5>Renstra BBBWS Serayu Opak</h5>
                 <h5>JDIH PUPR</h5>
                 <h5>Pola WS</h5>
                 <h5>E-PPID PUPR</h5>
                 <h5>Knowledge Management</h5>
             </div>
             <div class="col-4">
                 <h1>Statistik Pengunjung</h1>
                 <h5>Pengunjung Online : 1 orang</h5>
                 <h5>Pengunjung Hari ini : 1 orang</h5>
                 <h5>Pengunjung Bulan Ini : 1 orang</h5>
                 <h5>Total Pengunjung : 1 orang</h5>
             </div>

         </div>
         <div class="row">
             <div class="mobil"
                 style=" 
            width: 100px;
            height: 100px;
            background-image: url('../images/truck-1.png');
            background-size: contain;
            background-repeat: no-repeat;
            position: absolute;
            /* margin-top: 0px; */
            z-index:999;">
             </div>
             <div class="mobil"
                 style=" 
            width: 100px;
            height: 100px;
            background-image: url('../images/truck-2.png');
            background-size: contain;
            background-repeat: no-repeat;
            position: absolute;
            /* padding-bottom: 20px; */
            z-index:999;">
             </div>
         </div>
     </div>



     </div>
 </footer><!-- End Footer -->

 <div class="copyright d-flex justify-content-center footer2">
     Hak Cipta &copy; 2023 Sisda Balai Besar Wilayah Sungai Serayu Opak | Ditjen
     Sumber
     Daya Air | Kementerian PUPR. All Rights Reserved
 </div>
 <div class="footer2">
     <div class=" d-flex justify-content-center">
         <a style="margin: 20px;" href="https://www.facebook.com/serayuopak/"><img src="images\icon\facebook.svg" alt=""></a>

         <a style="margin: 20px;" href="https://www.instagram.com/pupr_sda_serayuopak/?hl=id"><img src="images\icon\instagram.svg"
                 alt=""></a></li>
         <a style="margin: 20px;" href="https://twitter.com/pupr_sda_so?lang=id"><img src="images\icon\twitter.svg" alt=""></a>

         <a style="margin: 20px;" href="https://www.youtube.com/channel/UClOhOH8Ixk2dcIAS9jr2aqg"><img src="images\icon\youtube.svg"
                 alt=""></a></li>
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
