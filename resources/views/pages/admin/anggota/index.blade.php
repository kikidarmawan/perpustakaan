@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola Anggota</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dasbor</a></li>
                        <li class="breadcrumb-item active">Dasbor</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Data Anggota</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>NIS</th>
                                        <th>Kelas</th>
                                        <th>L/P</th>
                                        <th>No HP</th>
                                        <th>Foto</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data as $anggota)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $anggota->nama }}</td>
                                            <td>{{ $anggota->nis }}</td>
                                            <td>{{ $anggota->kelas }}</td>
                                            <td>{{ $anggota->jns_kelamin }}</td>
                                            <td>{{ $anggota->no_hp }}</td>
                                            <td>{{ $anggota->foto }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
@endsection
