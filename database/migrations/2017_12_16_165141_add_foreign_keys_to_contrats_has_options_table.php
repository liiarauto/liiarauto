<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToContratsHasOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contrats_has_options', function(Blueprint $table)
		{
			$table->foreign('contrats_id', 'fk_contrats_has_options_contrats1')->references('id')->on('contrats')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('options_id', 'fk_contrats_has_options_options1')->references('id')->on('options')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contrats_has_options', function(Blueprint $table)
		{
			$table->dropForeign('fk_contrats_has_options_contrats1');
			$table->dropForeign('fk_contrats_has_options_options1');
		});
	}

}
