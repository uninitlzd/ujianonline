@extends('admin/core')
@section('main')
<div class="col-sm-12">

    <!-- column 2 -->
    <ol class="breadcrumb">
        <li><a href="/admin/dashboard"><i class="glyphicon glyphicon-dashboard"></i><b> Dashboard</b></a></li>
        <li>Siswa</li>
        <li>Daftar Siswa</li>
    </ol>

    <hr>

    <div class="row">
        <!-- center left-->
        <!--/col-->
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h5>Data Siswa</h5>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-md-3">
                        <img src="{{asset('img/default.png')}}" alt="" class="img img-responsive img-rounded" />
                    </div>
                    <div class="col-md-9">
                        <ul class="list-group">
                            <li class="list-group-item"><b>Nama : </b>{{$data->nama}}</li>

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <b>NISN : </b>{{$data->NISN}}
                                    </div>
                                    <div class="col-md-6">
                                        <b>No.Induk : </b>{{$data->noInduk}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <b>Email : </b>{{$data->email}}
                                    </div>
                                    <div class="col-md-6">
                                        <b>No.Telepon : </b>{{$data->noTelp}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item"><b>Alamat : </b>{{$data->alamat}}</li>
                        </ul>
                    </div>
                </div>
                <!--/panel content-->
            </div>
            <!--/panel-->
            <div class="btn-group" role="group" aria-label="First group">
                <a href="{{route('editDaftarSiswa', ['nisn' => $data->NISN])}}" type="button" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                <!-- <a href="{{route('deleteSiswa', ['nisn' => $data->NISN])}}" type="button" data-method="delete" data-confirm="Are you sure?" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a> -->
                <form class="pull-right" action="{{route('deleteSiswa', ['nisn' => $data->NISN])}}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                </form>
            </div>

            <!--/panel-->

        </div>
        <!--/col-span-6-->

    </div>
    <!--/row-->

</div>

@stop
