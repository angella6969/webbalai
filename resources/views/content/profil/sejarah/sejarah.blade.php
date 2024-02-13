@extends('layout.content.main')
@section('container')
    <section
        style="background: rgba(3, 15, 107, 0.2); background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container"><br>
            <div class="row align-items-center ">
                <div class="col-md-8 text-left">
                    <span class="tob-sub-title text-color-light d-block">PROFIL</span>
                    <h1 class="font-weight-bold text-color-light">Sejarah</h1>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb justify-content-start text-color-light justify-content-md-end">
                        <li><a class="text-color-light" style="color: black" href="/">Beranda</a> / <a href=""
                                style="color: black" class="active">Profil</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row" style="padding: 20px">
            @foreach ($sejarah as $item)
                <div>
                    {!! $item->body !!}
                </div>
                <div class="d-flex justify-content-center">
                    <img style="max-height: 900px; width: auto" src="{{ asset('storage/' . substr($item->url_foto1, 6)) }}"
                        alt="" class="img-fluid">
                    {{-- <img src="{{ asset('storage/' . substr($item->url_foto2, 6)) }}" alt="" class="img-fluid">
                    <img src="{{ asset('storage/' . substr($item->url_foto3, 6)) }}" alt="" class="img-fluid">
                    <img src="{{ asset('storage/' . substr($item->url_foto4, 6)) }}" alt="" class="img-fluid"> --}}
                </div>
            @endforeach
        </div>
    </div>
@endsection
