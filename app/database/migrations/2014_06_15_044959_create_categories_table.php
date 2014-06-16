<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('title', 255);
                        $table->string('name', 255);
                        $table->string('image', 255);
                        $table->text('description');
                        $table->tinyinteger('published', false, false);
                        $table->integer('editor', false, true);
                        $table->integer('updated_by', false, true);
                        $table->integer('created_by', false, true);
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
		Schema::drop('categories');
	}

}
