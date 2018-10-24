<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRerurnOrExchangeProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rerurn_or_exchange_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("refund_id")->index()->unsigned();
            $table->integer("product_id")->index()->unsigned();
            $table->integer("quantity");
            $table->integer("total_amount");
            $table->longText("reason");
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
        Schema::dropIfExists('rerurn_or_exchange_products');
    }
}
