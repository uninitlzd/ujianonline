<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblSoal', function (Blueprint $table) {
            $table->integer('idSoal')->primary();
            $table->integer('idKD');
            $table->integer('nomer');
            $table->text('soal');
            $tables = array('jawabanA', 'jawabanB', 'jawabanC', 'jawabanD', 'jawabanE', 'kunci', 'gambar');
            foreach($tables as $t) {
              $table->string($t);
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tblSoal');
    }
}
