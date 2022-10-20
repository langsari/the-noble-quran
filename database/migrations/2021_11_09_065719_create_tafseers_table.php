<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTafseersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tafseers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 150);
			$table->string('youtubeId', 11);
			$table->integer('datasurah_id')->index('datasurah_id');
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
		Schema::drop('tafseers');
	}

}
