<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // CREATION DE LA TABLE Get (liaison entre User et Temporary)
        Schema::create('Get', function (Blueprint $table) {
            $table->id('id_get')->nullable(false);
            $table->foreignId('id_user')->nullable(false);
            $table->foreignId('id_temporary')->nullable(false);
        });
    }

    public function down()
    {
        //
    }
};
