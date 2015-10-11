<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblSiswa', function (Blueprint $table) {
            $table->string('NISN')->unique()->primary();
            $tables = array('noInduk', 'nama', 'alamat', 'email', 'noTelp', 'passwordLogin', 'foto');
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
        Schema::drop('tblSiswa');
    }
}
