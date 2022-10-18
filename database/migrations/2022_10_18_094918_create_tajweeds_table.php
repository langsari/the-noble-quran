<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTajweedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tajweeds', function (Blueprint $table) {
            $table->id();
            $table->string('hukum', 200);
            $table->string('name', 200);
            $table->string('ayat', 200);
            $table->string('audio', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tajweeds');
    }
}
