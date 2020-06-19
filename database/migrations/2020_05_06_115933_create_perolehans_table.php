<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerolehansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perolehans', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->Integer('donatur_id')->references('id')->on('donaturs')->onDelete('restrict');
            $table->Integer('kegiatan_id')->references('id')->on('kegiatans')->onDelete('restrict');
            $table->date('tgl_donasi');
            $table->string('nama_donasi');
            $table->string('jml_donasi');
            $table->string('total_donasi');
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
        Schema::dropIfExists('perolehans');
    }
}
