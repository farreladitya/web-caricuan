<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanmyfutureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planmyfuture', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');

            $table->text('soal');
            $table->text('jawaban');
            $table->integer('hasil_pmf');
            $table->dateTime('waktu_mulai');
            $table->dateTime('waktu_selesai');
            $table->dateTime('waktu_pengerjaan');
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
        Schema::dropIfExists('planmyfuture');
    }
}
