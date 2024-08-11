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
        <li class="list-group-item"><a href="{{ url('/detail', $update->id) }}">{{ Str::limit($update->judul, 10) }}</a></li>
      @endforeach
      </ul>
      <h3 class="my-3">Berita Recomended</h3>
      @foreach($recomends as $recomend)
      <div class="card mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-md-8">
              <h6 class="cs-reset fw-light">{{ Str::limit($recomend->judul, 10) }}</h6>
              <small class="text-muted text-mini">{{ $recomend->hari }}, {{ $recomend->created_at->format('d-m-Y') }} | {{ $recomend->jam }}</small><br>
              <a href="{{ url('/detail', $recomend->id) }}" class="btn btn-outline-primary text-mini">Baca Selengkapnya...</a>
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
      <h3 class="mb-3">Berita Terkini</h3>
      <div id="berita-container">
        <!-- Berita terkini akan ditampilkan di sini -->
      </div>
      <div id="pagination" class="mt-4"></div>
    </div>
  </div>    
</div>

<div class="w-100 text-center d-flex align-items-center justify-content-center bg-primary py-3">
    <p class="text-white cs-reset">&copy; Copyright 2024</p>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-pagination/2.1.5/pagination.min.js"></script>

<script>
$(document).ready(function() {
    const contents = @json($contents);

    function showContents(page) {
        const perPage = 5;  // Jumlah item per halaman
        const start = (page - 1) * perPage;
        const end = start + perPage;
        const paginatedContents = contents.slice(start, end);

        $('#berita-container').empty();
        
        paginatedContents.forEach(content => {
            const contentHtml = `
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <h1 class="card-title fw-light">${content.judul.substring(0, 10)}</h1>
                                <small class="text-muted">${content.hari}, ${new Date(content.created_at).toLocaleDateString()} | ${content.jam}</small><br>
                                <br>
                                <a href="/detail/${content.id}" class="btn btn-outline-primary">Baca Selengkapnya...</a>
                            </div>
                            <div class="col-md-3">
                                <div class="bg-secondary w-100 d-flex justify-content-center rounded align-items-center overflow-hidden" style="height: 140px">
                                    <img src="/storage/${content.foto}" class="card-img-top" alt="${content.judul}">
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            `;
            $('#berita-container').append(contentHtml);
        });
    }

    $('#pagination').pagination({
        dataSource: contents,
        pageSize: 5,
        callback: function(data, pagination) {
            showContents(pagination.pageNumber);
        }
    });

    showContents(1); // Tampilkan halaman pertama pada load pertama
});
</script>

@endsection
