<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerTop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_top', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bannerdautrang');
            $table->string('logo');
            $table->string('hotline');
            $table->string('diachi');
            $table->string('email');
            $table->string('background');
            $table->string('slogan');
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
        Schema::dropIfExists('banner_top');
    }
}
