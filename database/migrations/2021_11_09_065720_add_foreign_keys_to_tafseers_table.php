<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTafseersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tafseers', function(Blueprint $table)
		{
			$table->foreign('datasurah_id', 'fktafseer')->references('id')->on('datasurahs')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tafseers', function(Blueprint $table)
		{
			$table->dropForeign('fktafseer');
		});
	}

}
