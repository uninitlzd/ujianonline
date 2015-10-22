@extends('admin/core')
@section('main')
<div class="col-sm-12">

    <!-- column 2 -->
    <ol class="breadcrumb">
      <li><a href="/admin/dashboard"><i class="glyphicon glyphicon-dashboard"></i><b> Dashboard</b></a></li>
      <li>Soal</li>
      <li>Tambah</li>
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
                        <h5>Tambah Soal</h5>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form form-vertical">
                        <div class="control-group">
                            <label>Mata Pelajaran</label>
                            <div class="controls">
                                <select name="" class="form-control" id="">
                                    <option value="">Matematika</option>
                                    <option value="">Bahasa Indonesia</option>
                                    <option value="">Bahasa Inggris</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="control-group">
                            <label>Kompetensi Dasar</label>
                            <div class="controls">
                                <select name="" class="form-control" id="">
                                    <option value="">Menghitung bangun ruang</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="control-group">
                            <label>Isi Soal</label>
                            <div class="controls">
                                <textarea class="form-control" name="name" rows="4" cols="40"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="control-group">
                            <label>Jawaban A</label>
                            <div class="controls">

                                <textarea class="form-control" name="name" rows="2" cols="40"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="control-group">
                            <label>Jawaban B</label>
                            <div class="controls">
                                <textarea class="form-control" name="name" rows="2" cols="40"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="control-group">
                            <label>Jawaban C</label>
                            <div class="controls">
                                <textarea class="form-control" name="name" rows="2" cols="40"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="control-group">
                            <label>Jawaban D</label>
                            <div class="controls">
                                <textarea class="form-control" name="name" rows="2" cols="40"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="control-group">
                            <label>Jawaban E</label>
                            <div class="controls">
                                <textarea class="form-control" name="name" rows="2" cols="40"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="control-group">
                            <label>Kunci Jawaban</label>
                            <div class="controls">
                                <select name="" style="width: 25%" id="">
                                    <option value="">A</option>
                                    <option value="">B</option>
                                    <option value="">C</option>
                                    <option value="">D</option>
                                    <option value="">E</option>
                                </select>
                            </div>
                        </div>
                        <br>

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
