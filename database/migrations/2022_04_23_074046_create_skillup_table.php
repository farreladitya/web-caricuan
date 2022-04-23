<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skillup', function (Blueprint $table) {
            $table->id();
            $table->string('nama_skillup');
            $table->string('deskripsi_skillup');
            $table->string('instansi');
            $table->string('link_video');
            $table->dateTime("start_date");
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
        Schema::dropIfExists('skillup');
    }
}
