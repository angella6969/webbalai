@extends('layout.content.main')
@section('container')
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    @foreach ($beritas as $berita)
                        <article class="entry">
                            <h2 class="entry-title">
                                <a href="{{ route('blog.show', $berita->id) }}">{{ $berita->title }}</a>
                            </h2>
                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time
                                            datetime="{{ $berita->created_at }}">{{ $berita->created_at }}</time></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>{{ $berita->content }}</p>
                                <div class="read-more">
                                    <a href="beritas/blog/ {{ $berita->id }}">Read More</a>
                                </div>
                            </div>
                        </article>
                    @endforeach


                    {{-- <div class="blog-pagination">
                            <ul class="justify-content-center">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul>
                        </div> --}}

                </div><!-- End blog entries list -->

                @include('layout.content.sidebar')

            </div>

        </div>
    </section><!-- End Blog Section -->
@endsection
