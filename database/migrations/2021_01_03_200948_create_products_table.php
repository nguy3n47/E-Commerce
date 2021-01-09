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
            $table->increments('pro_id');
            $table->string('pro_name')->unique();
            $table->string('pro_slug')->index();
            $table->string('pro_sku')->nullable();
            $table->integer('pro_quantity')->default(0);
            $table->integer('pro_category_id')->default(0)->index();
            $table->integer('pro_price')->default(0);
            $table->tinyInteger('pro_sale')->default(0);
            $table->tinyInteger('pro_active')->default(1)->index();
            $table->longText('pro_description')->nullable();
            $table->string('pro_thumbnail')->nullable();
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
