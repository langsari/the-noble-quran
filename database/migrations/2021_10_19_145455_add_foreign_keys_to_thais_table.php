<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToThaisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('thais', function(Blueprint $table)
		{
			$table->foreign('arabic_id', 'fktafseertext')->references('arabic_id')->on('arabics')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('arabic_id', 'fktran')->references('arabic_id')->on('arabics')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('thais', function(Blueprint $table)
		{
			$table->dropForeign('fktafseertext');
			$table->dropForeign('fktran');
		});
	}

}
