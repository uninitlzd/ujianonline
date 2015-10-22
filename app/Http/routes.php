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

    Route::get('login', function() {
        return view('admin/login');
    });

    Route::get('dashboard', function() {
        return view('admin/dashboard');
    });

    Route::get('matapelajaran', function() {
        return view('admin/matapelajaran/view');
    });

    Route::get('tahunajaran', function() {
        return view('admin/tahunajaran/view');
    });

    Route::get('kelas', function() {
        return view('admin/kelas/view');
    });

    Route::get('daftarsiswa', function() {
        return view('admin/daftarsiswa/view');
    });

    Route::get('daftarsiswa/insert', function() {
        return view('admin/daftarsiswa/insert');
    });

    Route::get('kd', function() {
        return view('admin/kd/view');
    });

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
