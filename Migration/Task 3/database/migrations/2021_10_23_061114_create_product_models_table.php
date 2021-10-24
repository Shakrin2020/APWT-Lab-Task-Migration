<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_models', function (Blueprint $table) {
            $table-> increments ('p_id');
            $table-> string ('p_name', 20);
            $table-> integer ('p_code');

            $table-> string ('p_desc', 20);
            $table-> string ('p_category', 20);
            $table-> float ('p_price', 8, 2);
            $table-> integer ('p_quantity');

            $table-> date ('p_stock_date');
            $table-> float ('p_rating', 8,2);
            $table-> integer ('p_purchased');
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
        Schema::dropIfExists('product_models');
    }
}
