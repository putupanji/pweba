<!DOCTYPE html>
<html lang="en">

<head>
    {{-- file template itu selalu dinamis --}}
    {{-- @yield() kesempatan untuk mengedit --}}
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">502621170 Panji Wiradharma</a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Link 1</a> <!-- Link Tugas -->
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/keranjangbelanjaIndex">Link 2</a> <!-- Link UAS -->
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    DATABASE
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/pegawai">Pegawai</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="container">

        <!-- bagian konten blog -->
        @yield('konten')

        @include('footer') <!-- bisa bagi tugas dengan ini -->

    </div>

</body>

</html>
