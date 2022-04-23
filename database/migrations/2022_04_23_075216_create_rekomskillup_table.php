<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekomskillupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekomskillup', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');

            $table->unsignedBigInteger('id_skillup');
            $table->foreign('id_skillup')->references('id')->on('skillup');

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
        Schema::dropIfExists('rekomskillup');
    }
}
