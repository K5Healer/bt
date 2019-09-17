<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGioithieuvitriDiadiemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gioithieuvitri_diadiem', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_gioithieuvitri')->unsigned();
            $table->foreign('id_gioithieuvitri')->references('id')->on('gioithieuvitri');
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
        Schema::dropIfExists('gioithieuvitri_diadiem');
    }
}
