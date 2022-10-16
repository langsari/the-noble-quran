<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatasurahsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('datasurahs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('th_name', 191);
			$table->string('surah_name', 50);
			$table->string('surah_arab', 50);
			$table->integer('whole_ayah');
			$table->string('type', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('datasurahs');
	}

}
