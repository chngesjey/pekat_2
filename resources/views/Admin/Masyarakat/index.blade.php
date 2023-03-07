@extends('layouts.admin')

@section('title', 'Halaman Masyarakat')
    
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
@endsection

@section('header', 'Data Masyarakat')
    
@section('content')
@section('content')
<div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Masyarakat</h4>
                                <div class="table-responsive">
                                <table id="masyarakatTable" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Telp</th>
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($masyarakat as $k => $v)
                                            <tr>
                                                <td>{{ $k += 1 }}</td>
                                                <td>{{ $v->nik }}</td>
                                                <td>{{ $v->nama }}</td>
                                                <td>{{ $v->username }}</td>
                                                <td>{{ $v->telp }}</td>
                                                <td><a href="{{ route('masyarakat.show', $v->nik) }}" style="text-decoration: underline">Lihat</a></td>
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
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#masyarakatTable').DataTable();
        } );
    </script>
@endsection