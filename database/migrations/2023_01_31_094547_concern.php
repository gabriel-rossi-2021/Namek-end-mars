<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // CREATION DE LA TABLE Concern (liaison entre Order et Product)
        Schema::create('Concern', function (Blueprint $table) {
            $table->id('id_concern')->nullable(false);
            $table->foreignId('id_order')->nullable(false);
            $table->foreignId('id_product')->nullable(false);
        });
    }

    public function down()
    {
        //
    }
};
