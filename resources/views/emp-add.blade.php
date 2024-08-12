@extends('layouts.admin')

@section('admin')
<div class="container pt-5">
    <h3 class="mb-3">Employees Management</h3>

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
        <div class="col-md-12">
            <div class="w-100 rounded bg-white shadow p-5">
                <h3 class="mb-3 fw-light">Tambah Pegawai</h3>
                <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="nip" class="form-label">NIP</label>
                        <input type="text" class="form-control" id="nip" name="nip" required>
                    </div>
                    <div class="mb-3">
                        <label for="pangkat_golongan" class="form-label">Pangkat/Golongan</label>
                        <input type="text" class="form-control" id="pangkat_golongan" name="pangkat_golongan" required>
                    </div>
                    <div class="mb-3">
                        <label for="jabatan_eselon" class="form-label">Jabatan/Eselon</label>
                        <input type="text" class="form-control" id="jabatan_eselon" name="jabatan_eselon" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
