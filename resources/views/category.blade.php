@extends('layouts.admin')

@section('admin')
<div class="container pt-5">
    <h3 class="mb-3">List Category</h3>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row mb-4">        
        <!-- Form untuk menambah kategori -->
        <div class="col-md-12">
            <div class="w-100 rounded bg-white shadow p-5">
                <h3 class="mb-3 fw-light">Tambah Kategori</h3>
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <input type="text" class="form-control" name="categori" required>
                    </div>
                    <button class="btn btn-lg btn-primary">Tambah Kategori</button>
                </form>
                <h4 class="mt-5">Daftar Kategori</h4>
                <ul class="list-group">
                    @foreach($categories as $category)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $category->categori }}
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm">Hapus</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
