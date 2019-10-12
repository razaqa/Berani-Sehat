<!DOCTYPE html>
<html lang="id" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="description" content="Berani Sehat Website Media Aesculapius BEM IKM FKUI, Gedung C Lantai 4, Rumpun Ilmu Kesehatan, Universitas Indonesia Depok">

        <title>Berani Sehat | @yield('title')</title>

        <link rel="stylesheet" href="{{ asset('lib/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @yield('extra-fonts')
        @yield('prerender-js')
        @yield('extra-css')
    </head>
    <body>
        @include('layout/_nav')
        @yield('content')
        @include('layout/_footer')
        <script src="{{ asset('lib/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('lib/popper.min.js') }}"></script>
        <script src="{{ asset('lib/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('extra-js')
    </body>
</html>