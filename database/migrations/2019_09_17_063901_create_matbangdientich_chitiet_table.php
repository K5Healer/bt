<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatbangdientichChitietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matbangdientich_chitiet', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_matbangdientich');
            $table->foreign('id_matbangdientich')->references('id')->on('matbangdientich');
            $table->string('image');
            $table->string('dientich');
            $table->string('loai');
            $table->string('huongnha');
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
        Schema::dropIfExists('matbangdientich_chitiet');
    }
}
