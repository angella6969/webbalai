@extends('layout.content.main')
@section('container')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .halaman-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
            margin-bottom: 60px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rGBUrM2P5RA5Y1woiQOfG5xFVoJG3p5FzDrEJusZrAAXg8r+YtST5CyuUSM0a7fT" crossorigin="anonymous">

    <div class="halaman-container" style="text-align: center;">
        <img class="img-fluid" src="{{ asset('images/404.png') }}" alt="">
        <h1>TIDAK KETEMU !</h1>
        <p>Halaman yang Anda cari sudah dipindah atau sedang tidak available</p>
        <a href="/"> MONGGO KEMBALI KE BERANDA</a>
    </div>
@endsection
