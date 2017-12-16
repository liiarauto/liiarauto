<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarificationRcsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tarification_rcs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('garanties_souscrites', 45)->unique('garanties_souscrites_UNIQUE');
			$table->integer('prix');
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
		Schema::drop('tarification_rcs');
	}

}
