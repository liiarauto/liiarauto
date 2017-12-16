<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAssureurHasGarantiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('assureur_has_garanties', function(Blueprint $table)
		{
			$table->foreign('assureurs_id', 'fk_assureur_has_garanties_assureurs1')->references('id')->on('assureurs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('garanties_id', 'fk_assureur_has_garanties_garanties1')->references('id')->on('garanties')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('assureur_has_garanties', function(Blueprint $table)
		{
			$table->dropForeign('fk_assureur_has_garanties_assureurs1');
			$table->dropForeign('fk_assureur_has_garanties_garanties1');
		});
	}

}
