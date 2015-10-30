<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUjianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblUjian', function (Blueprint $table) {
            $table->increments('idUjian');
            $table->string('kodeSoal');
            $table->dateTime('tglUjian');
            $table->integer('idKelasSiswa');
            $tables = array('soal', 'token', 'jawabanSiswa', 'keterangan');
            foreach($tables as $t) {
              $table->string($t);
            }
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tblUjian');
    }
}
