@extends('layouts.app')

@section('app')
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="bg-secondary w-100 d-flex justify-content-center align-items-center overflow-hidden banner">
            <!-- <img src="..." class="d-block w-100" alt="..."> -->
        </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container py-5 mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h3><i class="fa-solid fa-newspaper"></i> Berita Terbaru</h3>
        <button class="btn btn-outline-primary">Lihat semua</button>
    </div>
    <div class="row mb-4">
        <div class="col-md">
            <div class="bg-white shadow rounded card">
                <div class="bg-secondary w-100 d-flex justify-content-center rounded align-items-center overflow-hidden blog">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                </div>
                <div class="card-body">
                    <h3 class="card-title">Card title</h3>
                    <small class="text-muted">11-08-2024</small>
                    <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary">Lihat Detail <i class="ms-2 fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="bg-white shadow rounded card">
                <div class="bg-secondary w-100 d-flex justify-content-center rounded align-items-center overflow-hidden blog">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                </div>
                <div class="card-body">
                    <h3 class="card-title">Card title</h3>
                    <small class="text-muted">11-08-2024</small>
                    <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary">Lihat Detail <i class="ms-2 fa-solid fa-arrow-right"></i></a>
                </div>
            </div>        
        </div>
        <div class="col-md">
            <div class="bg-white shadow rounded card">
                <div class="bg-secondary w-100 d-flex justify-content-center rounded align-items-center overflow-hidden blog">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                </div>
                <div class="card-body">
                    <h3 class="card-title">Card title</h3>
                    <small class="text-muted">11-08-2024</small>
                    <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary">Lihat Detail <i class="ms-2 fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="bg-white shadow rounded card">
                <div class="bg-secondary w-100 d-flex justify-content-center rounded align-items-center overflow-hidden blog">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                </div>
                <div class="card-body">
                    <h3 class="card-title">Card title</h3>
                    <small class="text-muted">11-08-2024</small>
                    <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary">Lihat Detail <i class="ms-2 fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="bg-white shadow rounded card">
                <div class="bg-secondary w-100 d-flex justify-content-center rounded align-items-center overflow-hidden blog">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                </div>
                <div class="card-body">
                    <h3 class="card-title">Card title</h3>
                    <small class="text-muted">11-08-2024</small>
                    <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary">Lihat Detail <i class="ms-2 fa-solid fa-arrow-right"></i></a>
                </div>
            </div>        
        </div>
        <div class="col-md">
            <div class="bg-white shadow rounded card">
                <div class="bg-secondary w-100 d-flex justify-content-center rounded align-items-center overflow-hidden blog">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                </div>
                <div class="card-body">
                    <h3 class="card-title">Card title</h3>
                    <small class="text-muted">11-08-2024</small>
                    <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary">Lihat Detail <i class="ms-2 fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-5 bg-primary-subtle">
    <div class="container py-5">
        <h3 class="text-primary mb-4">
            <i class="fa-solid fa-video me-2"></i>Gallery Video
        </h3>
        <div class="row mb-3">
            <div class="col-md">
                <iframe width="100%" height="230" src="https://www.youtube.com/embed/qozARhVmXCI?si=L-7XflvBSc9Lvkvz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-md">
                <iframe width="100%" height="230" src="https://www.youtube.com/embed/V-D3eoBvg_8?si=MpBg8v2ucnJ8gODn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-md">
                <iframe width="100%" height="230" src="https://www.youtube.com/embed/tZr7VWjMFuc?si=ocMVHH-VJ8xPrycA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <a href="#" class="btn btn-primary btn-block">Lihat semua video <i class="ms-2 fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="mt-5 container py-5">
    <h3><i class="fa-solid fa-images me-2"></i> Gallery Foto</h3>
    
    <div class="gg-container">
        <div class="gg-box">
            <img src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dGVhbSUyMHdvcmt8ZW58MHx8MHx8fDA%3D">
            <img src="https://images.unsplash.com/photo-1521898284481-a5ec348cb555?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
            <img src="https://plus.unsplash.com/premium_photo-1663134377392-50c34664d632?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
            <img src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dGVhbSUyMHdvcmt8ZW58MHx8MHx8fDA%3D">
            <img src="https://images.unsplash.com/photo-1521898284481-a5ec348cb555?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
            <img src="https://plus.unsplash.com/premium_photo-1663134377392-50c34664d632?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
            <img src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dGVhbSUyMHdvcmt8ZW58MHx8MHx8fDA%3D">
        </div>
    </div>
</div>
<div class="w-100 text-center bg-primary py-3">
    <p class="text-white">&copy; Copyright 2024</p>
</div>
@endsection