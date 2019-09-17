<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhoanvayTientrinhtraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khoanvay_tientrinhtra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_khoanvay')->unsigned();
            $table->foreign('id_khoanvay')->references('id')->on('khoanvay');
            $table->string('content');
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
        Schema::dropIfExists('khoanvay_tientrinhtra');
    }
}
