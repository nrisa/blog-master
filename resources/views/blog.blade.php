@extends('layouts.app')

@section('app')
<div class="container mb-3">
  <h1 class="text-center my-3 fw-light">Halaman Berita Terkini</h1>
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
<div class="container py-5 mt-5">
  <div class="row">
    <div class="col-md-3">
      <h3>Berita Terpopuler</h3>
      <ul class="list-group mt-3">
        <li class="list-group-item">An item</li>
        <li class="list-group-item">A second item</li>
        <li class="list-group-item">A third item</li>
        <li class="list-group-item">A fourth item</li>
        <li class="list-group-item">And a fifth one</li>
      </ul>
    </div>
    <div class="col-md-9">
      <h3 class="mb-3">Berita Terkini</h3>
      <div class="card mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-md-9">
              <h1 class="card-title fw-light">Card title Lorem</h1>
              <small class="text-muted">senin, 19 januari 2024 | 12:00</small><br>
              <p class="card-text w-75">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-outline-primary">Baca Selengkapnya...</a>
            </div>
            <div class="col-md-3">
              <div class="bg-secondary w-100 d-flex justify-content-center rounded align-items-center overflow-hidden h-100">
                
              </div>
            </div>
          </div>
        </div>
  
      </div>
      <div class="card mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-md-9">
              <h1 class="card-title fw-light">Card title Lorem</h1>
              <small class="text-muted">senin, 19 januari 2024 | 12:00</small><br>
              <p class="card-text w-75">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-outline-primary">Baca Selengkapnya...</a>
            </div>
            <div class="col-md-3">
              <div class="bg-secondary w-100 d-flex justify-content-center rounded align-items-center overflow-hidden h-100">
                
              </div>
            </div>
          </div>
        </div>
  
      </div>
      <div class="card mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-md-9">
              <h1 class="card-title fw-light">Card title Lorem</h1>
              <small class="text-muted">senin, 19 januari 2024 | 12:00</small><br>
              <p class="card-text w-75">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-outline-primary">Baca Selengkapnya...</a>
            </div>
            <div class="col-md-3">
              <div class="bg-secondary w-100 d-flex justify-content-center rounded align-items-center overflow-hidden h-100">
                
              </div>
            </div>
          </div>
        </div>
  
      </div>
    </div>
  </div>    
</div>
<div class="w-100 text-center d-flex align-items-center justify-content-center bg-primary py-3">
    <p class="text-white cs-reset">&copy; Copyright 2024</p>
</div>
@endsection