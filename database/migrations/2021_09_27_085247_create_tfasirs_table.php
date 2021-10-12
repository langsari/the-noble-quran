<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tfasirs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('url_th');
            $table->longText('url_en');
            $table->mediumText('description_th');
            $table->mediumText('description_en');
            $table->integer('surah_id')->unsigned();
            $table->integer('user_id')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tfasirs');
    }
}
