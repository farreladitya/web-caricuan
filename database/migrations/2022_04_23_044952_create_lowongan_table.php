<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongan', function (Blueprint $table) {
            $table->id();

            // $table->unsignedBigInteger('id_users');
            // $table->foreign('id_users')->references('id')->on('users')->default('null');

            $table->string('jabatan');
            $table->string('lokasi');
            $table->text('tentang_lowongan');
            $table->text('persyaratan');
            $table->string('gaji');
            $table->string('perusahaan');
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
        Schema::dropIfExists('lowongan');
    }
}
