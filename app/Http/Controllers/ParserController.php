<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\KelasSiswa;
use App\Siswa;
use App\KD;
use App\MataPelajaran;

class ParserController extends Controller
{

    public function getFilterSiswaByKelas($kelas)
    {
        $data = KelasSiswa::join('tblsiswa', 'tblkelassiswa.nisn', '=', 'tblsiswa.nisn')->where('kelas', $kelas)->get();
        return view('admin/parsed/filteredsiswabykelas')->with('data', $data);
    }

    public function getFilterKD($mapel, $tingkat = null)
    {
        if($tingkat != null) {
            $data = KD::where(['idMapel' => $mapel, 'tingkat' => $tingkat])->get();
            
            return view('admin/parsed/filteredKD')->with('data', $data);
        } else {
            $data = KD::where('idMapel', $mapel)->get();
            return view('admin/parsed/filteredKD')->with('data', $data);
        }
    }

}
