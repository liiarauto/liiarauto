<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehiculesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicules', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('numero_immattriculation', 45);
			$table->string('marque', 45);
			$table->integer('nombre_de_places');
			$table->string('remorque', 45);
			$table->integer('valeur_neuve');
			$table->integer('valeur_venale');
			$table->string('annee_de_mise_en_circulation', 45);
			$table->integer('conducteurs_id')->index('fk_vehicules_conducteurs_idx');
			$table->integer('charges_utiles_id')->index('fk_vehicules_charges_utiles1_idx');
			$table->integer('energies_id')->index('fk_vehicules_energies1_idx');
			$table->integer('puissances_id')->index('fk_vehicules_puissances1_idx');
			$table->integer('zone_geographiques_id')->index('fk_vehicules_zone_geographiques1_idx');
			$table->integer('categories_id')->index('fk_vehicules_categories1_idx');
			$table->integer('genres_id')->index('fk_vehicules_genres1_idx');
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
		Schema::drop('vehicules');
	}

}
