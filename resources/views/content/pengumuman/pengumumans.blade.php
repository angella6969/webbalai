@extends('layout.content.main')
@section('container')
    {{-- Header Content --}}
    <x-h_content judul="Pengumuman" posisi1="Beranda" posisi2="Pengumuman" />
    {{-- End Header Content --}}

    <!-- ======= Blog Section ======= -->
    <section id="Pengumuman" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries">
                    @foreach ($pengumumans as $pengumuman)
                        <article class="entry" style="margin-bottom: 5px !important; padding-bottom: 5px !important;">
                            <div>
                                <table class="table table-responsive">
                                    <td>{{ $pengumuman->judul }}</td>
                                    @if ($pengumuman->url_pengumuman)
                                        <td><a
                                                href="{{ asset('storage/' . substr($pengumuman->url_pengumuman, 6)) }}">Unduh</a>
                                        </td>
                                    @else
                                        <td style="display: none;"></td>
                                    @endif
                                </table>
                            </div>
                            <p style="font-size: 10px"> <i class="bi bi-clock"></i>
                                {{ Carbon\Carbon::createFromTimeString($pengumuman->created_at)->format('d F Y') }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
            {{ $pengumumans->links() }}

        </div>
    </section><!-- End Blog Section -->
@endsection
