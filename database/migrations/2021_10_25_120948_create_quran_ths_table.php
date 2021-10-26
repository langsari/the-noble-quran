<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuranThsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quran_th', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('surah_id');
            $table->integer('verse_number');
            $table->mediumText('ayah_text');
            $table->text('audio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quran_th');
    }
}
