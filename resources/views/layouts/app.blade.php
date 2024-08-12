<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog | Indonesia</title>

        <link rel="icon" href="https://www.kominfo.go.id/favicon/favicon.ico">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="{{ asset('css/grid-gallery.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.6.0/pagination.css" integrity="sha512-TH+vnrhByFI2RzNvaHSqt6EwoJ9Bp+yGAGTWp84qTuTx315ebnypxtyGHpli55Rm4N4J+N/0W9xAL2b5RZ2ZSA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="antialiased bg-light">       
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container py-2">
                <a class="navbar-brand" href="/">
                    <img src="https://www.kominfo.go.id/favicon/favicon.ico" alt="kominfo" class="me-2" height="35px">
                    Berita Terkini
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/pegawai">Pegawai</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/blog">blog</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">                        
                        @foreach($categories as $category)
                        <li><a class="dropdown-item" href="/blog/{{ $category->categori }}">
                                {{ $category->categori }}
                        </a></li>
                        @endforeach 
                    </ul>
                    </li>
                </ul>
                </div>
            </div>
        </nav> 
        <nav class="py-2 bg-primary">
            <div class="container">                
                @foreach($categories as $category)
                    <small class="me-2 text-white">
                    <a class="text-white" style="text-decoration: none" href="/blog/{{ $category->categori }}">
                        {{ $category->categori }}
                    </a>
                    </small>
                @endforeach
            </div>
        </nav>
        <div id="app">
            @yield('app')
        </div>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset('js/grid-gallery.min.js') }}"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.6.0/pagination.min.js" integrity="sha512-GzbaI5EsNzdEUq6/2XLYpr1y9CUZRIVsUeWTAFgULtQa5jZ3Nug8i0nZKM6jp9NffBCZhymPPQFcF0DK+JkRpw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>
