@extends('layouts.app')

@section('app')
<div class="container py-5 mt-5">
  <div class="row">
    <div class="col-md-3">
      <h3>Berita Terpopuler</h3>
      <ul class="list-group mt-3">        
        @foreach($updates as $update)
        <li class="list-group-item"><a href="{{ url('/detail', $update->slug) }}">{{ Str::limit($update->judul, 10) }}</a></li>
        @endforeach
      </ul>
      <h3 class="my-3">Rekomendasi Berita</h3>
        
      @foreach($recomends as $recomend)
      <div class="card mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-md-8">
              <h6 class="cs-reset fw-light">{{ Str::limit($recomend->judul, 10) }}</h6>
              <small class="text-muted text-mini">{{ $recomend->hari }}, {{ $recomend->created_at->format('d-m-Y') }} | {{ $recomend->jam }}</small><br>
              <a href="{{ url('/detail', $recomend->slug) }}" class="btn btn-outline-primary text-mini">Baca Selengkapnya...</a>
            </div>
            <div class="col-md-4  ">
              <div class="bg-secondary w-100 d-flex justify-content-center rounded align-items-center overflow-hidden" style="height: 70px">
                <img src="{{ asset('storage/' . $recomend->foto) }}" class="card-img-top h-100" alt="{{ $recomend->title }}">
              </div>
            </div>
          </div>
        </div>  
      </div>
      @endforeach
    </div>
    <div class="col-md-9">
      <h1 class="mb-3 fw-light">{{ $content->judul }}</h1>  
      <small class="mb-3 text-muted d-block">{{ $content->hari }}, {{ $content->created_at->format('d-m-Y') }} | {{ $content->jam }}</small>    
      <div class="mb-3 bg-secondary w-100 d-flex justify-content-center align-items-center overflow-hidden rounded mt-3" style="height: 500px">
        <img src="{{ asset('storage/' . $content->foto) }}" class="card-img-top" alt="{{ $content->title }}">
      </div>
      {!! $content->isi !!}
      <small class="mt-3 text-muted d-block">by {{ $content->created_by }}</small>
    </div>
  </div>    
</div>
<div class="w-100 text-center d-flex align-items-center justify-content-center bg-primary py-3">
    <p class="text-white cs-reset">&copy; Copyright 2024</p>
</div>
@endsection