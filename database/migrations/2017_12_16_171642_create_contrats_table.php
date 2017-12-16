<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContratsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contrats', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('numero_de_police', 45)->nullable();
			$table->string('code', 45)->nullable();
			$table->string('date_de_prise_effet', 45)->nullable();
			$table->string('date_de_fin', 45)->nullable();
			$table->string('type_du_contrat', 45)->nullable();
			$table->integer('prix')->nullable();
			$table->integer('vehicules_id')->index('fk_contrats_vehicules1_idx');
			$table->integer('produits_id')->index('fk_contrats_produits1_idx');
			$table->integer('clients_id')->index('fk_contrats_clients1_idx');
			$table->integer('agents_externes_id')->index('fk_contrats_agents_externes1_idx');
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
		Schema::drop('contrats');
	}

}
