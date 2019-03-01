<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanpham2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hinhanhchinh');
            $table->string('tieude');
            $table->integer('giatien');
            $table->longtext('thongsokythuat');
            $table->text('mota');
            $table->longtext('chitietsanpham');
            $table->text('cmtfb');
            $table->string('seo');
            $table->bigInteger('id_danhmuc2')->unsigned();
            $table->foreign('id_danhmuc2')->references('id')->on('danhmuc2')->onDelete('cascade');
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
        Schema::dropIfExists('sanpham2');
    }
}
