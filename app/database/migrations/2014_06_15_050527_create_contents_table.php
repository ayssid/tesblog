<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contents', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('title', 255);
                        $table->text('introtext');
                        $table->text('fulltext');
                        $table->integer('created_by', false, true);
                        $table->integer('updated_by', false, true);
                        $table->string('image', 255);
                        $table->integer('category_id', false, true);
			$table->timestamps();
                        
                        $table->foreign('category_id')->references('id')->on('categories');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contents');
	}

}
