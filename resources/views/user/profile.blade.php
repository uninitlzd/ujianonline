@extends('core')
@section('navigation')
    @include('fragments/user/navigation')
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="text-center">Data Siswa</h4>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-2">
                            <img src="{{URL::asset('img/default.png')}}" alt="" class="img-responsive img-circle">
                        </div>
                        <div class="col-md-3">
                            <b>Nama</b>
                            <p>Alfredo Eka Wibowo</p>
                        </div>
                        <div class="col-md-3">
                            <b>Kelas</b>
                            <p>XII-RPL</p>
                        </div>
                        <div class="col-md-4">
                            <b>Nomor Induk</b>
                            <p>9839/1.000.11</p>
                        </div>
                        <div class="col-md-3">
                            <b>Alamat</b>
                            <p>Puri Kalitengah Blok AI/7</p>
                        </div>
                        <div class="col-md-3">
                            <b>Email</b>
                            <p>alfredoeka@outlook.com</p>
                        </div>
                        <div class="col-md-4">
                            <b>No. Telepon</b>
                            <p>0831231232</p>
                        </div>
                        <div class="col-md-4 pull-right">
                            <a href="/user/profile/ubah-password">Ubah password</a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>

</div>
@stop
