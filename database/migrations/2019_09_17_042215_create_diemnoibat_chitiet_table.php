<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiemnoibatChitietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diemnoibat_chitiet', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_diemnoibat');
            $table->foreign('id_diemnoibat')->references('id')->on('diemnoibat');
            $table->string('title');
            $table->string('content');
            $table->string('image');
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
        Schema::dropIfExists('diemnoibat_chitiet');
    }
}
