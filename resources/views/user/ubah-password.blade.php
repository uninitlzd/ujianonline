@extends('core')
@section('navigation')
    @include('fragments/user/navigation')
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel">
                  <div class="panel-heading text-center">
                    <h5 class="">Ubah Password</h5>
                  </div>
                  <div class="panel-body">
                    <form action="#" class="col-md-10 col-md-offset-1">
                        <div class="form-group">
                          <label for="passlama">Password Lama</label>
                          <input type="password" class="form-control" id="passlama" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="passlama">Password Baru</label>
                          <input type="password" class="form-control" id="passlama" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="passlama">Konfirmasi Password Baru</label>
                          <input type="password" class="form-control" id="passlama" placeholder="">
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-primary" name="name" value="Ubah">
                        </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>

</div>
@stop
