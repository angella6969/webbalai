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
                        <li><a href="https://www.facebook.com/serayuopak/"><img
                                    src="{{url()->to('/') }}/images/icon/facebook.svg" alt=""></a></li>
                        <li><a href="https://www.instagram.com/pupr_sda_serayuopak/?hl=id"><img
                                    src="{{url()->to('/') }}/images/icon/instagram.svg" alt=""></a></li>
                        <li><a href="https://twitter.com/pupr_sda_so?lang=id"><img
                                    src="{{url()->to('/') }}/images/icon/twitter.svg" alt=""></a></li>
                        <li><a href="https://www.youtube.com/channel/UClOhOH8Ixk2dcIAS9jr2aqg"><img
                                    src="{{url()->to('/') }}/images/icon/youtube.svg" alt=""></a></li>

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
            <img src="{{ url()->to('/') }}/images/logo/cropped-logo-dark.png.png" style="width: 350px" alt="Logo">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>



        @include('layout.content.navbar')
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
         if (window.scrollY > 50) { // Ubah 100 menjadi posisi scroll yang sesuai
             // Terapkan margin atas baru
             scrollBox.style.marginTop = newMarginTop + 'px';
         } else {
             // Kembalikan margin atas ke nilai awal
             scrollBox.style.marginTop = '40px';
         }
     });
</script>