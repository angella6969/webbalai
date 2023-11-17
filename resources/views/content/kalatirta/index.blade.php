<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KALATIRTA - Layanan Terpadu BBWS SO</title>
    {{-- <link rel="stylesheet" href="{!! asset('/css/style.css') !!}"> --}}
    <link rel="stylesheet" href="{{ asset('kalatirta\css\style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets\css\style.css') }}"> --}}
    <link rel="shortcut icon" type="image/png" href="{{ asset('kalatirta\images\Kal-logo2.png') }}" />
</head>

<body>
    <!-- ==ICON== -->
    <!-- ==main== -->
    <svg style="display:none;">
        <symbol id="rekomtek" viewBox="0 0 24 24">
            <path
                d="m23.395,11.231c-.571-.767-1.441-1.213-2.395-1.23v-1.5c0-3.033-2.468-5.5-5.5-5.5h-4.056c-.077,0-.155-.018-.224-.053l-3.155-1.578c-.483-.241-1.024-.369-1.565-.369h-2C2.019,1,0,3.019,0,5.5v12c0,3.033,2.468,5.5,5.5,5.5h11.558c2.447,0,4.565-1.575,5.269-3.919l1.544-5.147c.28-.935.106-1.919-.476-2.702Zm-18.528,1.789l-1.784,5.119c-.054-.204-.082-.418-.082-.638v-9.5h14.95c.033.162.05.329.05.5v1.5h-8.885c-1.913,0-3.62,1.213-4.249,3.02Zm14.587,5.199c-.32,1.066-1.282,1.782-2.396,1.782H5.61l2.089-5.994c.209-.602.778-1.006,1.416-1.006h11.882l-1.544,5.218Z">
            </path>
        </symbol>
        <symbol id="data" viewBox="0 0 24 24">
            <path
                d="M22.5,19H15.149A3.509,3.509,0,0,0,13.5,17.351V14h7.654A1.847,1.847,0,0,0,23,12.154V11a2,2,0,0,0-2-2V4.5A4.505,4.505,0,0,0,16.5,0h-9A4.505,4.505,0,0,0,3,4.5V9a2,2,0,0,0-2,2v1.154A1.847,1.847,0,0,0,2.846,14H10.5v3.351A3.509,3.509,0,0,0,8.851,19H1.5a1.5,1.5,0,0,0,0,3H8.851a3.479,3.479,0,0,0,6.3,0H22.5a1.5,1.5,0,0,0,0-3ZM8.934,9.678l-.329-.356A1,1,0,0,0,7.87,9H6V4.5A1.5,1.5,0,0,1,7.5,3h9A1.5,1.5,0,0,1,18,4.5V9H16.13a1,1,0,0,0-.735.322l-.329.356a1,1,0,0,1-.735.322H9.669A1,1,0,0,1,8.934,9.678Z">
            </path>
        </symbol>
        <symbol id="pustaka" viewBox="0 0 24 24">
            <path
                d="M22.974,4.025c-.335-.335-.727-.592-1.153-.765-.264-.927-.815-1.75-1.611-2.351-1.138-.859-2.578-1.127-3.946-.735l-2.915,.833c-.5,.143-.956,.382-1.349,.693-.393-.311-.848-.55-1.349-.693L7.736,.175c-1.372-.391-2.809-.124-3.946,.735-.796,.6-1.347,1.424-1.611,2.351-.426,.173-.818,.43-1.153,.765-.662,.661-1.026,1.54-1.026,2.475v10.263c0,2.442,1.64,4.617,3.989,5.289l5.676,1.622c1.528,.437,3.143,.437,4.67,0l5.676-1.622c2.349-.671,3.989-2.846,3.989-5.289V6.5c0-.935-.364-1.814-1.026-2.475Zm-9.474,.76c0-.412,.277-.779,.673-.893l2.915-.833c.451-.13,.936-.043,1.315,.245,.379,.286,.597,.723,.597,1.198v12.087c0,.666-.447,1.259-1.088,1.442l-4.412,1.261V4.785Zm-8.5-.283c0-.475,.217-.912,.597-1.198,.38-.287,.864-.374,1.315-.245l2.915,.833c.396,.113,.673,.48,.673,.893v14.506l-4.413-1.261c-.64-.183-1.087-.776-1.087-1.442V4.502Z">
            </path>
        </symbol>
        <symbol id="survei" viewBox="0 0 24 24">
            <path
                d="M14.5,11c.829,0,1.5,.671,1.5,1.5s-.671,1.5-1.5,1.5H7.5c-.829,0-1.5-.671-1.5-1.5s.671-1.5,1.5-1.5h7Zm-5,5h-2c-.829,0-1.5,.671-1.5,1.5s.671,1.5,1.5,1.5h2c.829,0,1.5-.671,1.5-1.5s-.671-1.5-1.5-1.5Zm-1,5h-3c-1.378,0-2.5-1.122-2.5-2.5V9H22.5c.829,0,1.5-.671,1.5-1.5,0-3.033-2.467-5.5-5.5-5.5h-.5v-.5c0-.829-.671-1.5-1.5-1.5s-1.5,.671-1.5,1.5v.5h-6v-.5c0-.829-.671-1.5-1.5-1.5s-1.5,.671-1.5,1.5v.5h-.5C2.467,2,0,4.467,0,7.5v11c0,3.033,2.467,5.5,5.5,5.5h3c.829,0,1.5-.671,1.5-1.5s-.671-1.5-1.5-1.5Zm4.769-1.519c-.813,.813-1.269,1.915-1.269,3.064v.955c0,.276,.224,.5,.5,.5h.955c1.149,0,2.252-.457,3.064-1.269l6.715-6.715c.85-.85,1.013-2.236,.252-3.167-.875-1.07-2.456-1.129-3.409-.176l-6.808,6.808Z">
            </path>
        </symbol>
        <!-- ==social== -->
        <symbol id="facebook" width="16" height="16" viewBox="0 0 16 16">
            <a xlink:href="https://www.facebook.com/serayuopak">
                <path fill="#ffffff"
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                </path>
        </symbol>
        <symbol id="instagram" width="16" height="16" viewBox="0 0 16 16">
            <a xlink:href="https://www.instagram.com/pupr_sda_serayuopak/">
                <path fill="#ffffff"
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                </path>
        </symbol>
        <symbol id="twitterx" width="16" height="16" viewBox="0 0 16 16">
            <a xlink:href="https://twitter.com/pupr_sda_so/">
                <path fill="#ffffff"
                    d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z">
                </path>
        </symbol>
        <symbol id="youtube" width="16" height="16" viewBox="0 0 16 16">
            <a xlink:href="https://www.youtube.com/@bbwsserayuopak7569">
                <path fill="#ffffff"
                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z">
                </path>
        </symbol>
        <symbol id="tiktok" width="16" height="16" viewBox="0 0 16 16">
            <a xlink:href="https://www.tiktok.com/@pupr_sda_serayuopak">
                <path fill="#ffffff"
                    d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z">
                </path>
        </symbol>
        <!-- ==contact== -->
        <symbol id="address" xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
            viewBox="-10 -5 37 28">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
        </symbol>
        <symbol id="email" xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
            viewBox="-10 -5 37 28">
            <path
                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z">
            </path>
        </symbol>
        <symbol id="phone" xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
            viewBox="-10 -5 37 28">
            <path
                d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z" />
        </symbol>
        <!-- top -->
        <symbol id="top" viewBox="0 0 24 24">
            <path
                d="M5,24H19a5.006,5.006,0,0,0,5-5V5a5.006,5.006,0,0,0-5-5H5A5.006,5.006,0,0,0,0,5V19A5.006,5.006,0,0,0,5,24ZM6.293,9.465,9.879,5.879h0a3,3,0,0,1,4.243,0l3.585,3.586.024.025a1,1,0,1,1-1.438,1.389L13,7.586,13.007,18a1,1,0,0,1-2,0L11,7.587,7.707,10.879A1,1,0,1,1,6.293,9.465Z">
            </path>
        </symbol>
        <!-- nav toggle -->
        <symbol id="navToggle" viewBox="0 0 24 24">
            <rect y="11" width="24" height="2" rx="1"></rect>
            <rect y="4" width="24" height="2" rx="1"></rect>
            <rect y="18" width="24" height="2" rx="1"></rect>
        </symbol>
    </svg>

    <!-- ==HEADER== -->
    <section id="topbar">
        <div class="container section-info time">
            <span id="time"></span>
        </div>
        <div class="container section-info social-links">
            <svg class="icon">
                <use xlink:href="#facebook"></use>
            </svg>
            <svg class="icon">
                <use xlink:href="#instagram"></use>
            </svg>
            <svg class="icon">
                <use xlink:href="#twitterx"></use>
            </svg>
            <svg class="icon">
                <use xlink:href="#youtube"></use>
            </svg>
            <svg class="icon">
                <use xlink:href="#tiktok"></use>
            </svg>
        </div>
    </section>
    {{-- <header id="header">
        <div class="container section-row">
            <a href="#"><img src="{{ asset('kalatirta') }}/images/kal-logo1.png" alt=""></a>
            <div class="navbar">
                <ul>
                    <li>
                        <a href="{{ url('index') }}" class="nav-link active">Beranda</a>
                    </li>
                    <li class="dropdown">
                        <a href="#internal" class="nav-link">Informasi&nbsp;></a>
                        <ul>
                            <li><a href="#p">Daftar Informasi Publik</a></li>
                            <li><a href="#prosedur">Prosedur Layanan</a></li>
                            <li><a href="#">Pengajuan Keberatan</a></li>
                            <li><a href="#">Survei Kepuasan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#tentang" class="nav-link">Tentang</a>
                    </li>
                    <li>
                        <a href="#kontak" class="nav-link">Kontak</a>
                    </li>
                </ul>
            </div>
            <svg class="navToggle">
                <use xlink:href="#navToggle"></use>
            </svg>
        </div>
    </header> --}}
