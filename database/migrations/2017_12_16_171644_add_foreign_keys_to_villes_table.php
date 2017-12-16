<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVillesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('villes', function(Blueprint $table)
		{
			$table->foreign('localites_id', 'fk_villes_localites1')->references('id')->on('localites')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('villes', function(Blueprint $table)
		{
			$table->dropForeign('fk_villes_localites1');
		});
	}

}
