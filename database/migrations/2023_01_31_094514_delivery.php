<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // CREATION DE LA TABLE Delivery
        Schema::create('Delivery', function (Blueprint $table) {
            $table->id('id_delivery')->nullable(false);
            $table->decimal('delivery_cost',9,3)->nullable(false);
            $table->string('name_transporter', 50)->nullable(false);
            $table->date('sent_date')->nullable(false);
            $table->date('estimate_date')->nullable(false);
            $table->bigInteger('follow_number')->nullable(false);
            $table->string('follow_url', 255)->nullable(false);
            $table->foreignId('id_order')->nullable(false);
        });
    }

    public function down()
    {
        //
    }
};
