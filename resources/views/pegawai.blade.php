@extends('layouts.app')

@section('app')
<div class="bg-primary-subtle py-5 w-100">
    <div class="container">
        <h3 class="mb-3 text-primary">Data Pegawai DISKOMINFO Kab. Nias Utara</h3>
    </div>
</div>
<div class="container pt-5">

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
    <table id="pegawai" class="table table-bordered display">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Pangkat/Golongan</th>
                <th>Jabatan/Eselon</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $employee->nama }}</td>
                    <td>{{ $employee->nip }}</td>
                    <td>{{ $employee->pangkat_golongan }}</td>
                    <td>{{ $employee->jabatan_eselon }}</td>
                    <td>
                        @if($employee->foto)
                            <img src="{{ asset('images/' . $employee->foto) }}" alt="foto" width="50">
                        @else
                            N/A
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('js/jquery.js') }}"></script>   
<script>
    $(document).ready(function () {
        $('#pegawai').DataTable();  // Inisialisasi DataTables
    });
</script>
@endsection
