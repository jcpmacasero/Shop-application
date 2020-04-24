<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id')->unsigned();
            $table->integer('subcategory_id')->unsigned();            
            $table->string('featured_img');
            $table->string('product_name');
            $table->text('description');
            $table->double('price',15,2);
            $table->integer('quantity');
            $table->string('status');
            $table->timestamps();
        });

        Schema::table('products', function($table) {
            $table->foreign('subcategory_id')->references('subcategory_id')->on('sub_categories');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}