<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKliniksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kliniks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_klinik');
            $table->string('penanggung_jawab');
            $table->string('alamat');
	        $table->integer('kecamatan_id');
            $table->integer('kelurahan_id');
            $table->string('no_telepon',20);
            $table->integer('jenislayanan_id');
            $table->integer('bpjs');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('images');
            $table->string('tahun_pendataan');
            $table->integer('status_akreditasi');
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
        Schema::dropIfExists('kliniks');
    }
}
