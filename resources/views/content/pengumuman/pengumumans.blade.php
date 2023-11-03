@extends('layout.content.main')
@section('container')
    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Pengumuman</h2>

                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Pengumuman</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id="Pengumuman" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries">
                    @foreach ($pengumumans as $pengumuman)
                        <article class="entry">
                            <label for="">
                                <h6> <i class="bi bi-clock"></i> {{ $pengumuman->created_at }}</h6>
                            </label>
                            <div>
                                <table>
                                    <tr><a href="pengumuman/{{ $pengumuman->slug }}">{{ $pengumuman->judul }}</a></tr>
                                </table>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section><!-- End Blog Section -->
@endsection
