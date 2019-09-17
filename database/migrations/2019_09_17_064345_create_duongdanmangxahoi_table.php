<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDuongdanmangxahoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duongdanmangxahoi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fblink');
            $table->string('zllink');
            $table->string('twtlink');
            $table->string('instalink');
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
        Schema::dropIfExists('duongdanmangxahoi');
    }
}
