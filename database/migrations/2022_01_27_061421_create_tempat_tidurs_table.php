<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempatTidursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempat_tidurs', function (Blueprint $table) {
            $table->id();
            $table->decimal('tempat_tidur_rawat_inap', $precision = 8, $scale = 2);
            $table->decimal('tempat_tidur_intensive_care', $precision = 8, $scale = 2);
            $table->decimal('bor', $precision = 8, $scale = 2);
            $table->decimal('los', $precision = 8, $scale = 2);
            $table->decimal('toi', $precision = 8, $scale = 2);
            $table->decimal('bto', $precision = 8, $scale = 2);
            $table->decimal('gdr', $precision = 8, $scale = 2);
            $table->decimal('ndr', $precision = 8, $scale = 2);
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
        Schema::dropIfExists('tempat_tidurs');
    }
}
