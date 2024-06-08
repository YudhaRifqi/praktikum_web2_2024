@extends('layouts/main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-4">
                                    <img src="{{asset('img/img2.png')}}" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h2>Hallo Mahasiswa! {{Auth()->user()->nama}}</h2>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eum consectetur at quis rem tempora sapiente deserunt, ad vitae eligendi illum ipsa repudiandae soluta earum perferendis accusamus quidem? Quae nulla iusto atque, alias optio quo ipsum deserunt. Sunt cum id obcaecati ducimus eaque! Ea corporis optio molestiae perferendis placeat ullam ipsam nesciunt veniam modi sit! Maxime similique provident reiciendis ratione nam nulla possimus iure soluta eius suscipit ad reprehenderit incidunt corrupti molestias ex consequatur, vitae debitis atque. Adipisci asperiores fugit quos nobis maiores impedit consectetur deserunt enim nostrum ipsum, aliquam amet non esse, ipsam quaerat reprehenderit recusandae, mollitia consequuntur. Aspernatur ea, tempora repellat velit consequatur obcaecati explicabo corporis, adipisci nam odio sit tempore, odit laborum sint? Perspiciatis, mollitia porro totam reprehenderit omnis quia assumenda quo esse neque? Nam nostrum non officiis similique nemo perspiciatis. Dolorum suscipit quisquam tempora vitae laudantium placeat quo fugiat porro, repudiandae nesciunt delectus. Consequuntur, vitae atque!
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    @endsection