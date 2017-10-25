<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('name');
            $table->double('cost', 15, 8);
            $table->string('sup_id');
            $table->string('size');
            $table->string('category');
            $table->double('profit', 15, 8);
            $table->integer('quantity');
            $table->string('Rack_num');
            $table->double('sale_price', 15, 8);
            $table->double('Total_cost', 15, 8);
            $table->double('Total_saleprice', 15, 8);
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
