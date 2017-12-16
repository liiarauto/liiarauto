<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToZoneGeographiquesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('zone_geographiques', function(Blueprint $table)
		{
			$table->foreign('villes_id', 'fk_zone_geographiques_villes1')->references('id')->on('villes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('zone_geographiques', function(Blueprint $table)
		{
			$table->dropForeign('fk_zone_geographiques_villes1');
		});
	}

}
