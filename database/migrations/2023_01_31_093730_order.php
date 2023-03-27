<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // CREATION DE LA TABLE Order
        Schema::create('Order', function (Blueprint $table) {
            $table->id('id_order')->nullable(false);
            $table->string('name_order', 50)->nullable(false);
            $table->bigInteger('order_number')->nullable(false);
            $table->string('status', 50 )->nullable(false);
            $table->dateTime('date_purchase')->nullable(false);
            $table->foreignId('id_user')->nullable(false);
        });
    }

    public function down()
    {
        //
    }
};
