<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        //CREATION DE LA TABLE Temporary
        Schema::create('Temporary', function (Blueprint $table) {
            $table->id('id_temporary')->nullable(false);
            $table->integer('reference_product')->nullable(false);
            $table->integer('quantity')->nullable(false);
        });
    }

    public function down()
    {
        //
    }
};
