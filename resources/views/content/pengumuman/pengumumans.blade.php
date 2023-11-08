@extends('layout.content.main')
@section('container')
    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Pengumuman</h2>

                <ol>
                    <li><a style="color: black" href="/">Beranda</a></li>
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
                        <article class="entry" style="margin-bottom: 5px !important; padding-bottom: 5px !important;">
                            <div>
                                <table>
                                    <tr><a href="pengumuman/{{ $pengumuman->slug }}">{{ $pengumuman->judul }}</a></tr>
                                </table>
                            </div>
                            <label for="">
                                <p style="font-size: 10px"> <i class="bi bi-clock"></i> {{ $pengumuman->created_at }}</p>
                            </label>
                        </article>
                    @endforeach
                </div>
            </div>
            {{ $pengumumans->links() }}

        </div>
    </section><!-- End Blog Section -->
@endsection
