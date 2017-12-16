<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgentsExternesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agents_externes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('matricule', 45);
			$table->string('nom', 45);
			$table->string('prenom', 45);
			$table->string('date_de_naissance', 45);
			$table->string('sexe', 45);
			$table->string('adresse', 45);
			$table->string('email', 45)->nullable();
			$table->string('contact', 45);
			$table->string('status', 45);
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
		Schema::drop('agents_externes');
	}

}
