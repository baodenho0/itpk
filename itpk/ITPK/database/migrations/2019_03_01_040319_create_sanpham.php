<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hinhanhchinh');
            $table->string('tieude');
            $table->integer('giatien');
            $table->longtext('thongsokythuat');
            $table->text('mota');
            $table->longtext('chitietsanpham');
            $table->text('cmtfb');
            $table->string('seo');
            $table->bigInteger('id_danhmuc')->unsigned();
            $table->foreign('id_danhmuc')->references('id')->on('danhmuc')->onDelete('cascade');
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
        Schema::dropIfExists('sanpham');
    }
}
