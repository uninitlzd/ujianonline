@extends('admin/core')
@section('main')
<div class="col-sm-12">

    <!-- column 2 -->
    <ol class="breadcrumb">
      <li><a href="/admin/dashboard"><i class="glyphicon glyphicon-dashboard"></i><b> Dashboard</b></a></li>
      <li>Naskah Soal</li>
      <li>Soal</li>
    </ol>

    <hr>

    <ul class="list-inline pull-right">
        <li><a class="btn btn-default" title="Add Widget" data-toggle="modal" href="/admin/soal/add"><span class="glyphicon glyphicon-plus-sign"></span> Tambah Soal</a></li>
    </ul>
    <h4>Daftar Soal Matematika</h4>
    <hr>

    <div class="row">
        <!-- center left-->
        <div class="col-md-12">
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
                        <tr>
                            <td>1</td>
                            <td>Matematika</td>
                            <td>
                                <a href="/admin/soal/all">Lihat Soal</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Bahasa Indonesia</td>
                            <td>
                                <a href="#">Lihat Soal</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--/col-->
        <!--/col-span-6-->

    </div>
    <!--/row-->

</div>

@stop
