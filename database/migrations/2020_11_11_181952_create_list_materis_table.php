<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListMaterisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_materis', function (Blueprint $table) {
            $table->increments('id_materi');
            $table->integer('id_matkul')->unsigned();
            $table->foreign('id_matkul')->references('id_matkul')->on('matkuls');
            $table->string('judul_materi',100);
            $table->string('link_materi',500);
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
        Schema::dropIfExists('list_materis');
    }
}
