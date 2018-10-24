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
            $table->longText('number');
            $table->integer("branch_id")->index()->unsigned();
            $table->integer("cateogary_id")->index()->unsigned();
            $table->integer("sub_cateogary_id")->index()->unsigned();
            $table->string('name');
            $table->float('purchase_price');
            $table->float('sales_price');
            $table->longText('description');
            $table->string('status');
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
