<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVillesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('villes', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('libelle', 45);
			$table->integer('localites_id')->index('fk_villes_localites1_idx');
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
		Schema::drop('villes');
	}

}
