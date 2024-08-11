<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin | Blog</title>

        <link rel="icon" href="https://www.kominfo.go.id/favicon/favicon.ico">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="{{ asset('css/grid-gallery.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/default.min.css">
    </head>
    <body class="antialiased bg-light overflow-hidden" style="height: 100dvh;">
        <div class="row h-100 cs-reset">
            <div class="col-md-2 h-100 bg-primary cs-reset py-4 px-3 border-end">
                <div class="container">
                    <h5 class="text-white cs-reset">
                        <!-- <img src="https://survey.kominfo.go.id/img/logo.png" class="me-2" height="35px"> -->
                        Admin Panel
                    </h5>
                    <hr>
                    <br>
                    <ul style="list-style: none;">
                        <!-- <li class="mb-4">
                            <a href="/admin/dashboard" class="text-white" style="text-decoration: none;">
                            <i class="fa-solid fa-gauge me-3"></i>Dashboard
                            </a>
                        </li> -->
                        <li class="mb-4">
                            <span class="text-white" style="text-decoration: none;">
                                <i class="fa-solid fa-newspaper me-3"></i>Content
                            </span>
                            <ul class="mt-4 py-3 rounded" style="list-style: none;background-color: #4490ff;">
                                <li class="mb-3">
                                    <a href="/admin/cms" class="text-white" style="text-decoration: none;">
                                        <i class="fa-solid fa-file-circle-plus me-3"></i>Add Content
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="/admin/cms-list" class="text-white" style="text-decoration: none;">
                                        <i class="fa-solid fa-file-lines me-4"></i>List Content
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="mb-4">
                            <a href="/admin/category" class="text-white" style="text-decoration: none;">
                                <i class="fa-solid fa-list me-3"></i>Category
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="/admin/banner" class="text-white" style="text-decoration: none;">
                            <i class="fa-regular fa-image me-3"></i>Banner 
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="/admin/gallery" class="text-white" style="text-decoration: none;">
                            <i class="fa-regular fa-images me-3"></i>Gallery 
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="/admin/video" class="text-white" style="text-decoration: none;">
                            <i class="fa-solid fa-video me-3"></i>Videos 
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="/admin/user" class="text-white" style="text-decoration: none;">
                                <i class="fa-solid fa-user-group me-3"></i>Users 
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 cs-reset">   
                <nav class="navbar navbar-expand-lg bg-white border-bottom">
                    <div class="container py-2-custom">
                        <h3></h3>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <!-- <li class="nav-item">
                            <span class="nav-link active">Admin <i class="fa-solid fa-user ms-2 me-3"></i></span>
                            </li> -->
                            <li class="nav-item">
                            <a class="btn btn-outline-danger" href="/admin">logout</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav> 
                <div id="admin">
                    @yield('admin')
                </div>
            </div>
        </div>   

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset('js/grid-gallery.min.js') }}"></script>
        <!-- Include the Quill library -->  
        <script src="{{ asset('js/datatables.js') }}"></script>

    </body>
</html>
