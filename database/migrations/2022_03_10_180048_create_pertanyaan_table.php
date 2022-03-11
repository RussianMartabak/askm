<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('id_pertanyaan');
            $table->string('Judul',45);
            $table->text('content');
            $table->string('thumbnail',45);
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('kategori_id')->references('id_kategori')->on('kategori');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id_user')->on('user');
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
        Schema::dropIfExists('pertanyaan');
    }
}
