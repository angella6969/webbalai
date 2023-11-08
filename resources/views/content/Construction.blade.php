@extends('layout.content.main')
@section('container')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .maintenance-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px;
            background-color: #ffffff;
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

    <div class="maintenance-container" style="text-align: center;">
        <h1>Website Dalam Perbaikan</h1>
        <p>Kami saat ini sedang melakukan perbaikan pada situs web kami untuk memberikan pengalaman yang lebih baik. Silakan
            cek kembali nanti.</p>
    </div>
@endsection
