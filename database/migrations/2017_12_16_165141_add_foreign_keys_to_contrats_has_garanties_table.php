<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToContratsHasGarantiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contrats_has_garanties', function(Blueprint $table)
		{
			$table->foreign('contrats_id', 'fk_contrats_has_garanties_contrats1')->references('id')->on('contrats')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('garanties_id', 'fk_contrats_has_garanties_garanties1')->references('id')->on('garanties')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contrats_has_garanties', function(Blueprint $table)
		{
			$table->dropForeign('fk_contrats_has_garanties_contrats1');
			$table->dropForeign('fk_contrats_has_garanties_garanties1');
		});
	}

}
