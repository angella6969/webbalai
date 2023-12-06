<div class="col-lg-4">
    <div class="sidebar">

        {{--  --}}

        <h3 style="color: var(--bs-bg-text)" class="sidebar-title d-flex justify-content-center">Filter Berita</h3>
        <div class="card">
            <div class="card-body">
                <form action="/beritas">
                    <div class="form-row">
                        <div class="row">
                            <div class="form-group col">
                                <div class="custom-select-1">
                                    <select class="form-control bg-light-5 text-color-dark border-0" name="bulan"
                                        aria-label="Choose a country" required="">
                                        <option value="" selected="" disabled="">Pilih Bulan</option>
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col">
                                <div class="custom-select-1">
                                    <select class="form-control bg-light-5 text-color-dark border-0" name="tahun"
                                        aria-label="Choose a country" required="">
                                        <option value="" selected="" disabled="">Tahun</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-row text-center">
                        <div class="col mt-3">
                            <button class="btn btn-primary btn-rounded " type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{--  --}}


        <h3 style="color: var(--bs-bg-text); margin-top:20px;" class="sidebar-title">Berita Terbaru</h3>
        @foreach ($beritas as $berita)
            <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                    <a href="beritas/{{ $berita->slug }}"><img
                            style="border-radius: 15px 2px 15px 2px; border-bottom:3px solid #fbb717 !important;"
                            src="{{ asset('storage/' . substr($berita->url_foto, 6)) }}" alt=""></a>
                    <h4><a style="color: var(--bs-bg-text)" href="beritas/{{ $berita->slug }}">{{ $berita->judul }}</a>
                    </h4>
                    <time datetime="2020-01-01"><i class="bi bi-clock"></i>
                        {{ Carbon\Carbon::createFromTimeString($berita->created_at)->format('d F Y') }}</time>
                </div>
            </div>
        @endforeach
    </div>
</div>
