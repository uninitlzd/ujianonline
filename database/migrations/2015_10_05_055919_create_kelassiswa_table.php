<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelassiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblKelasSiswa', function (Blueprint $table) {
            $table->increments('id');
            $tables = array('NISN', 'tahunAjaran', 'kelas');
            foreach($tables as $t) {
              $table->string($t);
            }
            $table->integer('flag');
            $table->integer('flagAktif');
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
        Schema::drop('tblKelasSiswa');
    }
}
