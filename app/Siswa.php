<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'tblsiswa';
    protected $hidden = ['passwordLogin', 'remember_token'];
}
