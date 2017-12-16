<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateZoneGeographiquesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zone_geographiques', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('code', 45)->unique('code_UNIQUE');
			$table->integer('villes_id')->index('fk_zone_geographiques_villes1_idx');
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
		Schema::drop('zone_geographiques');
	}

}
