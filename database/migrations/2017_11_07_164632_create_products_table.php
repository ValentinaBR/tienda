<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('slug');
            $table->text('description');
            $table->string('extract', 300);
            $table->decimal('price', 5, 2);
            $table->string('image', 300);
            $table->boolean('visible');
           //*****unsigned(); brepresenta una llave foranea
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');
           //*****Cuando se borre una categoria se borran todos los productos relacionados con esta categoria
            $table->timestamps();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
