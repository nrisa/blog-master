@extends('layouts.app')

@section('app')
<div class="container mb-3">
  <h1 class="text-center my-3 fw-light">Halaman Berita Terkini</h1>
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      @foreach($banners as $banner)
        <div class="carousel-item @if($loop->first) active @endif">
            <div class="bg-secondary w-100 d-flex justify-content-center align-items-center overflow-hidden banner rounded mt-3">
              <img src="{{ asset('storage/' . $banner->source) }}" alt="Banner Image" width="100%" class="rounded">
            </div>
        </div>
      @endforeach   
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
      @foreach($updates as $update)
        <li class="list-group-item">{{ Str::limit($update->judul, 10) }}</li>
      @endforeach
      </ul>
    </div>
    <div class="col-md-9">
      <h3 class="mb-3">Berita Terkini</h3>
      @foreach($contents as $content)
      <div class="card mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-md-9">
              <h1 class="card-title fw-light">{{ Str::limit($content->judul, 10) }}</h1>
              <small class="text-muted">{{ $content->hari }}, {{ $content->created_at->format('d-m-Y') }} | {{ $content->jam }}</small><br>
              <p class="card-text w-75">{{ Str::limit($content->isi, 20) }}</p>
              <a href="{{ url('/detail', $content->id) }}" class="btn btn-outline-primary">Baca Selengkapnya...</a>
            </div>
            <div class="col-md-3">
              <div class="bg-secondary w-100 d-flex justify-content-center rounded align-items-center overflow-hidden" style="height: 140px">
                <img src="{{ asset('storage/' . $content->foto) }}" class="card-img-top" alt="{{ $content->title }}">
              </div>
            </div>
          </div>
        </div>  
      </div>
      @endforeach
    </div>
  </div>    
</div>
<div class="w-100 text-center d-flex align-items-center justify-content-center bg-primary py-3">
    <p class="text-white cs-reset">&copy; Copyright 2024</p>
</div>
@endsection