<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContratsHasOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contrats_has_options', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('contrats_id')->index('fk_contrats_has_options_contrats1_idx');
			$table->integer('options_id')->index('fk_contrats_has_options_options1_idx');
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
		Schema::drop('contrats_has_options');
	}

}
