<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToQurantafseersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('qurantafseers', function(Blueprint $table)
		{
			$table->foreign('datasurah_id', 'fkqurantafseer')->references('id')->on('datasurahs')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('qurantafseers', function(Blueprint $table)
		{
			$table->dropForeign('fkqurantafseer');
		});
	}

}
