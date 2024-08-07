@extends('layouts.admin')

@section('admin')
    <div class="container pt-5">
        <h3 class="mb-3">Video Management</h3>
        <div class="row mb-4">
            <div class="col-md-12 mb-4">
                <div class="w-100 rounded bg-white shadow p-5">
                    <h3 class="mb-3 fw-light">Posting Video</h3>
                    <form action="{{ route('videos.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Source (YouTube Link)</label>
                            <input type="text" class="form-control" name="source" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                        </div>
                        <button class="btn btn-lg btn-primary">Posting</button>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <div class="w-100 rounded bg-white shadow p-5">
                    <h3 class="mb-3 fw-light">List Video</h3>
                    <ul class="list-group">
                        @foreach($videos as $video)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex gap-3 align-items-center">
                                    <iframe width="100" height="60" src="{{ $video->source }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <p>{{ $video->deskripsi }}</p>
                                </div>
                                <form action="{{ route('videos.destroy', $video->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger me-2"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
