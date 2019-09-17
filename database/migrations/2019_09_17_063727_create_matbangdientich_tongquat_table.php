<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatbangdientichTongquatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matbangdientich_tongquat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_matbangdientich');
            $table->foreign('id_matbangdientich')->references('id')->on('matbangdientich');
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
        Schema::dropIfExists('matbangdientich_tongquat');
    }
}
