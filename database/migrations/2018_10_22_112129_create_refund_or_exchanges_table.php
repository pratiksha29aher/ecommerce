<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefundOrExchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refund_or_exchanges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("branch_id")->index()->unsigned();
            $table->integer("customer_id")->index()->unsigned();
            $table->integer("invoice_id")->index()->unsigned();
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
        Schema::dropIfExists('refund_or_exchanges');
    }
}
