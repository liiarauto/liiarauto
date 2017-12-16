<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContratsHasGarantiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contrats_has_garanties', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('contrats_id')->index('fk_contrats_has_garanties_contrats1_idx');
			$table->integer('garanties_id')->index('fk_contrats_has_garanties_garanties1_idx');
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
		Schema::drop('contrats_has_garanties');
	}

}
