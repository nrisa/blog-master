@extends('layouts.admin')

@section('admin')
    <div class="container pt-5">
        <h3 class="mb-3">Banner Management</h3>
        <div class="row mb-4">
            <div class="col-md-12 mb-4">
                <div class="w-100 rounded bg-white shadow p-5">
                    <h3 class="mb-3 fw-light">Posting Banner</h3>
                    <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Source</label>
                            <input type="file" class="form-control" name="source">
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
                    <h3 class="mb-3 fw-light">List Banner</h3>
                    <ul class="list-group">
                        @foreach($banners as $banner)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <img src="{{ asset('storage/' . $banner->source) }}" alt="Banner Image" height="80" class="me-3 shadow">
                                    {{ $banner->deskripsi }}
                                </div>
                                <form action="{{ route('banners.destroy', $banner->id) }}" method="POST">
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
