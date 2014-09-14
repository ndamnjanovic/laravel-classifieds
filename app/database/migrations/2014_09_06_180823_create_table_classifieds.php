<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClassifieds extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('classifieds', function($table)
    {
        $table->increments('id');
        $table->text('title');
        $table->text('description');
        $table->text('contact_person');
        $table->text('contact_phone');       
        $table->boolean('is_approved')->default(false);
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
		Schema::drop('classifieds');
	}

}
