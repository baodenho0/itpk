<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDuoiDuannoibat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duoi_duannoibat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longtext('noidung');
            $table->string('icon');
            $table->string('tieude');
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
        Schema::dropIfExists('duoi_duannoibat');
    }
}
