<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRumahSakitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rumah_sakits', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rumah_sakit');
            $table->string('alamat');
            $table->integer('kecamatan_id');
            $table->integer('kelurahan_id');
            $table->string('no_telepon', 12);
            $table->string('no_fax', 12);
            $table->string('email');
            $table->string('jenis_rs');
            $table->string('tipe_rs');
            $table->string('status_akreditasi');
            $table->integer('kepemilikan_id');
            $table->integer('jenislayanan_id');
            $table->integer('tempattidur_id');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('images');
            $table->integer('tahun_pendataan');
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
        Schema::dropIfExists('rumah_sakits');
    }
}
