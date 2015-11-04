<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Siswa;
use App\KelasSiswa;
use App\TahunAjaran;
use App\Kelas;
use Validator;

class SiswaController extends Controller
{

    public function checkEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
              'email' => 'required|email|exists:tblsiswa,email'
        ]);

        if ($validator->fails()) {
            return response()->json(['flag' => 0]);
        }

        $data = Siswa::where('email', $request->input('email'))->first();
        return response()->json(['data' => $data, 'flag' => 1]);

        //return response()->json(['email' => $request->input('email')]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::get();
        $kelas = Kelas::select('kelas')->get();
        $ta = TahunAjaran::get();
        return view('admin/daftarsiswa/view')
                ->with([
                    'data' => $data,
                    'kelas' => $kelas,
                    'ta' => $ta
                ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/daftarsiswa/insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'nama' => 'required|unique:tblsiswa,nama',
                'nisn' => 'required|unique:tblsiswa,NISN',
                'no_induk' => 'required|unique:tblsiswa,noInduk',
                'kelas' => 'required',
                'alamat' => 'required',
                'email' => 'required|email|unique:tblsiswa,email',
                'no_telp' => 'required',
                'kelas' => 'required|exists:tblkelas,kelas',
                'tahun_ajaran' => 'required|exists:tbltahunajaran,tahunAjaran',
            ]);

        Siswa::insert([
            'nama' => $request->nama,
            'NISN' => $request->nisn,
            'noInduk' => $request->no_induk,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'noTelp' => $request->no_telp
        ]);

        KelasSiswa::insert([
            'NISN' => $request->nisn,
            'tahunAjaran' => $request->tahun_ajaran,
            'kelas' => $request->kelas,
        ]);

        return redirect(route('getDaftarSiswa'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nisn)
    {
        $data = Siswa::where('NISN', $nisn)->firstOrFail();
        return view('admin/daftarsiswa/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nisn)
    {
        $data = Siswa::join('tblkelassiswa', 'tblsiswa.NISN' ,'=', 'tblkelassiswa.NISN')
                    ->join('tblkelas', 'tblkelassiswa.kelas', '=', 'tblkelas.kelas')
                    ->where('tblsiswa.NISN', $nisn)
                    ->firstOrFail();
        $dataTA = TahunAjaran::get();
        return view('admin/daftarsiswa/edit')->with(['data' => $data, 'dataTA' => $dataTA]);
        //return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nisn)
    {
        $this->validate($request, [
            'name' => 'required',
            'NISN' => 'required',
            'noInduk' => 'required',
            'email' => 'required|email',
            'noTelp' => 'required',
            'alamat' => 'required',
            'tahunAjaran' => 'required',
            'kelas' => 'required',
        ]);

        Siswa::where('NISN', $nisn)->update([
            'nama' => $request->name,
            'NISN' => $request->NISN,
            'noInduk' => $request->noInduk,
            'email' => $request->email,
            'noTelp' => $request->noTelp,
            'alamat' => $request->alamat,
        ]);

        KelasSiswa::where('NISN', $nisn)->update([
            'NISN' => $request->NISN,
            'tahunAjaran' => $request->tahunAjaran,
            'kelas' => $request->kelas
        ]);

        return redirect(route('getDaftarSiswa'));

        //return response(['req' => $request->all(), 'nisn' => $nisn]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nisn)
    {
        Siswa::where('NISN', $nisn)->delete();
        return redirect(route('getDaftarSiswa'));
    }
}
