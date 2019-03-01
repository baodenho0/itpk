<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhanhphu2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhanhphu2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hinhanh');
            $table->string('seo');
            $table->bigInteger('id_sanpham2')->unsigned();
            $table->foreign('id_sanpham2')->references('id')->on('sanpham2')->onDelete('cascade');
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
        Schema::dropIfExists('hinhanhphu2');
    }
}
