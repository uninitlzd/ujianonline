<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblNilai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kodeSoal');
            $tables = array('idKelasSiswa', 'jawabanBenar', 'jawabanSalah', 'nilai');
            foreach($tables as $t) {
              $table->integer($t);
            }
            $table->dateTime('tglUjian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tblNilai');
    }
}
