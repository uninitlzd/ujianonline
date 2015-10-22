@extends('core')
@section('navigation')
    @include('fragments/user/navigation')
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel">
                  <div class="bg-primary panel-heading text-center">
                    <h3 class="panel-title">Ujian</h3>
                  </div>
                  <div class="panel-body">
                    <table class="table table-responsive">
                        <thead>
                            <th>
                                Ujian
                            </th>
                            <th>
                                Mata Pelajaran
                            </th>
                            <th>
                                Tanggal
                            </th>
                            <th>

                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>UN 2015</td>
                                <td>Bahasa Inggris</td>
                                <td>Rabu, 14 Oktober 2015</td>
                                <td class="text-center">
                                    <a href="/user/ujian/code" class="btn btn-success">Mulai</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-heading bg-primary text-center">
                    <h3 class="panel-title">History</h3>
                  </div>
                  <div class="panel-body">
                      <table class="table table-responsive">
                          <thead>
                              <th>
                                  Ujian
                              </th>
                              <th>
                                  Mata Pelajaran
                              </th>
                              <th>
                                  Tanggal
                              </th>
                              <th>
                                Nilai
                              </th>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>UN 2015</td>
                                  <td>Bahasa Indonesia</td>
                                  <td>Rabu, 13 Oktober 2015</td>
                                  <td>96</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
                </div>
            </div>
        </div>
    </div>

</div>
@stop
