<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perpus App | {{ $title }}</title>

    <!-- CSS -->
    <link href="{{ URL::to('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <!-- JS -->
    <script src="{{ URL::to('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::to('js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ URL::to('js/scripts.js') }}"></script>


</head>

<body class="container py-5">
    <div class="row mb-5">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('book*') ? 'active' : '' }}" aria-current="page" href="/">Buku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('category*') ? 'active' : '' }}" href="/category">Kategori</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('author*') ? 'active' : '' }}" href="/author">Penulis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('publisher*') ? 'active' : '' }}" href="/publisher">Penerbit</a>
            </li>
        </ul>
    </div>

    <div class="row mb-5">
        <div class="col-12">
            @yield('content')
        </div>
    </div>
    

</body>

</html>