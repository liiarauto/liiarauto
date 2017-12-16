<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssureurHasGarantiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assureur_has_garanties', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('garanties_id')->index('fk_assureur_has_garanties_garanties1_idx');
			$table->integer('assureurs_id')->index('fk_assureur_has_garanties_assureurs1_idx');
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
		Schema::drop('assureur_has_garanties');
	}

}
