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
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="kelasEdt .ed-elem">
                            <td>X RPL</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>XI RPL</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>XII RPL</td>
                            <td>3</td>
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
                        <h5>Tambah Kelas</h5>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form form-vertical">
                        <div class="control-group">
                            <label>Kelas</label>
                            <div class="controls">
                                <input type="text" class="form-control" placeholder="Nama Kelas">
                            </div>
                        </div>
                        <br>
                        <div class="control-group">
                            <label>Tingkat</label>
                            <div class="controls">
                                <input type="text" class="form-control" placeholder="Tingkat">
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
