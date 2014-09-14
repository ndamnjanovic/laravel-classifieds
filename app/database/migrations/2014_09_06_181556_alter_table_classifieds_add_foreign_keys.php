<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableClassifiedsAddForeignKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('classifieds', function($table){
      $table->unsignedInteger('classified_category_id')->nullable();
      $table->foreign('classified_category_id')->references('id')->on('classified_categories');      
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
    Schema::table('classifieds', function($table){
      $table->dropForeign('classifieds_classified_category_id_foreign');
      $table->dropColumn('classified_category_id');      
    });
	}

}
