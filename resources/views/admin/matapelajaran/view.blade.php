@extends('admin/core')
@section('main')
<div class="col-sm-12">

    <!-- column 2 -->
    <ol class="breadcrumb">
      <li><a href="/admin/dashboard"><i class="glyphicon glyphicon-dashboard"></i><b> Dashboard</b></a></li>
      <li>Naskah Soal</li>
      <li>Mata Pelajaran</li>
    </ol>

    <hr>

    <div class="row">
        <!-- center left-->
        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Mata Pelajaran</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($data as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->mapel}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="First group">
                                    <a href="{{route('getEditMapel', ['id' => $d->id])}}" type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-edit"></span></a>
                                    <!-- <a href="{{route('deleteMapel', ['id' => $d->id])}}" type="button" data-method="delete" data-confirm="Are you sure?" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a> -->
                                    <form action="{{route('deleteMapel', ['id' => $d->id])}}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        {{csrf_field()}}
                                        <button type="submit" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-trash"></span></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--/col-->
        <div class="col-md-4">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="glyphicon glyphicon-plus pull-right"></i>
                        <h5>Tambah Mata Pelajaran</h5>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form form-vertical" action="{{route('storeMapel')}}" method="POST">
                        <div class="control-group">
                            <label>Mata Pelajaran</label>
                            <div class="controls">
                                <input type="text" name="mapel" class="form-control" placeholder="Nama Mata Pelajaran">
                            </div>
                        </div>
                        <div class="control-group">
                            <label></label>
                            <div class="controls">
                                {!! csrf_field() !!}
                                <button type="submit" class="btn btn-primary">
                                    Tambah
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--/panel content-->
            </div>
            @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger fade in">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Error!</strong> {{$error}}
            </div>
            @endforeach
            @endif
            <!--/panel-->


            <!--/panel-->

        </div>
        <!--/col-span-6-->

    </div>
    <!--/row-->

</div>

@stop
