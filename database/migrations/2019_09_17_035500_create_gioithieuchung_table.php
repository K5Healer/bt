<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGioithieuchungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gioithieuchung', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('content');
            $table->string('tenduan');
            $table->string('chudautu');
            $table->string('diachi');
            $table->string('quymo');
            $table->string('dientichxaydung');
            $table->string('dientichdichvu');
            $table->string('dientichkhuonvien');
            $table->string('tongdientich');
            $table->string('matdoxaydung');
            $table->string('dientichsandexe');
            $table->string('dự kiến bàn giao');
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
        Schema::dropIfExists('gioithieuchung');
    }
}
