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
                    <label for="kelasFilter">Kelas</label>
                    <select class="form-control" id="kelasFilter" name="kelasFilter">
                        @foreach($kelas as $k)
                            <option value="{{$k->kelas}}">{{$k->kelas}}</option>
                        @endforeach
                    </select>
                    <br>
                    <label for="taFilter">Tahun Ajaran</label>
                    <select class="form-control" id="taFilter" name="taFilter">
                        @foreach($ta as $t)
                            <option value="{{$t->id}}">{{$t->tahunAjaran}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="panel-footer">

                </div>
            </div>
            <a href="daftarsiswa/create" class="btn btn-success form-control">Tambah Siswa</a>
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
                    <table class="table table-responsive table-striped">
                        <thead>
                            <th>NISN</th>
                            <th>No. Induk</th>
                            <th>Nama</th>
                            <th></th>
                        </thead>
                        <tbody id="dataSiswa">

                        </tbody>
                    </table>

                </div>
                <!--/panel content-->
            </div>
            <!--/panel-->

        </div>
        <!--/col-span-6-->

    </div>
    <!--/row-->

</div>

@stop
@section('moreScript')
    <script>

    $(document).ready(function() {
        filterSiswaByKelas();
    });

    $('#kelasFilter').change(function() {
        filterSiswaByKelas();
    });

    </script>
@stop
