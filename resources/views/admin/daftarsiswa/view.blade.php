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
        <div class="col-md-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h5 class="">Filter</h5>
              </div>
              <div class="panel-body">
                <label for="kelasSelect">Tahun Ajaran</label>
                <select class="form-control" id="kelasSelect" name="">
                    <option value="">2013/2014</option>
                    <option value="">A</option>
                    <option value="">A</option>
                </select>
                <br>
                <label for="kelasSelect">Kelas</label>
                <select class="form-control" id="kelasSelect" name="">
                    <option value="">XII RPL</option>
                    <option value="">A</option>
                    <option value="">A</option>
                </select>
              </div>
              <div class="panel-footer">

              </div>
            </div>
            <a href="daftarsiswa/insert" class="btn btn-success form-control">Tambah Siswa</a>
        </div>
        <!--/col-->
        <div class="col-md-9">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h5>Daftar Siswa</h5>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form form-vertical">
                        <table class="table table-responsive table-striped">
                            <thead>
                                <th>NISN</th>
                                <th>No. Induk</th>
                                <th>Nama</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>21319381293</td>
                                    <td>9839</td>
                                    <td>Alfredo Eka Wibowo</td>
                                    <td><a href="#" class="btn btn btn-default">Lihat</a></td>
                                </tr>
                                <tr>
                                    <td>21319381293</td>
                                    <td>9839</td>
                                    <td>Alfredo Eka Wibowo</td>
                                    <td><a href="#" class="btn btn btn-default">Lihat</a></td>
                                </tr>
                                <tr>
                                    <td>21319381293</td>
                                    <td>9839</td>
                                    <td>Alfredo Eka Wibowo</td>
                                    <td><a href="#" class="btn btn btn-default">Lihat</a></td>
                                </tr>
                                <tr>
                                    <td>21319381293</td>
                                    <td>9839</td>
                                    <td>Alfredo Eka Wibowo</td>
                                    <td><a href="#" class="btn btn btn-default">Lihat</a></td>
                                </tr>
                                <tr>
                                    <td>21319381293</td>
                                    <td>9839</td>
                                    <td>Alfredo Eka Wibowo</td>
                                    <td><a href="#" class="btn btn btn-default">Lihat</a></td>
                                </tr>
                                <tr>
                                    <td>21319381293</td>
                                    <td>9839</td>
                                    <td>Alfredo Eka Wibowo</td>
                                    <td><a href="#" class="btn btn btn-default">Lihat</a></td>
                                </tr>
                                <tr>
                                    <td>21319381293</td>
                                    <td>9839</td>
                                    <td>Alfredo Eka Wibowo</td>
                                    <td><a href="#" class="btn btn btn-default">Lihat</a></td>
                                </tr>
                                <tr>
                                    <td>21319381293</td>
                                    <td>9839</td>
                                    <td>Alfredo Eka Wibowo</td>
                                    <td><a href="#" class="btn btn btn-default">Lihat</a></td>
                                </tr>
                                <tr>
                                    <td>21319381293</td>
                                    <td>9839</td>
                                    <td>Alfredo Eka Wibowo</td>
                                    <td><a href="#" class="btn btn btn-default">Lihat</a></td>
                                </tr>
                                <tr>
                                    <td>21319381293</td>
                                    <td>9839</td>
                                    <td>Alfredo Eka Wibowo</td>
                                    <td><a href="#" class="btn btn btn-default">Lihat</a></td>
                                </tr>
                                <tr>
                                    <td>21319381293</td>
                                    <td>9839</td>
                                    <td>Alfredo Eka Wibowo</td>
                                    <td><a href="#" class="btn btn btn-default">Lihat</a></td>
                                </tr>
                            </tbody>
                        </table>
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
