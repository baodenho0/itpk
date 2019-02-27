<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTuyendung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuyendung', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longtext('noidung');
            $table->boolean('noibat');
            $table->string('mota')->nullable();
            $table->string('tieude')->nullable();
            $table->string('hinhanh')->nullable();
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
        Schema::dropIfExists('tuyendung');
    }
}
