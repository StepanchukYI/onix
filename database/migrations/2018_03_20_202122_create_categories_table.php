<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'categories', function ( Blueprint $table )
		{
			$table->increments( 'id' );
			$table->string( 'title' );
			$table->unsignedInteger( 'main_category_id' )->nullable()->default( null );
			$table->string( 'slug' )->unique();
			$table->text( 'description' )->nullable()->default( null );
			$table->boolean( 'is_active' )->default(true);
			$table->string( 'meta_title' )->nullable()->default( null );
			$table->string( 'meta_keywords' )->nullable()->default( null );
			$table->text( 'meta_description' )->nullable()->default( null );
			$table->timestamps();

			$table->foreign( 'main_category_id' )->references( 'id' )->on( 'categories' );
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists( 'categories' );
	}
}
