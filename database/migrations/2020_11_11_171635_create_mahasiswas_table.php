<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mhs',100);
            $table->char('npm_mhs',12);
            $table->char('jk_mhs',2);
            $table->string('tempat_lhr_mhs',50);
            $table->date('tgl_lhr_mhs');
            $table->char('no_hp_mhs',12);
            $table->string('email_mhs',100);
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
        Schema::dropIfExists('mahasiswas');
    }
}
