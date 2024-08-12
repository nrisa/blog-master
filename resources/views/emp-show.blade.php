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
                <h1>Detail Employee</h1>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" value="{{ $employee->nama }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="nip" value="{{ $employee->nip }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="pangkat_golongan" class="form-label">Pangkat/Golongan</label>
                    <input type="text" class="form-control" id="pangkat_golongan" value="{{ $employee->pangkat_golongan }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="jabatan_eselon" class="form-label">Jabatan/Eselon</label>
                    <input type="text" class="form-control" id="jabatan_eselon" value="{{ $employee->jabatan_eselon }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label> <br>
                    @if($employee->foto)
                        <img src="{{ asset('images/' . $employee->foto) }}" alt="foto" width="100">
                    @else
                        <p>Tidak ada foto</p>
                    @endif
                </div>
                <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>

            </div>
        </div>
    </div>
</div>
@endsection
