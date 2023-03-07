@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">

@endsection

@section('header', 'Data Petugas')

@section('content')
<a href="{{ route('petugas.create') }}" class="btn btn-purple mb-2">Tambah Petugas</a>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Table</h4>
                    <div class="table-responsive">
                        <table id="petugasTable" class="table">                            
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Petugas</th>
                                    <th>Username</th>
                                    <th>Telp</th>
                                    <th>Level</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($petugas as $k => $v)
                                <tr>
                                    <td>{{ $k += 1 }}</td>
                                    <td>{{ $v->nama_petugas }}</td>
                                    <td>{{ $v->username }}</td>
                                    <td>{{ $v->telp }}</td>
                                    <td>{{ $v->level }}</td>
                                    <td><a href="{{ route('petugas.edit', $v->id_petugas) }}"
                                            style="text-decoration: underline">Lihat</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
</div>
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#petugasTable').DataTable();
    });

</script>
@endsection
