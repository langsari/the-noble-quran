<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuranArTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quran_ar', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->smallint('DatabaseID');
            $table->integer('SuraID');
            $table->integer('VerseID');
            $table->Text('AyahText');
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
        Schema::dropIfExists('quran_ar');
    }
}
