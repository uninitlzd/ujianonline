<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $table = 'tblmapel';
    protected $fillable = array('mapel');    
}