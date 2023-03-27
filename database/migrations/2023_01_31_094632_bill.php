<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // CREATION DE LA TABLE Bill
        Schema::create('Bill', function (Blueprint $table) {
            $table->id('id_bill')->nullable(false);
            $table->bigInteger('order_number')->nullable(false);
            $table->dateTime('bill_date')->nullable(false);
            $table->decimal('price_ht',9,3)->nullable(false);
            $table->decimal('price_ttc',9,3)->nullable(false);
            $table->decimal('price_tva',9,3)->nullable(false);
            $table->decimal('rate_tva')->nullable(false);
        });
    }

    public function down()
    {
        //
    }
};
