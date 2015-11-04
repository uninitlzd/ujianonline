@extends('admin/core')
@section('main')
<div class="col-sm-12">

    <!-- column 2 -->
    <ol class="breadcrumb">
      <li><a href="/admin/dashboard"><i class="glyphicon glyphicon-dashboard"></i><b> Dashboard</b></a></li>
      <li>Siswa</li>
      <li>Kelas</li>
    </ol>

    <hr>

    <div class="row">
        <!-- center left-->
        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">Kelas</th>
                            <th class="text-center">Tingkat</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($data as $d)
                        <tr class="kelasEdt .ed-elem">
                            <td>{{$d->kelas}}</td>
                            <td>{{$d->tingkat}}</td>
                            <td>
                                <a href="kelas/edit/{{$d->kelas}}" class="btn btn-xs btn-default">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <form action="kelas/delete/{{$d->kelas}}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-xs"><span class="glyphicon glyphicon-trash"></span></button>
                                </form>
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
                        <h5>Tambah Kelas</h5>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form form-vertical" action="{{route('doStoreKelas')}}" method="post">
                        {{csrf_field()}}
                        <div class="control-group">
                            <label>Kelas</label>
                            <div class="controls">
                                <input type="text" name="kelas" class="form-control" placeholder="Nama Kelas">
                            </div>
                        </div>
                        <br>
                        <div class="control-group">
                            <label>Tingkat</label>
                            <div class="controls">
                                <input type="number" min="1" max="3" name="tingkat" class="form-control" placeholder="Tingkat">
                            </div>
                        </div>
                        <div class="control-group">
                            <label></label>
                            <div class="controls">
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
