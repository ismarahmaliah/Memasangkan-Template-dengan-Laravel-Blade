<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_jawaban', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->longText('isi');
                $table->timestamps();
                $table->unsignedBigInteger('jawaban_id')->nullable();
                $table->unsignedBigInteger('profil_id')->nullable();
    
                $table->foreign('jawaban_id')->references('id')->on('jawaban');
                $table->foreign('profil_id')->references('id')->on('profil');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentar_jawaban');
    }
}
