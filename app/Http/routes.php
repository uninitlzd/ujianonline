<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('user/login');
});

Route::post('check-email', 'SiswaController@checkEmail');

Route::group(['prefix' => 'admin'], function() {

    Route::group(['prefix' => 'parse'], function() {

        Route::get('get_kelas_by_tingkat/{nisn}/{tingkat}', [
            'as' => 'getKelasByTingkat',
            'uses' => 'KelasController@getKelasByTingkat'
        ]);

        Route::get('filterizeDaftarSiswa/{kelas}', [
            'as' => 'getFilterSiswaByKelas',
            'uses' => 'ParserController@getFilterSiswaByKelas'
        ]);

        Route::get('filterKD/{mapel}/{tingkat?}', [
            'as' => 'filterKD',
            'uses' => 'ParserController@getFilterKD'
        ]);
    });

    Route::get('login', function() {
        return view('admin/login');
    });

    Route::get('dashboard', function() {
        return view('admin/dashboard');
    });

    Route::get('matapelajaran', [
        'uses' => 'MataPelajaranController@index',
        'as' => 'getMapel'
    ]);

    Route::get('matapelajaran/edit/{id}', [
        'uses' => 'MataPelajaranController@edit',
        'as' => 'getEditMapel'
    ]);

    Route::post('matapelajaran/new', [
        'uses' => 'MataPelajaranController@store',
        'as' => 'storeMapel'
    ]);

    Route::post('matapelajaran/edit/{id}', [
        'uses' => 'MataPelajaranController@update',
        'as' => 'updateMapel'
    ]);

    Route::delete('matapelajaran/delete/{id}', [
        'uses' => 'MataPelajaranController@destroy',
        'as' => 'deleteMapel'
    ]);

    Route::get('tahunajaran', array(
        'uses' => 'TahunAjaranController@index',
        'as' => 'getTahunAjaran'
    ));

    Route::get('tahunajaran/edit/{id}', 'TahunAjaranController@editView');

    Route::post('/tahunajaran/edit', array(
        'uses' => 'TahunAjaranController@edit',
        'as' => 'tahunAjaranDoEdit'
    ));

    Route::post('tahunajaran/new', [
        'as' => 'tambahThnAjaran',
        'uses' => 'TahunAjaranController@store'
        ]);

    Route::put('tahunajaran/editstatus/{id}', 'TahunAjaranController@editStatus');

    Route::delete('tahunajaran/delete/{id}', 'TahunAjaranController@destroy');

    Route::get('kelas', array(
        'uses' => 'KelasController@index',
        'as' => 'getKelasView'
    ));

    Route::get('kelas/edit/{kelas}', array(
        'uses' => 'KelasController@edit',
        'as' => 'getKelasEdit'
    ));

    Route::post('/kelas/edit/{kelas}', array(
        'uses' => 'KelasController@update',
        'as' => 'kelasDoEdit'
    ));

    Route::post('kelas/new', array(
        'uses' => 'KelasController@store',
        'as' => 'doStoreKelas'
    ));

    Route::delete('kelas/delete/{id}', 'KelasController@destroy');

    Route::get('daftarsiswa', [
        'uses' => 'SiswaController@index',
        'as' => 'getDaftarSiswa'
    ]);

    Route::get('daftarsiswa/profile/{nisn}', [
        'uses' => 'SiswaController@show',
        'as' => 'getProfileSiswa'
    ]);

    Route::get('daftarsiswa/create', [
        'uses' => 'SiswaController@create',
        'as' => 'createDaftarSiswa'
    ]);

    Route::post('daftarsiswa/store', [
        'uses' => 'SiswaController@store',
        'as' => 'storeDaftarSiswa'
    ]);

    Route::post('daftarsiswa/update/{nisn}', [
        'uses' => 'SiswaController@update',
        'as' => 'updateDaftarSiswa'
    ]);

    Route::get('daftarsiswa/edit/{nisn}', [
        'uses' => 'SiswaController@edit',
        'as' => 'editDaftarSiswa'
    ]);

    Route::delete('daftarsiswa/delete/{nisn}', [
        'uses' => 'SiswaController@destroy',
        'as' => 'deleteSiswa'
    ]);

    Route::get('kd', [
        'uses' => 'KDController@index',
        'as' => 'getKD'
    ]);

    Route::get('soal', function() {
        return view('admin/soal/view');
    });

    Route::get('soal/all', function() {
        return view('admin/soal/all');
    });

    Route::get('soal/id', function() {
        return view('admin/soal/detail');
    });

    Route::get('soal/add', function() {
        return view('admin/soal/insert');
    });

    Route::get('buatsoal', function() {
        return view('admin/buatsoal/view');
    });

    Route::get('hasilujian', function() {
        return view('admin/hasilujian/view');
    });

});

Route::group(['prefix' => 'user'], function() {

    Route::get('dashboard', function() {
        return view('user/dashboard');
    });

    Route::get('/ujian/code', function() {
        return view('soal/naskah');
    });

    Route::get('/profile/ubah-password', function() {
        return view('user/ubah-password');
    });

    Route::get('/profile/ubah-password', function() {
        return view('user/ubah-password');
    });

    Route::get('/profile', function() {
        return view('user/profile');
    });

    Route::get('/ujian', function() {
        return view('user/ujian');
    });

});

Route::get('test-mail', function() {
    Mail::send('emails.test', ['testVar' => 'testtesttest'], function ($message) {
        $message->from('alfredoeka@outlook.com', 'Alfredo E. Wibowo');
        $message->subject('A Test');
        $message->to('alfredowibowo@gmail.com');
    });
});
