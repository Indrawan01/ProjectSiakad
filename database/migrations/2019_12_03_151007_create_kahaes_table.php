<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKahaesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kahaes', function (Blueprint $table) {
            $table->bigIncrements('id_khs');
            $table->string('nama_mhskhs');
            $table->string('nim_mhskhs');
            $table->string('prodi_mhskhs');
            $table->string('fakultas_mhskhs');
            $table->string('semester_mkkhs');
            $table->string('kode_mkkhs');
            $table->string('nama_mkkhs');
            $table->string('sks_mkkhs');
            $table->string('pengampu_mkkhs');
            $table->string('dosen_walimhskhs');
            $table->integer('nilai_mk');
            $table->integer('nilai_total');
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
        Schema::dropIfExists('kahaes');
    }
}
