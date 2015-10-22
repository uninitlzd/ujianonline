@extends('admin/core')
@section('main')
<div class="col-sm-12">

    <!-- column 2 -->
    <ol class="breadcrumb">
      <li><a href="/admin/dashboard"><i class="glyphicon glyphicon-dashboard"></i><b> Dashboard</b></a></li>
      <li>Siswa</li>
      <li>Daftar Siswa</li>
      <li>Insert</li>
    </ol>

    <hr>

    <div class="row">
        <!-- center left-->
        <!--/col-->
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="glyphicon glyphicon-plus pull-right"></i>
                        <h5>Tambah Siswa</h5>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form form-vertical">
                        <div class="control-group col-md-4">
                            <label>Foto</label>
                            <div class="controls">
                                <input type="file">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="control-group">
                                <label>Nama</label>
                                <div class="controls">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="control-group">
                                <label>NISN</label>
                                <div class="controls">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="control-group">
                                <label>No. Induk</label>
                                <div class="controls">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="control-group">
                                <label>Alamat</label>
                                <div class="controls">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="control-group">
                                <label>Email</label>
                                <div class="controls">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="control-group">
                                <label>No. Telepon</label>
                                <div class="controls">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="control-group">
                                <label>Kelas</label>
                                <div class="controls">
                                    <select class="form-control" name="" id="">
                                        <option value="">XII RPL</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="control-group">
                                <label>Tahun Ajaran</label>
                                <div class="controls">
                                    <select class="form-control" name="" id="">
                                        <option value="">2013/2014</option>
                                    </select>
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
