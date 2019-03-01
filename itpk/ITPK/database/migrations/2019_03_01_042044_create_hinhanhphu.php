<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhanhphu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhanhphu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hinhanh');
            $table->string('seo');
            $table->bigInteger('id_sanpham')->unsigned();
            $table->foreign('id_sanpham')->references('id')->on('sanpham')->onDelete('cascade');
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
        Schema::dropIfExists('hinhanhphu');
    }
}
