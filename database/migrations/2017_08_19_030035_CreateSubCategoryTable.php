<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->increments('subcategory_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->string('status');            
            $table->timestamps();
        });

        Schema::table('sub_categories', function($table) {
            $table->foreign('category_id')->references('category_id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
           Schema::dropIfExists('sub_categories');
    }
}
