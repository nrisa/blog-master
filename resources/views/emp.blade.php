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
    <table id="emplist" class="table table-bordered display">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Pangkat/Golongan</th>
                <th>Jabatan/Eselon</th>
                <th>Foto</th>
                <th>Actions</th>
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
                    <td>
                        <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
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
        $('#emplist').DataTable();  // Inisialisasi DataTables
    });
</script>
@endsection
