<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDuannoibat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duannoibat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longtext('noidung');
            $table->boolean('noibat');
            $table->string('hinhanh');
            $table->string('tieude');
            $table->string('mota');
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
        Schema::dropIfExists('duannoibat');
    }
}
