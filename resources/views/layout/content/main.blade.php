<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Balai Besar Wilayah Sungai Serayu Opak - DIrektorat Jendral Sumber Daya Air</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="shortcut icon" type="image/png" href="{{ asset('src') }}/assets/images/logos/favicon.png" />

    @include('layout.content.link')

</head>

<body class="main-content">

    @include('layout.content.header')
    <main id="main">

        <div style="margin-top: 60px"> @yield('container')</div>

    </main>
    @include('layout.content.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('layout.content.script')

</body>

</html>
