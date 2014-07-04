<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOtherMediasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('other_medias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('media_data');
			$enumAllow=array('video','sound','file');
			$table->enum('media_type', $enumAllow)->default('video');
			$table->string('name')->nullable();
			$table->string('description')->nullable();
			$table->integer('user_id')->unsigned();
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
		Schema::drop('other_medias');
	}

}
