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
            $table->string('product_name');
            $table->string('product_image');
            $table->integer('cate_id')->unsigned();
            $table->integer('factory_id')->unsigned();
            $table->float('price');
            $table->float('saleoff');
            $table->date('start_sale');
            $table->date('end_sale');
            $table->string('size_id', 10);
            $table->string('color_id', 10);
            $table->text('description');
            $table->text('content');
            $table->integer('point')->unsigned();
            $table->integer('point_count')->unsigned();
            $table->integer('status')->unsigned();
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
