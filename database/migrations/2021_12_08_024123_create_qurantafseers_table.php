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
			$table->integer('arabic_id')->index('arabic_id');
			$table->string('resource');
			$table->string('status', 20);
			$table->integer('user_id');
			$table->integer('datasurah_id')->index('datasurah_id');
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
		Schema::drop('qurantafseers');
	}

}
