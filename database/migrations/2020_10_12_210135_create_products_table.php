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
            $table->id('code');
            $table->unsignedBigInteger('product_line_id');
            $table->string('name');
            $table->integer('scale');
            $table->string('vendor');
            $table->string('description');
            $table->integer('qty_in_stock');
            $table->bigInteger('buy_price');
            $table->string('msrp');

            $table->foreign('product_line_id')->references('id')->on('product_lines');
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
