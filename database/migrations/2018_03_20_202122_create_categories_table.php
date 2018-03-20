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
        Schema::create('categories', function (Blueprint $table) {
	        $table->increments('id');
	        $table->string('title')->unique();
	        $table->string('slug')->unique();
	        $table->text('description')->nullable()->default(null);
	        $table->boolean('is_active');
	        $table->string('meta_title')->nullable()->default(null);
	        $table->string('meta_keywords')->nullable()->default(null);
	        $table->text('meta_description')->nullable()->default(null);
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
        Schema::dropIfExists('categories');
    }
}
