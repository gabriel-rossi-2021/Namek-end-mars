<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // CREATION DE LA TABLE Discount
        Schema::create('Discount', function (Blueprint $table) {
            $table->id('id_discount')->nullable(false);
            $table->string('name_discount', 50)->nullable(false);
            $table->integer('percentage')->nullable(false);
            $table->string('status', 50 )->nullable(false);
            $table->integer('discount_period')->nullable(false);
        });
    }

    public function down()
    {
        //
    }
};
