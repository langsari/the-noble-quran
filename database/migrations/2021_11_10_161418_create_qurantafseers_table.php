<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQurantafseersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('qurantafseers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 225);
			$table->text('qurantafseer');
			$table->string('surah_name', 100);
			$table->integer('datasurah_id')->index('datasurah_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('qurantafseers');
	}

}
