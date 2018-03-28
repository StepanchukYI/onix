<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('object_attributes', function (Blueprint $table) {
	        $table->increments('id');
	        $table->integer('object_id');
	        $table->integer('attribute_id');
	        $table->integer('attribute_value_id')->nullable()->default(null);
	        $table->string('value')->nullable()->default(null);
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
        Schema::dropIfExists('object_attributes');
    }
}
