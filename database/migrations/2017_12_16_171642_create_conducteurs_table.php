<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConducteursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conducteurs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nom', 45);
			$table->string('prenom', 45);
			$table->date('date_de_naissance');
			$table->boolean('sexe');
			$table->date('date_obtention_du_permis');
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
		Schema::drop('conducteurs');
	}

}
