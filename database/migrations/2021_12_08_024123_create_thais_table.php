<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThaisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thais', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('datasurah_id')->default(0)->index('datasurah_id');
			$table->integer('ayat')->default(0);
			$table->string('Text', 1900);
			$table->string('audio', 191);
			$table->text('tafseer');
			$table->string('status', 20);
			$table->timestamps(10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('thais');
	}

}
