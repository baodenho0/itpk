<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDanhmuc2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhmuc2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tendanhmuc');
            $table->bigInteger('id_danhmuc2')->unsigned();
            $table->foreign('id_danhmuc2')->references('id')->on('danhmuc')->onDelete('cascade');
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
        Schema::dropIfExists('danhmuc2');
    }
}
