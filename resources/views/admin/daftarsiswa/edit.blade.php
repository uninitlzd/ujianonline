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
                        <form action="{{route('updateDaftarSiswa', ['nisn' => $data->NISN ])}}" method="post">
                            <ul class="list-group">
                                <li class="list-group-item"><b>Nama : </b><input type="text" name="name" value="{{$data->nama}}" class="form-control"></li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b>NISN : </b><input type="text" name="NISN" value="{{$data->NISN}}" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <b>No.Induk : </b><input type="text" name="noInduk" value="{{$data->noInduk}}" class="form-control">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="control-group">
                                                <b>Tahun Ajaran</b>
                                                <div class="controls">
                                                    <select name="tahunAjaran" class="form-control" id="">
                                                        @foreach($dataTA as $ta)
                                                            <option value="{{$ta->tahunAjaran}}">{{$ta->tahunAjaran}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="control-group">
                                                <b>Tingkat {{$data->tingkat}}</b>
                                                <div class="controls">
                                                    <select name="tingkat" class="tingkat form-control" id="">
                                                        <option value="1" <?= (( $data->tingkat == 1) ? 'selected' : '' ) ?>>1</option>
                                                        <option value="2" <?= (( $data->tingkat == 2) ? 'selected' : '' ) ?>>2</option>
                                                        <option value="3" <?= (( $data->tingkat == 3) ? 'selected' : '' ) ?>>3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-md-offset-6">
                                            <br>
                                            <div class="control-group">
                                                <b>Kelas</b>
                                                <div class="controls">
                                                    <select name="kelas" class="form-control" id="kelas" disabled>

                                                    </select>
                                                    <script type="text/javascript">

                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b>Email : </b><input type="text" name="email" value="{{$data->email}}" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <b>No.Telepon : </b><input type="text" name="noTelp" value="{{$data->noTelp}}" class="form-control">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item"><b>Alamat : </b><input type="text" name="alamat" value="{{$data->alamat}}" class="form-control"></li>
                            </ul>
                            {!! csrf_field() !!}
                            <input type="hidden" class="nisn_before" value="{{$data->NISN}}">
                            <input class="btn btn-primary" type="submit" value="Edit">
                        </form>
                    </div>
                </div>
                <!--/panel content-->
            </div>
            <!--/panel-->
            <!--/panel-->
            @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger fade in">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Error!</strong> {{$error}}
            </div>
            @endforeach
            @endif
        </div>
        <!--/panel-->
        <!--/panel-->
    </div>
    <!--/col-span-6-->

</div>
<!--/row-->

</div>

@stop
@section('moreScript')
    <script>
        $(document).ready(function() {
            getKelasByTingkat();
        });
    </script>
@stop
