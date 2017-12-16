<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVehiculesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vehicules', function(Blueprint $table)
		{
			$table->foreign('categories_id', 'fk_vehicules_categories1')->references('id')->on('categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('charges_utiles_id', 'fk_vehicules_charges_utiles1')->references('id')->on('charges_utiles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('conducteurs_id', 'fk_vehicules_conducteurs')->references('id')->on('conducteurs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('energies_id', 'fk_vehicules_energies1')->references('id')->on('energies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('genres_id', 'fk_vehicules_genres1')->references('id')->on('genres')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('puissances_id', 'fk_vehicules_puissances1')->references('id')->on('puissances')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('zone_geographiques_id', 'fk_vehicules_zone_geographiques1')->references('id')->on('zone_geographiques')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vehicules', function(Blueprint $table)
		{
			$table->dropForeign('fk_vehicules_categories1');
			$table->dropForeign('fk_vehicules_charges_utiles1');
			$table->dropForeign('fk_vehicules_conducteurs');
			$table->dropForeign('fk_vehicules_energies1');
			$table->dropForeign('fk_vehicules_genres1');
			$table->dropForeign('fk_vehicules_puissances1');
			$table->dropForeign('fk_vehicules_zone_geographiques1');
		});
	}

}
