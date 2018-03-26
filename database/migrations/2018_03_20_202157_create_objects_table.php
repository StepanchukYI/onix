<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'objects', function ( Blueprint $table )
		{
			$table->increments( 'id' );
			$table->unsignedInteger( 'category_id' );
			$table->string( 'title' );
			$table->string( 'slug' )->unique();
			$table->text( 'description' );
			$table->string( 'meta_title' )->nullable()->default( null );
			$table->string( 'meta_keywords' )->nullable()->default( null );
			$table->text( 'meta_description' )->nullable()->default( null );
			$table->timestamps();

			$table->foreign( 'category_id' )->references( 'id' )->on( 'categories' );
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists( 'objects' );
	}
}
