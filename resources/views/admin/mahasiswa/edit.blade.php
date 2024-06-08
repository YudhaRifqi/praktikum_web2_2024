@extends('layouts/main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Data Mahasiswa</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card card-primary">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{Route('mahasiswa.update', $mahasiswa->id)}}" method="post">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">NIK</label>
                                        <input type="text" class="form-control" name="nik" placeholder="NIK" value="{{$mahasiswa->nik}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">NPM</label>
                                        <input type="text" class="form-control" name="npm" placeholder="NPM" value="{{$mahasiswa->npm}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{$mahasiswa->nama}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Telepon</label>
                                        <input type="text" class="form-control" name="nomor_telepon" placeholder="Telepon" value="{{$mahasiswa->nomor_telepon}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin">
                                            <option>Pilih</option>
                                            <option value="Laki-Laki" {{$mahasiswa->jenis_kelamin == 'Laki-Laki' ? 'selected' : ''}}>Laki-Laki</option>
                                            <option value="Perempuan" {{$mahasiswa->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Jurusan</label>
                                        <select class="form-control" name="Jurusan">
                                            <option>Pilih</option>
                                            <option value="Teknik Informatika" {{$mahasiswa->Jurusan == 'Teknik Informatika' ? 'selected' : ''}}>Teknik Informatika</option>
                                            <option value="Ilmu Hukum" {{$mahasiswa->Jurusan == 'Ilmu Hukum' ? 'selected' : ''}}>Ilmu Hukum</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="Email" value="{{$mahasiswa->user->email}}">
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Username</label>
                                                <input type="text" class="form-control" name="username" placeholder="Username" value="{{$mahasiswa->user->username}}">
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="password" class="form-control" name="password" placeholder="Password">
                                                <small class="text-danger">isi jika ingin merubah</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <a href="{{Route('mahasiswa.index')}}" class="btn btn-primary">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    @endsection