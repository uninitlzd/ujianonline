@extends('admin/core')
@section('main')
<div class="col-sm-12">

    <!-- column 2 -->
    <ol class="breadcrumb">
        <li><a href="/admin/dashboard"><i class="glyphicon glyphicon-dashboard"></i><b> Dashboard</b></a></li>
        <li>Siswa</li>
        <li>Tahun Ajaran</li>
    </ol>
    <hr>
    <div class="row">
        <!--/col-->
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="glyphicon glyphicon-plus pull-right"></i>
                        <h5>Edit Tahun Ajaran</h5>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form form-vertical" action="{{route('tahunAjaranDoEdit')}}" method="post">
                        <div class="control-group">
                            <label>Tahun Ajaran</label>
                            <div class="controls">
                                <input type="hidden" name="id" value="{{$data->id}}">
                                <input type="text" class="tahunAjaran form-control" name="tahunAjaran" value="{{$data->tahunAjaran}}" placeholder="Periode Tahun Ajaran">
                            </div>
                        </div>
                        <div class="control-group">
                            <label></label>
                            <div class="controls">
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-primary">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--/panel content-->
            </div>
            <!--/panel-->

            @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger fade in">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Error!</strong> {{$error}}
            </div>
            @endforeach
            @endif




            <!--/panel-->

        </div>
        <!--/col-span-6-->

    </div>
    <!--/row-->

</div>

@stop
