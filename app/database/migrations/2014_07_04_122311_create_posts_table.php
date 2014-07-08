<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('head');
			$table->string('slug');
			$table->string('media')->nullable();
			$table->text('content')->nullable();
			$enumAllow=array('post','page','event');
			$table->enum('type', $enumAllow)->default('post');
			$table->timestamp('event_start')->nullable();
			$table->timestamp('event_end')->nullable();
			$table->integer('user_id')->unsigned();
			$table->integer('cat_id')->unsigned()->default(1);
			$table->boolean('active')->default(true);
			$table->boolean('deleted')->default(false);
			$table->boolean('slider')->default(false);
			$table->boolean('sidebar')->default(true);
			$table->timestamp('publish_date');
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
		Schema::drop('posts');
	}

}
