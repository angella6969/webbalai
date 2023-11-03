@extends('layout.content.main')
@section('container')
    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Berita Terbaru</h2>

                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Berita</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries">
                    @foreach ($beritas as $berita)
                        <article class="entry">
                            <div class="entry-img d-flex justify-content-center">
                                <img src=" {{ asset($berita->url_foto) }}" alt=""
                                    style="height: 300px; border-radius: 10px" class="card-img-top hover-effect-2">
                            </div>


                            <label for="">
                                <h6> <i class="bi bi-clock"></i> {{ $berita->tanggal }}</h6>
                            </label>
                            <h2 class="entry-title">
                                <a href="beritas/{{ $berita->slug }}">{{ $berita->judul }}</a>
                            </h2>

                            {{-- <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="blog-single.html">John Doe</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">Jan 1,
                                                2020</time></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="blog-single.html">12 Comments</a></li>
                                </ul>
                            </div> --}}
                            @php
                                $body = $berita->body;

                                // Menggunakan ekspresi reguler untuk mengambil dua kalimat pertama
                                $pattern = '/^(.*?[.!?])\s+(.*?[.!?])/';
                                if (preg_match($pattern, $body, $matches)) {
                                    $duaKalimatPertama = $matches[1] . ' ' . $matches[2];
                                } else {
                                    $duaKalimatPertama = $body; // Jika judul hanya satu kalimat atau tidak cocok dengan pola ekspresi reguler.
                                }
                            @endphp
                            <div class="entry-content">
                                <p>
                                    {{ $duaKalimatPertama }}
                                </p>
                                <div class="read-more">
                                    <a href="beritas/{{ $berita->slug }}">Read More</a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                    <!-- End blog entry -->
                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">


                        <h3 class="sidebar-title">Berita Terbaru</h3>
                        <div class="sidebar-item recent-posts">
                            <div class="post-item clearfix">
                                <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                                <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a>
                                </h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                                <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                                <h4><a href="blog-single.html">Id quia et et ut maxime similique
                                        occaecati ut</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                                <h4><a href="blog-single.html">Laborum corporis quo dara net para</a>
                                </h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                                <h4><a href="blog-single.html">Et dolores corrupti quae illo quod
                                        dolor</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                        </div><!-- End sidebar recent posts-->



                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Section -->
@endsection
