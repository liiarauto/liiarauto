<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssureursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assureurs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nom', 45);
			$table->string('adresse', 45);
			$table->string('contact', 45);
			$table->string('email', 45);
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
		Schema::drop('assureurs');
	}

}
