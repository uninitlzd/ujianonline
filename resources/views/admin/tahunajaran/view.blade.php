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
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>2013/2014</td>
                            <td>
                                <a href="#" class="btn btn-primary">Aktif</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2014/2015</td>
                            <td>
                                <a href="#" class="btn btn-default">Tidak Aktif</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2015/2016</td>
                            <td>
                                <a href="#" class="btn btn-default">Tidak Aktif</a>
                            </td>
                        </tr>
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
                    <form class="form form-vertical">
                        <div class="control-group">
                            <label>Tahun Ajaran</label>
                            <div class="controls">
                                <input type="text" class="form-control" placeholder="Periode Tahun Ajaran">
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
            <!--/panel-->


            <!--/panel-->

        </div>
        <!--/col-span-6-->

    </div>
    <!--/row-->

</div>

@stop
