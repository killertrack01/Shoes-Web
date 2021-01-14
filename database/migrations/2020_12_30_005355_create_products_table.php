<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('products_name');
            $table->string('color');
            $table->double('price');
            $table->integer('size');
            $table->string('description');
            $table->integer('status');
            $table->double('discord');
            $table->string('remaining_amount');
            $table->foreignId('categories_id')->constrained('categories');
            $table->foreignId('brands_id')->constrained('brands');
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
        Schema::dropIfExists('products');
    }
}
