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
                    <label for="mapel">Mata Pelajaran</label>
                    <select class="form-control" id="mapel" name="mapel">
                        <option value="" selected>Pilih Mapel</option>
                        @foreach($mapel as $m)
                            <option value="{{$m->id}}">{{$m->mapel}}</option>
                        @endforeach
                    </select>
                    <br>
                    <label for="tingkat">Tingkat</label>
                    <select class="form-control" id="tingkat" name="tingkat">
                        <option value="0" selected>Pilih Tingkat</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="panel-footer">

                </div>
            </div>
            <a href="daftarsiswa/create" class="btn btn-success form-control">Tambah K.D.</a>
        </div>
        <!--/col-->
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h5>Daftar Kompetensi Dasar</h5>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-responsive table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Kompetensi Dasar</th>
                        </thead>
                        <tbody id="dataKD">
                            <tr>
                                <td>1</td>
                                <td>A</td>
                            </tr>
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

    $('#mapel').change(function() {
        var idMapel, tingkat;

        idMapel = $(this).val();
        tingkat = $('#tingkat').val();

        

        if((tingkat == 0) && (idMapel != 0)) {
            $.ajax({
                method : 'get',
                url : 'http://localhost:8000/admin/parse/filterKD/'+idMapel,
                success : function(data) {
                    $('#dataKD').html(data);
                }
            });
        } else {
            $.ajax({
                method : 'get',
                url : 'http://localhost:8000/admin/parse/filterKD/'+idMapel+'/'+tingkat,
                success : function(data) {
                    $('#dataKD').html(data);
                }
            });
        }
    });

    $('#tingkat').change(function() {
        var idMapel, tingkat;

        idMapel = $('#mapel').val();
        tingkat = $('#tingkat').val();

        $.ajax({
            method : 'get',
            url : 'http://localhost:8000/admin/parse/filterKD/'+idMapel+'/'+tingkat,
            success : function(data) {
                $('#dataKD').html(data);
            }
        });
    });

    </script>
@stop