@include('content.kalatirta.layout.navbar')

    <!-- ==HERO== -->
    <section id="hero">
        <div class="container animated fadeIn">
            <div class="hero-content section-row">
                <div class="section-title">
                    <h2>Selamat datang di KALATIRTA</h2>
                    <h3>Portal Layanan Publik Terpadu BBWS Serayu Opak</h3>
                    <a href="#layanan" class="btn-to-main">Akses Layanan</a>
                </div>
                <div class="img-fluid">
                    <img src="{{ asset('kalatirta') }}/images/kal-logo3.png" class="animated-pic" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- ==MAIN MENU== -->
    <main id="main">
        <section id="tentang" class="section-content section-bg">
            <div class="container animated fadeIn">
                <div style="height: 50px;"></div>
                <div class="section-title">
                    <span>Kalatirta</span>
                    <h2><strong>Kalatirta</strong></h2>
                </div>
                <div class="section-row clearfix">
                    <div class="section-cap">"Kanal Layanan Terpadu: Permohonan Rekomendasi Teknis, Permohonan
                        Informasi dan Data, serta Pustaka Online BBWS Serayu Opak"
                        <p class="section-info"><strong>KALATIRTA</strong> merupakan media yang menjadi kolom/wadah
                            untuk pelayanan terpadu
                            terkait Rekomtek (permohonan Rekomendasi Teknis), Pustaka (perpustakaan)
                            serta layanan informasi & data (PPID) di BBWS Serayu Opak.
                        </p>
                        <p class="section-info">Melalui “Kalatirta” diharapkan pelayanan publik di BBWS Serayu Opak
                            dapat terdokumentasi dengan baik serta berjalan semakin efektif dan efisien.
                        </p>
                    </div>
                    <div class="section-info">
                        <h3>Filosofi dan Makna</h3>
                        <p>&nbsp</p>
                        <p><strong>Kata</strong></p>
                        <p>Adapun secara harfiah Kalatirta berarti "zaman air" (Bahasa Sansekerta).</p>
                        <p>&nbsp</p>
                        <p><strong>Simbol</strong></p>
                        <p>“Tetes Air” menjadi identitas BBWS Serayu Opak yang lingkup kerjanya menangani bidang Sumber
                            Daya Air (SDA).</p>
                        <p>&nbsp</p>
                        <p><strong>Warna</strong></p>
                        <p>warna yang digunakan merupakan familia warna biru yakni tosca, biru, ungu. Perpaduan ini
                            bermakna bahwa “Kalatirta” adalah wadah yang menyatukan berbagai pelayanan publik menjadi
                            terpadu dan harmoni.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="prosedur" class="section-content section-bg">
            <div class="container animated fadeIn">
                <div class="section-title">
                    <span>Prosedur</span>
                    <h2><strong>Prosedur</strong></h2>
                </div>
                <div class="section-cap">"Tata Cara Penggunaan Kalatirta"</div>
                <div class="section-row clearfix">
                    <img src="{{ asset('kalatirta') }}/images/sop-kalatirta.jpg" class="animated fadeIn"
                        alt="" width="200">
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/YSJTEl0VIcQ?si=6rwzkCPLpDJK9Cj2"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <section id="layanan" class="section-content">
            <div class="container animated fadeIn">
                <div class="section-title">
                    <span>Layanan</span>
                    <h2><strong>Layanan</strong></h2>
                </div>
                <div class="section-cap">"Layanan Terpadu BBWS Serayu Opak"</div>
                <div class="section-info clearfix">
                    <p>Layanan ini meliputi
                        Permohonan <strong>Rekomendasi Teknis</strong> secara online,
                        Permohonan <strong>Informasi dan Data</strong>,
                        Layanan <strong>Pustaka Online</strong> sebagai portal Perpustakaan BBWS Serayu Opak,
                        serta <strong>Survei Kepuasan</strong> atas Pelayanan Publik melalui Kalatirta.
                    </p>
                </div>
                <div class="icon-box clearfix"> 
                    <div class="col icon-box">
                        <a href="https://airbbwsso.net/">
                            <svg class="icon">
                                <use xlink:href="#rekomtek"></use>
                            </svg>
                        </a>
                        <h4>REKOMENDASI TEKNIS</h4>
                        <p>Permohonan Rekomendasi Teknis</p>
                    </div>
                    <div class="col icon-box">
                        <a href="kalatirta-so/form-permohonan-data">
                            <svg class="icon">
                                <use xlink:href="#data"></use>
                            </svg>
                        </a>
                        <h4>INFORMASI DAN DATA</h4>
                        <p>Permohonan Informasi dan Data</p>
                    </div>
                    <div class="col icon-box">
                        <a href="http://202.169.239.20/perpustakaanso/">
                            <svg class="icon">
                                <use xlink:href="#pustaka"></use>
                            </svg>
                        </a>
                        <h4>PERPUSTAKAAN ONLINE</h4>
                        <p>Publikasi Buku Koleksi BBWS Serayu Opak</p>
                    </div>
                    <div class="col icon-box">
                        <a href="#">
                            <svg class="icon">
                                <use xlink:href="#survei"></use>
                            </svg>
                        </a>
                        <h4>SURVEI KEPUASAN</h4>
                        <p>Kepuasan terhadap Layanan Publik Terpadu</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="kontak" class="section-content section-bg">
            <div class="container animated fadeIn">
                <div class="section-title">
                    <span>Kontak</span>
                    <h2><strong>Kontak</strong></h2>
                </div>
                <div class="info">
                    <div class="section-row">
                        <svg class="icon">
                            <use xlink:href="#address"></use>
                        </svg>
                        <div class="address">
                            <h4>Balai Besar Wilayah Sungai Serayu Opak</h4>
                            <p>Jl. Solo Km 6, Ngentak, Caturtunggal, Depok, Kab. Sleman,</p>
                            <p>Prov. Daerah Istimewa Yogyakarta 55281</p>
                        </div>
                    </div>
                    <div class="section-row">
                        <svg class="icon">
                            <use xlink:href="#email"></use>
                        </svg>
                        <div class="email">
                            <h4>Email</h4>
                            <p>Permohonan informasi & Data: <em>ppidsoy@gmail.com</em> atau <em>ppid_bbwso@pu.go.id</em>
                            </p>
                            <p>Persuratan: <em>so.umum@yahoo.co.id</em> </p>
                        </div>
                    </div>
                    <div class="section-row">
                        <svg class="icon">
                            <use xlink:href="#phone"></use>
                        </svg>
                        <div class="phone">
                            <h4>Telepon & Faximile</h4>
                            <p>Telp: (0274) 489-172</p>
                            <p>Fax: (0274) 489-552</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ==FOOTER== -->
    <footer id="footer">
        <div class="container footer-content">
            <div class="copyright">
                <p>Kalatirta &copy; 2023. BBWS Serayu Opak, Ditjen Sumber Daya Air - Kementerian PUPR.</p>
            </div>
        </div>
    </footer>

    <!-- ==BACK TO TOP=== -->
    <a href="#" class="scroll-top">
        <svg class="icon">
            <use xlink:href="#top"></use>
        </svg>
    </a>

    <!-- ==PRELOAD== -->
    <div id="preloader"></div>

    <!-- ==SCRIPT== -->
    {{-- <script src="{{asset('/js/main.js')}}"></script> --}}
    <script src="{{ asset('kalatirta\js\main.js') }}"></script>


</body>

</html>
