@extends('layouts/main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Mahasiswa</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <a class="btn btn-primary" href="{{Route('mahasiswa.create')}}">
                <i class="fas fa-edit"></i> Tambah
            </a>
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>NPM</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Telepon</th>
                                        <th>Jurusan</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($mahasiswa as $data)
                                    <tr>
                                        <td>{{$data->nik}}</td>
                                        <td>{{$data->npm}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->jenis_kelamin}}</td>
                                        <td>{{$data->nomor_telepon}}</td>
                                        <td>{{$data->Jurusan}}</td>
                                        <td>{{$data->user->email}}</td>
                                        <td>
                                            <form action="{{Route('mahasiswa.destroy', $data->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a class="btn btn-success btn-sm" href="{{Route('mahasiswa.edit', $data->id)}}">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Ubah
                                                </a>
                                                @if(!$data->user)
                                                <a class="btn btn-success btn-sm" href="{{Route('mahasiswa.edit', $data->id)}}">
                                                    <i class="fas fa-user-plus">
                                                    </i>
                                                    Generate USer
                                                </a>
                                                @endif
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    @endsection