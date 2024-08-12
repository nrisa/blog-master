@extends('layouts.app')

@section('app')
<div class="container mb-3">
  <h1 class="text-center my-3 fw-light">Selamat Datang Di Blog Kami</h1>
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
        @foreach($contents as $content)
            <div class="col-md-4 mb-3">
                <div class="bg-white shadow rounded card">
                    <div class="bg-secondary w-100 d-flex justify-content-center rounded align-items-center overflow-hidden blog">
                        <img src="{{ asset('storage/' . $content->foto) }}" class="card-img-top" alt="{{ $content->title }}">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">{{ Str::limit($content->judul, 10) }}</h3>
                        <small class="text-muted">{{ $content->created_at->format('d-m-Y') }}</small>
                        <!-- <p class="card-text mt-2">{!! Str::limit($content->isi, 24) !!}</p> -->
                        <br>
                        <br>   
                        <a href="{{ url('/detail', $content->slug) }}" class="btn btn-outline-primary">Lihat Detail <i class="ms-2 fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="mt-5 bg-primary-subtle">
    <div class="container py-5">
        <h3 class="text-primary mb-4">
            <i class="fa-solid fa-video me-2"></i>Gallery Video
        </h3>
        <div class="row mb-3">
            @foreach($videos as $video)
                <div class="col-md-4">
                    <iframe width="100%" height="220" src="{{ $video->source }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            @endforeach
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
    <div class="d-flex gap-3 flex-wrap">
        @foreach($galleries as $gallery)
            <div class="rounded overflow-hidden d-flex justify-content-center align-items-center" style="width: 300px;height: 360px">
                <img
                src="{{ asset('storage/' . $gallery->source) }}"
                class="shadow-1-strong rounded mb-4"
                alt="{{ $gallery->title }}" width="200%">
            </div>
        @endforeach
    </div>
</div>
<div class="w-100 text-center d-flex align-items-center justify-content-center bg-primary py-3">
    <p class="text-white cs-reset">&copy; Copyright 2024</p>
</div>
@endsection
