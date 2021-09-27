<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerseTranslatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verse_translates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('translate_th');
            $table->mediumText('translate_en')->nullable();
            $table->integer('surah_id')->unsigned();
            $table->integer('verse_number')->unsigned();
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
        Schema::dropIfExists('verse_translates');
    }
}
