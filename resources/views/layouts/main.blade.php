<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')POLIBAN</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Light Able admin and dashboard template offer a variety of UI elements and pages, ensuring your admin panel is both fast and effective." />
    <meta name="author" content="phoenixcoded" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ URL::asset('image/poliban.png') }}" type="image/png">

    @yield('css')

    @include('layouts.head-css')

    <style>
        body {
            background-color: #EFCDFF; /* Ubah warna latar belakang body */
            color: #000000; /* Ubah warna teks secara umum */
        }

        .pc-container {
            background-color: #EFCDFF; /* Ubah warna latar belakang kontainer utama */
        }

        .pc-content {
            background-color: #EFCDFF; /* Ubah warna latar belakang konten utama */
            color: #000000; /* Ubah warna teks di konten utama */
        }

        .pc-content h5,
        .pc-content h3,
        .pc-content span {
            color: #000000; /* Ubah warna teks elemen spesifik di konten utama */
        }
    </style>
</head>

<body class="layout-2" data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">

    @include('layouts.loader')
    @include('layouts.sidebar')
    @include('layouts.topbar')

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            @if (View::hasSection('breadcrumb-item'))
                @include('layouts.breadcrumb')
            @endif
            <!-- [ Main Content ] start -->
            @yield('content')
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->

    @include('layouts.footer')
    @include('layouts.customizer')

    @include('layouts.footerjs')
    <script>
        // Mengubah badge menjadi warna gelap
        document.querySelector('.pc-sidebar .m-header .badge').classList.add('bg-dark');
        document.querySelector('.pc-sidebar .m-header .badge').classList.remove('bg-brand-color-2');

        // Mengubah warna sidebar menjadi abu-abu
        document.querySelector('.pc-sidebar').style.backgroundColor = '#DDDDDD';

        // Mengubah warna tulisan di sidebar menjadi hitam
        document.querySelectorAll('.pc-sidebar, .pc-sidebar *').forEach(function(element) {
            element.style.color = '#000000';
        });

        // Mengubah caption layout
        layout_caption_change('false');

        if (document.querySelector('.pc-sidebar .m-header .logo-lg')) {
            // Mengubah logo
            document.querySelector('.pc-sidebar .m-header .logo-lg').setAttribute('src', '/build/images/logo-white.svg');
            // Menambahkan kelas warna brand pada header sidebar
            document.querySelector('.pc-sidebar .m-header').classList.add('bg-brand-color-2');
        }

        // Fungsi untuk mengubah brand color
        function changebrand(temp) {
            removeClassByPrefix(document.querySelector('.pc-sidebar .m-header'), "bg-");
            document.querySelector('.pc-sidebar .m-header').classList.add(temp);
        }
    </script>

    @yield('scripts')

</body>
<!-- [Body] end -->

</html>