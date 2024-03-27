@extends('layout.content.main')
@section('container')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<style>
    .pading-1 {
        padding-left: 20px;
    }

    .pading-2 {
        padding-left: 30px;
    }

    .pading-3 {
        padding-left: 40px;
    }
</style>
<x-h_content judul="Sejarah" posisi1="" posisi2="" link="/balai/bbwsserayuopak/"> </x-h_content>

<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:30px">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptas veniam saepe aperiam
                commodi eaque inventore laudantium similique neque dignissimos? Dolorem aperiam iure enim atque facere
                ipsam cumque quod qui.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptas veniam saepe aperiam
                commodi eaque inventore laudantium similique neque dignissimos? Dolorem aperiam iure enim atque facere
                ipsam cumque quod qui.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptas veniam saepe aperiam
                commodi eaque inventore laudantium similique neque dignissimos? Dolorem aperiam iure enim atque facere
                ipsam cumque quod qui.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptas veniam saepe aperiam
                commodi eaque inventore laudantium similique neque dignissimos? Dolorem aperiam iure enim atque facere
                ipsam cumque quod qui.
            </p>
        </div>
        <div class="d-flex justfy-content-center">
            <div>
                <img class="img-fluid"
                    src="{{ asset('storage\images\foto-beranda\9zJY0ufe9eYaAazHOYURI8rebPM08t7CSate3rxA.jpg') }}"
                    alt="">
                <img class="img-fluid"
                    src="{{ asset('storage\images\foto-beranda\9zJY0ufe9eYaAazHOYURI8rebPM08t7CSate3rxA.jpg') }}"
                    alt="">
            </div>
        </div>
    </div>
</div>
@endsection