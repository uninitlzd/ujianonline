<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Kelas;
use App\KelasSiswa;
use App\Siswa;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kelas::all();
        return view('admin/kelas/view')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                'kelas' => 'required|unique:tblkelas,kelas',
                'tingkat' => 'required'
            ]);

        Kelas::insert(['kelas' => $request->kelas, 'tingkat' => $request->tingkat]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kelas)
    {
        $data = Kelas::where('kelas', $kelas)->firstOrFail();
        return view('admin/kelas/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kelas)
    {
        $input = $request->all();
        $this->validate($request, [
                'kelas' => 'required|unique:tblkelas,kelas',
                'tingkat' => 'required'
            ]);
        $data = Kelas::where('kelas', $kelas)->update([
            'kelas' => $input['kelas'],
            'tingkat' => $input['tingkat']
        ]);
        return redirect(route('getKelasView'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kelas::where('kelas', $id)->delete();
        return back();
    }

    public function getKelasByTingkat($nisn, $tingkat)
    {
        $data = Kelas::where('tingkat', $tingkat)->select('kelas')->get();
        $kelasSiswa = KelasSiswa::where('NISN', $nisn)->select('kelas')->firstOrFail();
        return view('admin/parsed/getTingkat')->with(['data' => $data, 'kelasSiswa' => $kelasSiswa]);
    }
}
