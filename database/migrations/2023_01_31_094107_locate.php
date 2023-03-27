<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // CREATION DE LA TABLE Locate
        Schema::create('Locate', function (Blueprint $table) {
            $table->id('id_locate')->nullable(false);
            $table->foreignId('id_user')->nullable(false);
            $table->foreignId('id_address')->nullable(false);
        });
    }

    public function down()
    {
        //
    }
};
