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
        <!-- center left-->
        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">Tahun Ajaran</th>
                            <th class="text-center">
                                Status
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($tahunajaran as $ta)
                        <tr>
                            <td><a data-pk="{{$ta->id}}" class="tahunAjaran ed-elem">{{$ta->tahunAjaran}}</a>
                                <meta name="csrf-token" content="{{ csrf_token() }}" />
                            </td>
                            <td>
                                @if($ta->aktif == 0)
                                <form action="tahunajaran/editstatus/{{$ta->id}}" method="POST">
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" name="status" value="1">
                                    {{csrf_field()}}
                                    <input type="submit" value="Aktifkan" class="btn btn-primary">
                                </form>
                                @else
                                <form action="tahunajaran/editstatus/{{$ta->id}}" method="POST">
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" name="status" value="0">
                                    {{csrf_field()}}
                                    <input type="submit" value="Nonaktifkan" class="btn btn-danger">
                                </form>
                                @endif

                            </td>
                            <td>
                                <form action="tahunajaran/delete/{{$ta->id}}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="status" value="1">
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
                        <h5>Tambah Tahun Ajaran</h5>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form form-vertical" action="tahunajaran/new" method="post">
                        <div class="control-group">
                            <label>Tahun Ajaran</label>
                            <div class="controls">
                                <input type="text" class="tahunAjaran form-control" name="tahunAjaran" placeholder="Periode Tahun Ajaran">
                            </div>
                        </div>
                        <div class="control-group">
                            <label></label>
                            <div class="controls">
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-primary">
                                    Tambah
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--/panel content-->
            </div>
            <!--/panel-->


            <!--/panel-->

        </div>
        <!--/col-span-6-->

    </div>
    <!--/row-->

</div>

@stop
