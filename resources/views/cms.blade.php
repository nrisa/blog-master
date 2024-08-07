@extends('layouts.admin')

@section('admin')
<div class="container pt-5">
    <h3 class="mb-3">Content Management System</h3>

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
        <!-- Form untuk posting konten -->
        <div class="col-md-6">
            <div class="w-100 rounded bg-white shadow p-5">
                <h3 class="mb-3 fw-light">Posting Konten</h3>
                <form action="{{ route('contents.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto</label>
                        <input type="file" class="form-control" name="foto">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select class="form-select" name="category_id" required>
                            <option disable selected>Pilih Kategori</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->categori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Konten</label>
                        <textarea class="form-control" name="isi" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Berita Populer?</label>
                        <select class="form-select" name="status" required>
                            <option value="0">Tidak</option>
                            <option value="1">Ya</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Aktif</label>
                        <select class="form-select" name="row_status" required>
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
                    </div>
                    <button class="btn btn-lg btn-primary">Posting</button>
                </form>
            </div>
        </div>
        
        <!-- Form untuk menambah kategori -->
        <div class="col-md-6">
            <div class="w-100 rounded bg-white shadow p-5" style="height: 757px;overflow-y: auto;">
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
    
    <!-- Daftar Konten -->
    <div class="row mb-5">
        <div class="col">
            <div class="w-100 rounded bg-white shadow p-5">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Dibuat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contents as $content)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td><a href="{{ asset('storage/' . $content->foto) }}" target="_blank">lihat gambar</a></td>
                                    <td>{{ $content->judul }}</td>
                                    <td>{{ $content->category->categori }}</td>
                                    <td>{{ $content->created_at }}</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal{{ $content->id }}">Lihat</button>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $content->id }}">Edit</button>
                                        <form action="{{ route('contents.destroy', $content->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Modal Detail -->
                                <div class="modal fade" id="detailModal{{ $content->id }}" tabindex="-1" aria-labelledby="detailModalLabel{{ $content->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="detailModalLabel{{ $content->id }}">Detail Konten</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label">Judul</label>
                                                    <input type="text" class="form-control" value="{{ $content->judul }}" readonly>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Foto</label>
                                                    @if($content->foto)
                                                        <img src="{{ asset('storage/' . $content->foto) }}" alt="foto" class="img-fluid mt-2">
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Kategori</label>
                                                    <input type="text" class="form-control" value="{{ $content->category->categori }}" readonly>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Konten</label>
                                                    <textarea class="form-control" rows="3" readonly>{{ $content->isi }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Berita Populer?</label>
                                                    <input type="text" class="form-control" value="{{ $content->status == 1 ? 'Ya' : 'Tidak' }}" readonly>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Aktif</label>
                                                    <input type="text" class="form-control" value="{{ $content->row_status == 1 ? 'Aktif' : 'Tidak Aktif' }}" readonly>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Edit -->
                                <div class="modal fade" id="editModal{{ $content->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $content->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel{{ $content->id }}">Edit Konten</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('contents.update', $content->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label">Judul</label>
                                                        <input type="text" class="form-control" name="judul" value="{{ $content->judul }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Foto</label>
                                                        <input type="file" class="form-control" name="foto">
                                                        @if($content->foto)
                                                            <img src="{{ asset('storage/' . $content->foto) }}" alt="foto" class="img-fluid mt-2">
                                                        @endif
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Kategori</label>
                                                        <select class="form-select" name="category_id" required>
                                                            @foreach($categories as $category)
                                                                <option value="{{ $category->id }}" {{ $content->category_id == $category->id ? 'selected' : '' }}>{{ $category->categori }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Konten</label>
                                                        <textarea class="form-control" name="isi" rows="3" required>{{ $content->isi }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Berita Terpopuler?</label>
                                                        <select class="form-select" name="status" required>
                                                            <option value="1" {{ $content->status == 1 ? 'selected' : '' }}>Ya</option>
                                                            <option value="0" {{ !$content->status == 1 ? 'selected' : '' }}>Tidak</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Aktif</label>
                                                        <select class="form-select" name="row_status" required>
                                                            <option value="1" {{ $content->row_status == 1 ? 'selected' : '' }}>Aktif</option>
                                                            <option value="0" {{ !$content->row_status == 1 ? 'selected' : '' }}>Tidak Aktif</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
