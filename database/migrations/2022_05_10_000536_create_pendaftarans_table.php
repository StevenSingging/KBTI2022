<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->nullable();
            $table->string('pilihan1');
            $table->string('pilihan2');
            $table->string('nama_lengkap');
            $table->string('tgl_lahir');
            $table->string('jk');
            $table->string('agama');
            $table->string('asal_skh');
            $table->string('no_ijz');
            $table->string('jalur');
            $table->string('nama_ortu');
            $table->string('tgl_lahir_ortu');
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->integer('no_telp');
            $table->string('kk');
            $table->string('raport');
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
        Schema::dropIfExists('pendaftarans');
    }
}
