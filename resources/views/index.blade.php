@extends('layouts.app')

@section('app')
<div class="container mb-3">
  <h1 class="text-center my-3 fw-light">Selamat Datang Di Blog Kami</h1>
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <div class="bg-secondary w-100 d-flex justify-content-center align-items-center overflow-hidden banner rounded mt-3">
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
</div>
<!-- Sambutan -->
<div class="mt-5 bg-primary-subtle position-relative">
    <i class="fa-solid fa-quote-right d-block text-primary quote"></i>
    <i class="fa-solid fa-quote-left d-block text-primary quote-2"></i>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/person.png') }}" class="w-100">
            </div>
            <div class="col-md-8 d-flex justify-content-center align-items-center">
                <div>
                    <h1 class="fw-light">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit, nesciunt?  
                    </h1>    
                    <h3 class="fw-light">- Person -</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container py-5 mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h3><i class="fa-solid fa-newspaper"></i> Berita Terbaru</h3>
        <a href="/blog" class="btn btn-outline-primary">Lihat semua</a>
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
    <h3 class="mb-3"><i class="fa-solid fa-images me-2"></i> Gallery Foto</h3>
    
    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img
            src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dGVhbSUyMHdvcmt8ZW58MHx8MHx8fDA%3D"
            class="w-100 shadow-1-strong rounded mb-4"
            alt="Boat on Calm Water"
            />

            <img
            src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
            class="w-100 shadow-1-strong rounded mb-4"
            alt="Wintry Mountain Landscape"
            />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <img
            src="https://images.unsplash.com/photo-1521898284481-a5ec348cb555?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="w-100 shadow-1-strong rounded mb-4"
            alt="Mountains in the Clouds"
            />

            <img
            src="https://plus.unsplash.com/premium_photo-1663134377392-50c34664d632?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="w-100 shadow-1-strong rounded mb-4"
            alt="Boat on Calm Water"
            />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <img
            src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
            class="w-100 shadow-1-strong rounded mb-4"
            alt="Waves at Sea"
            />

            <img
            src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
            class="w-100 shadow-1-strong rounded mb-4"
            alt="Yosemite National Park"
            />
        </div>
    </div>
    
    <!-- <div class="gg-container">
        <div class="gg-box">
        </div>
    </div> -->
</div>
<div class="w-100 text-center d-flex align-items-center justify-content-center bg-primary py-3">
    <p class="text-white cs-reset">&copy; Copyright 2024</p>
</div>
@endsection