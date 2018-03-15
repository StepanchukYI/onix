<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
	        $table->increments( 'id' );
	        $table->integer( 'parent_id' )->unsigned()->nullable();
	        $table->string( 'title' );
	        $table->string( 'slug' );
	        $table->boolean( 'is_active' )->nullable()->default( 1 );
	        $table->integer( 'position' )->nullable()->default( 1 );
	        $table->string( 'page_position' )->nullable();
	        $table->string('image')->nullable()->default(null);
	        $table->string('style_class')->nullable()->default(null);
	        $table->timestamps();

	        $table->foreign('parent_id')->references('id')->on('menus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
