<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaeresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kaeres', function (Blueprint $table) {
            $table->bigIncrements('id_krs');
            $table->string('nama_mhskrs');
            $table->string('nim_mhskrs');
            $table->string('prodi_mhskrs');
            $table->string('fakultas_mhskrs');
            $table->string('semester_mkkrs');
            $table->string('kode_mkkrs');
            $table->string('nama_mkkrs');
            $table->string('sks_mkkrs');
            $table->string('pengampu_mkkrs');
            $table->string('dosen_walimhskrs');
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
        Schema::dropIfExists('kaeres');
    }
}
