<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // CREATION DE LA TABLE Address
        Schema::create('Address', function (Blueprint $table) {
            $table->id('id_address')->nullable(false);
            $table->string('city', 50 )->nullable(false);
            $table->bigInteger('NPA' )->nullable(false);
            $table->string('street', 255)->nullable(false);
            $table->integer('street_number')->nullable(false);
            $table->string('country', 50 )->nullable(false);
        });
    }

    public function down()
    {
        //
    }
};
