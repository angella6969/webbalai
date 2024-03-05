<div class="col-lg-4">
    <div class="sidebar">
        <h3 style="color: var(--bs-bg-text); margin-top:20px;" class="sidebar-title">Berita Terbaru</h3>
        @foreach ($beritas as $berita)
            <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                    <a href="/balai/bbwsserayuopak/beritas/{{ $berita->slug }}"><img
                            style="border-radius: 15px 2px 15px 2px; border-bottom:3px solid #fbb717 !important;"
                            src="{{ asset('storage/' . substr($berita->url_foto, 6)) }}" alt=""></a>
                    <h4><a style="color: var(--bs-bg-text)" href="//balai/bbwsserayuopak/beritas/{{ $berita->slug }}">{{ $berita->judul }}</a>
                    </h4>
                    <time datetime="2020-01-01"><i class="bi bi-clock"></i>
                        {{ Carbon\Carbon::createFromTimeString($berita->created_at)->format('d F Y') }}</time>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>