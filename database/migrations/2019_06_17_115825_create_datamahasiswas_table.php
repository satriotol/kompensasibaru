<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatamahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datamahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('foto');
            $table->string('nama');
            $table->string('kelas');
            $table->string('alamat');
            $table->integer('sakit');
            $table->integer('ijin');
            $table->integer('alpha');
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
        Schema::dropIfExists('datamahasiswa');
    }
}
