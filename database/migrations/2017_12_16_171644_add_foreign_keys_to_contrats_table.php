<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToContratsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contrats', function(Blueprint $table)
		{
			$table->foreign('agents_externes_id', 'fk_contrats_agents_externes1')->references('id')->on('agents_externes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('clients_id', 'fk_contrats_clients1')->references('id')->on('clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('produits_id', 'fk_contrats_produits1')->references('id')->on('produits')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('vehicules_id', 'fk_contrats_vehicules1')->references('id')->on('vehicules')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contrats', function(Blueprint $table)
		{
			$table->dropForeign('fk_contrats_agents_externes1');
			$table->dropForeign('fk_contrats_clients1');
			$table->dropForeign('fk_contrats_produits1');
			$table->dropForeign('fk_contrats_vehicules1');
		});
	}

}
