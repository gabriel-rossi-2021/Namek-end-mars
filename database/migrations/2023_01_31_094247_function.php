<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // CREATION DE LA TABLE Function
        Schema::create('Function', function (Blueprint $table) {
            $table->id('id_function')->nullable(false);
            $table->string('name_function', 50 )->nullable(false);
        });
    }

    public function down()
    {
        //
    }
};
