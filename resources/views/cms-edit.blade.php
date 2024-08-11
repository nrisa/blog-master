@extends('layouts.admin')

@section('admin')
<div class="container pt-5">
    <h3 class="mb-3">Edit Content</h3>
    <div class="row">
        <div class="col">
            <div class="w-100 rounded bg-white shadow p-5">
                <form action="{{ route('contents.update', $content->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
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
                        <label class="form-label">Berita Terpopuler?</label>
                        <select class="form-select" name="status" required>
                            <option value="1" {{ $content->status == 1 ? 'selected' : '' }}>Ya</option>
                            <option value="0" {{ $content->status == 0 ? 'selected' : '' }}>Tidak</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Aktif</label>
                        <select class="form-select" name="row_status" required>
                            <option value="1" {{ $content->row_status == 1 ? 'selected' : '' }}>Aktif</option>
                            <option value="0" {{ $content->row_status == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Konten</label>
                        <!-- Tambahkan elemen div untuk Quill -->
                        <div id="editor" class="form-control" style="height: 300px;">{!! $content->isi !!}</div>
                        <!-- Tambahkan textarea hidden untuk menyimpan data dari Quill -->
                        <textarea name="isi" id="hidden_content" style="display:none;"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan link ke Quill -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script>
    var quill = new Quill('#editor', {
        theme: 'snow',
    });

    // Set textarea value before form submit
    document.querySelector('form').onsubmit = function() {
        document.querySelector('#hidden_content').value = quill.root.innerHTML;
    };
</script>
@endsection
