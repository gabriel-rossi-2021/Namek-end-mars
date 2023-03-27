<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // CREATION DE LA TABLE Order_payment
        Schema::create('Order_payment', function (Blueprint $table) {
            $table->id('id_order_payment')->nullable(false);
            $table->bigInteger('order_number')->nullable(false);
            $table->string('method', 50)->nullable(false);
            $table->dateTime('date_payment')->nullable(false);
            $table->decimal('price',9,3)->nullable(false);
        });
    }

    public function down()
    {
        //
    }
};
