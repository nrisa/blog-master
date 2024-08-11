@extends('layouts.admin')

@section('admin')
<div class="container pt-5">
    <h3 class="mb-3">Detail Konten</h3>
    <div class="row mb-5">
        <div class="col">
            <a href="/admin/cms-list" class="btn btn-secondary mb-3">Kembali</a>
            <div class="w-100 rounded bg-white shadow p-5">
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
                    <label class="form-label">Berita Populer?</label>
                    <input type="text" class="form-control" value="{{ $content->status == 1 ? 'Ya' : 'Tidak' }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Aktif</label>
                    <input type="text" class="form-control" value="{{ $content->row_status == 1 ? 'Aktif' : 'Tidak Aktif' }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Konten Isi</label>
                </div>
                <p>
                    {!! $content->isi !!}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
