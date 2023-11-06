@extends('layout.content.main')
@section('container')
    <section class="" data-plugin-image-background="" data-plugin-options=""
        style="background-color:rgba(3,15,107,0.2) ;background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container"><br>
            <div class="row align-items-center ">
                <div class="col-md-8 text-left">
                    <span class="tob-sub-title text-color-light d-block">PROFIL</span>
                    <h1 class="font-weight-bold text-color-light">Visi dan Misi</h1>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb justify-content-start text-color-light justify-content-md-end">
                        <li><a class="text-color-light" href="/">Beranda</a> / <a href=""
                                class="active">Profil</a></li>
                        {{-- <li class="active"> Profil</li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-height-3">
        <div class="container">
            <div class="row">
                <!-- sidebar -->
                <aside class="sidebar col-md-4 col-lg-4 order-2">
                    <div class="accordion accordion-default accordion-toggle accordion-style-1 mb-5" data-plugin-sticky=""
                        data-plugin-options="{'offset_top': 100}" role="tablist" style="">
                        <div class="card">
                            <div id="toggleCategories" class="accordion-body collapse show"
                                data-uw-rm-sr-aria-labelledby="categories">
                                <div class="card-body">
                                    <ul class="list list-unstyled">


                                        <li class="mb-2"><a href="#" class="font-weight-semibold"
                                                aria-label="Open this option" data-uw-rm-empty-ctrl=""><i
                                                    class="fas  ml-1 mr-1 pr-2"></i></a></li>



                                        <li class="mb-2">
                                            <a href="#" class="font-weight-semibold text-color-primary"><i
                                                    class="fas fa-angle-right ml-1 mr-1 pr-2" id="photos"
                                                    data-toggle="collapse" data-target="#submenuPhotos0"
                                                    aria-expanded="true" aria-controls="submenuPhotos" role="list"
                                                    onclick="return false;" data-uw-rm-kbnav="click"></i> Profil</a>
                                            <ul class="list list list-style-1 collapse show pl-3 mt-2" id="submenuPhotos0"
                                                aria-labelledby="photos">



                                                <li><a href="https://pu.go.id/page/Visi-dan-Misi" target="_self">Visi dan
                                                        Misi</a></li>
                                                <li><a href="#" target="_self">Sejarah</a></li>

                                                <ul class="list list list-style-1 collapse show pl-3 mt-2"
                                                    id="submenuPhotos0" aria-labelledby="photos">
                                                    <li><a href="https://pu.go.id/page/Peristiwa-Heroik-3-Des"
                                                            target="_self">Peristiwa Heroik 3 Desember</a></li>
                                                    <li><a href="https://pu.go.id/page/Dari-Masa-ke-Masa"
                                                            target="_self">Dari Masa ke Masa</a></li>
                                                    <li><a href="https://pu.go.id/page/Mereka-yang-Gugur"
                                                            target="_self">Mereka yang Gugur</a></li>
                                                    <li><a href="https://pu.go.id/page/Kantor-PUPR" target="_self">Kantor
                                                            PUPR</a></li>
                                                    <li><a href="https://pu.go.id/page/Mars-PUPR" target="_self">Mars
                                                            PUPR</a></li>
                                                    <li><a href="https://pu.go.id/assets/media/sejarah_perkembangan_pekerjaan_umum_indonesia.pdf"
                                                            target="_self" data-uw-pdf-br="1" data-uw-pdf-doc=""> Sejarah
                                                            Perkembangan Pekerjaan Umum di Indonesia</a></li>
                                                </ul>



                                                <li><a href="https://pu.go.id/page/Tugas-dan-Fungsi" target="_self">Tugas
                                                        dan Fungsi</a></li>




                                                <li><a href="https://pu.go.id/page/Struktur-Organisasi"
                                                        target="_self">Struktur Organisasi</a></li>




                                                <li><a href="https://pu.go.id/page/Motto-dan-Lambang" target="_self">Motto
                                                        dan Lambang</a></li>




                                                <li><a href="#" target="_self">Informasi Pejabat</a></li>

                                                <ul class="list list list-style-1 collapse show pl-3 mt-2"
                                                    id="submenuPhotos0" aria-labelledby="photos">
                                                    <li><a href="https://pu.go.id/profile-pejabat" target="_self">Profil
                                                            Pejabat</a></li>
                                                    <li><a href="https://pu.go.id/page/Perjanjian-Kerja"
                                                            target="_self">Perjanjian Kerja</a></li>
                                                </ul>
                                            </ul>

                                        </li>


                                        <li class="mb-2">
                                            <a href="#" class="font-weight-semibold text-color-primary"><i
                                                    class="fas fa-angle-right ml-1 mr-1 pr-2" id="photos"
                                                    data-toggle="collapse" data-target="#submenuPhotos1"
                                                    aria-expanded="true" aria-controls="submenuPhotos" role="list"
                                                    onclick="return false;" data-uw-rm-kbnav="click"></i> Organisasi</a>
                                            <ul class="list list list-style-1 collapse show pl-3 mt-2" id="submenuPhotos1"
                                                aria-labelledby="photos">



                                                <li><a href="https://pu.go.id/struktur-organisasi/sekretariat-jenderal"
                                                        target="_self">Sekretariat Jenderal</a></li>




                                                <li><a href="https://pu.go.id/struktur-organisasi/inspektorat-jenderal"
                                                        target="_self">Inspektorat Jenderal</a></li>




                                                <li><a href="https://pu.go.id/struktur-organisasi/direktorat-jenderal-sumber-daya-air"
                                                        target="_self">Ditjen Sumber Daya Air</a></li>




                                                <li><a href="https://pu.go.id/struktur-organisasi/direktorat-jenderal-bina-marga"
                                                        target="_self">Ditjen Bina Marga</a></li>




                                                <li><a href="https://pu.go.id/struktur-organisasi/direktorat-jenderal-cipta-karya"
                                                        target="_self">Ditjen Cipta Karya</a></li>




                                                <li><a href="https://pu.go.id/struktur-organisasi/direktorat-jenderal-perumahan"
                                                        target="_self">Ditjen Perumahan</a></li>




                                                <li><a href="https://pu.go.id/struktur-organisasi/direktorat-jenderal-bina-konstruksi"
                                                        target="_self">Ditjen Bina Konstruksi</a></li>




                                                <li><a href="https://pu.go.id/struktur-organisasi/direktorat-jenderal-pembiayaan-infrastruktur-pekerjaan-umum-dan-perumahan"
                                                        target="_self">Ditjen Pembiayaan Infrastruktur Pekerjaan Umum dan
                                                        Perumahan</a></li>




                                                <li><a href="https://pu.go.id/struktur-organisasi/badan-pengembangan-infrastruktur-wilayah"
                                                        target="_self">Badan Pengembangan Infrastruktur Wilayah</a></li>




                                                <li><a href="https://pu.go.id/struktur-organisasi/badan-pengembangan-sumber-daya-manusia"
                                                        target="_self">Badan Pengembangan Sumber Daya Manusia</a></li>




                                                <li><a href="https://pu.go.id/struktur-organisasi/badan-pengatur-jalan-tol"
                                                        target="_self">Badan Pengatur Jalan Tol</a></li>

                                            </ul>

                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header accordion-header" role="tab" id="popularPosts">
                                <h3 class="text-3 mb-0 text-color-primary" data-uw-rm-heading="level" role="heading"
                                    aria-level="2"><a href="#" data-toggle="collapse"
                                        data-target="#togglePopularPosts" aria-expanded="false"
                                        aria-controls="togglePopularPosts">Berita Terkini</a></h3>
                            </div>
                            <div id="togglePopularPosts" class="accordion-body collapse show"
                                aria-labelledby="popularPosts">
                                <div class="card-body">
                                    <article class="row align-items-center mb-3">
                                        <div class="col-4 pr-0">
                                            <a href="https://pu.go.id/berita/28-Lulusan-Pelatihan-Diharapkan-Berperan-Dalam-Proses-Sertifikasi-Kinerja-Bangunan-Gedung-Hijau-(BGH)"
                                                aria-label="pu.go.id" data-uw-rm-empty-ctrl=""><img
                                                    src="https://pu.go.id/" class="img-fluid hover-effect-2"
                                                    alt="" data-uw-rm-alt-original="" role="presentation"
                                                    data-uw-rm-alt="SRC"></a>
                                        </div>
                                        <div class="col-8">
                                            <h4 class="text-2 mb-0 text-color-primary" data-uw-rm-heading="level"
                                                role="heading" aria-level="3"><a
                                                    href="https://pu.go.id/berita/28-Lulusan-Pelatihan-Diharapkan-Berperan-Dalam-Proses-Sertifikasi-Kinerja-Bangunan-Gedung-Hijau-(BGH)"
                                                    class="text-1">28 Lulusan Pelatihan Diharapkan Berperan Dalam Proses
                                                    Sertifikasi Kinerja Bangunan Gedung Hijau (BGH)</a></h4>
                                        </div>
                                    </article>
                                    <article class="row align-items-center mb-3">
                                        <div class="col-4 pr-0">
                                            <a href="https://pu.go.id/berita/Menuju-Construction-4.0,-BPSDM-Selenggarakan-Pelatihan-Building-Information-Modelling-(BIM)"
                                                aria-label="pu.go.id" data-uw-rm-empty-ctrl=""><img
                                                    src="https://pu.go.id/" class="img-fluid hover-effect-2"
                                                    alt="" data-uw-rm-alt-original="" role="presentation"
                                                    data-uw-rm-alt="SRC"></a>
                                        </div>
                                        <div class="col-8">
                                            <h4 class="text-2 mb-0 text-color-primary"><a
                                                    href="https://pu.go.id/berita/Menuju-Construction-4.0,-BPSDM-Selenggarakan-Pelatihan-Building-Information-Modelling-(BIM)"
                                                    class="text-1">Menuju Construction 4.0, BPSDM Selenggarakan Pelatihan
                                                    Building Information Modelling (BIM)</a></h4>
                                        </div>
                                    </article>
                                    <article class="row align-items-center mb-3">
                                        <div class="col-4 pr-0">
                                            <a href="https://pu.go.id/berita/BPSDM-Mendukung-WMO-Selenggarakan-Short-Course-Hydrological-Network-To-Support-Water-Resources-Management"
                                                aria-label="pu.go.id" data-uw-rm-empty-ctrl=""><img
                                                    src="https://pu.go.id/" class="img-fluid hover-effect-2"
                                                    alt="" data-uw-rm-alt-original="" role="presentation"
                                                    data-uw-rm-alt="SRC"></a>
                                        </div>
                                        <div class="col-8">
                                            <h4 class="text-2 mb-0 text-color-primary"><a
                                                    href="https://pu.go.id/berita/BPSDM-Mendukung-WMO-Selenggarakan-Short-Course-Hydrological-Network-To-Support-Water-Resources-Management"
                                                    class="text-1">BPSDM Mendukung WMO Selenggarakan Short Course
                                                    Hydrological Network To Support Water Resources Management </a></h4>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- sidebar -->

                <!-- main content-->
                <div class="col-md-8 col-lg-8 order-1 mb-5 mb-md-0">
                    <article class="blog-post mb-4">
                        <header class="blog-post-header mt-3 mb-3">

                        </header>
                        <header class="blog-post-header mt-3 mb-3" style="position: relative; overflow: hidden;">
                            <h1 class="font-weight-bold text-color-primary mb-3"
                                style="line-height: 1.2; margin-right: 0px; margin-left: 0px;" role="heading"
                                aria-level="2" data-uw-rm-heading="level">Visi dan Misi</h1>
                            <h4 class="text-center mt-5 mb-5"
                                style="line-height: 1.2; margin-right: 0px; margin-left: 0px;" data-uw-rm-heading="level"
                                role="heading" aria-level="3">Sebagaimana ditetapkan pada Peraturan Menteri PUPR Nomor
                                23/PRT/M/2020 tentang Rencana Strategis Kementerian PUPR 2020-2024, visi Kementerian
                                Pekerjaan Umum dan Perumahan Rakyat (PUPR) adalah sebagai berikut:</h4>
                        </header>
                        <h2 class="text-center mb-4 mt-4" style="line-height: 1.2; margin-right: 0px; margin-left: 0px;">
                            <strong>“Kementerian Pekerjaan Umum dan Perumahan Rakyat yang Andal, Responsif, Inovatif dan
                                Profesional dalam Pelayanan Kepada Presiden dan Wakil Presiden untuk Mewujudkan Visi dan
                                Misi Presiden dan Wakil Presiden”</strong>
                        </h2>
                        <p class="mb-4" style="line-height: 1.9; margin-right: 0px; margin-left: 0px;"><span
                                style="font-size: 18px;">Pencapaian visi tersebut dilaksanakan melalui pelaksanaan misi
                                Presiden dan Wakil Presiden,
                                sebagai berikut:</span></p>
                        <h2>Visi</h2>
                        <ol class="mb-3 mt-3" style="font-family: &quot;Open Sans&quot;, sans-serif;">
                            <p>
                                1. Memberikan dukungan teknis dan administratif serta analisis yang cepat, akurat, dan
                                responsif kepada Presiden dan Wakil Presiden dalam pengambilan dan pelaksanaan kebijakan
                                pembangunan serta penyelenggaraan infrastruktur Pekerjaan Umum dan Perumahan Rakyat.
                            </p>

                            <p>
                                2. Memberikan dukungan teknis dan administratif kepada Presiden dalam menyelenggarakan
                                pembangunan infrastruktur sumber daya air, konektivitas, perumahan dan permukiman dalam
                                suatu pengembangan infrastruktur wilayah yang terpadu.
                            </p>

                            <p>
                                3. Menyelenggarakan pelayanan yang efektif dan efisien di bidang tata kelola, perencanaan,
                                pengawasan, informasi, dan hubungan kelembagaan.
                            </p>

                            <p>
                                4. Meningkatkan kualitas sumber daya manusia, penyelenggaraan jasa konstruksi, dan
                                pembiayaan infrastruktur dalam mendukung penyelenggaraan infrastruktur Pekerjaan Umum dan
                                Perumahan Rakyat.
                            </p>

                        </ol>
                        <h2>Misi</h2>
                        <ol class="mb-3 mt-3" style="font-family: &quot;Open Sans&quot;, sans-serif;">
                            <p>Direktorat Jenderal
                                Sumber Daya Air, sebagai bagian Kementerian Pekerjaan Umum dan Perumahan Rakyat mendukung
                                pencapaian visi kementerian melalui pencapaian misi ke-2, yaitu: “Memberikan dukungan teknis
                                dan administratif kepada Presiden dalam menyelenggarakan pembangunan infrastruktur sumber
                                daya air, konektivitas, perumahan dan permukiman dalam suatu pengembangan infrastruktur
                                wilayah yang terpadu.”</p>
                        </ol>
                        <h2>Tujuan</h2>
                        <ol class="mb-3 mt-3" style="font-family: &quot;Open Sans&quot;, sans-serif;">
                            <p>Guna mendukung pencapaian visi dan misi, tujuan Kementerian PUPR 2020-2024 diformulasikan
                                sebagai berikut:</span><br /><span style="color: #000000;">1. Peningkatan ketersediaan dan
                                    kemudahan akses serta efisiensi pemanfaatan air untuk memenuhi kebutuhan domestik,
                                    peningkatan produktivitas pertanian, pengembangan energi, industri dan sektor ekonomi
                                    unggulan, serta konservasi dan pengurangan risiko/kerentanan bencana
                                    alam.</span><br /><span style="color: #000000;">2. Peningkatan kelancaran konektivitas
                                    dan akses jalan yang lebih merata bagi peningkatan pelayanan sistem logistik nasional
                                    yang lebih efisien dan penguatan daya saing.</span><br /><span
                                    style="color: #000000;">3. Peningkatan pemenuhan kebutuhan perumahan dan infrastruktur
                                    permukiman yang layak dan aman menuju terwujudnya smart living, dengan pemanfaatan dan
                                    pengelolaan yang partisipatif untuk meningkatkan kualitas hidup
                                    masyarakat.</span><br /><span style="color: #000000;">4. Peningkatan pembinaan SDM
                                    untuk pemenuhan kebutuhan SDM Vokasional bidang konstruksi yang kompeten dan
                                    profesional.</span><br /><span style="color: #000000;">5. Peningkatan penyelenggaraan
                                    pembangunan infrastruktur yang efektif, bersih dan</span><br /><span
                                    style="color: #000000;">terpercaya yang didukung oleh SDM Aparatur yang berkinerja
                                    tinggi.</span></p>
                            <hr />
                            <p style="text-align: left;"><span style="color: #000000;">Untuk mewujudkan visi, misi, tujuan
                                    dan sasaran strategis Kementerian PUPR tahun 2020-2024, Direktorat Jenderal Sumber Daya
                                    Air menjabarkan visi Kementerian PUPR tersebut ke dalam tujuan dan sasaran program dan
                                    kegiatan sesuai dengan peran, tugas dan fungsinya sebagaimana diatur oleh peraturan
                                    perundang-undangan. Penjabaran visi dan misi tersebut juga mempertimbangkan pencapaian
                                    pembangunan terkait bidang Sumber Daya Air 2015-2019, potensi dan permasalahan,
                                    tantangan utama pembangunan yang dihadapi lima tahun ke depan serta sasaran utama dan
                                    arah kebijakan pembangunan nasional dalam RPJMN tahun 2020-2024.</span></p>
                            <hr />
                            <p style="text-align: left;"><span style="color: #000000;">Tujuan Direktorat Jenderal Sumber
                                    Daya Air 2020-2024 sebagai berikut:</span><br /><span style="color: #000000;">1.Tujuan
                                    1: Menyelenggarakan pembangunan infrastruktur sumber daya air untuk mendukung pencapaian
                                    target infrastruktur pelayanan dasar dalam rangka memperkuat ketahanan ekonomi untuk
                                    pertumbuhan yang berkualitas.</span><br /><span style="color: #000000;">2.Tujuan 2:
                                    Menyelenggarakan tata kelola pengelolaan SDA yang terpadu dan berkelanjutan untuk
                                    pengelolaan air tanah dan air baku berkelanjutan, infrastruktur ketahanan bencana, serta
                                    waduk multiguna dan modernisasi irigasi, dalam rangka penyediaan infrastruktur pelayanan
                                    dasar.</span><br /><span style="color: #000000;">3.Tujuan 3: Menyelenggarakan tata
                                    kelola sumber daya organisasi Direktorat Jenderal SDA yang meliputi: sumber daya
                                    manusia, sarana prasarana pendukung, pengendalian dan pengawasan, serta sumber daya yang
                                    lainnya untuk meningkatkan kehandalan infrastruktur pekerjaan umum dan perumahan rakyat
                                    bidang sumber daya air yang efektif, efiesien, transparan dan akuntabel.</span></p>
                            </p>
                        </ol>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
