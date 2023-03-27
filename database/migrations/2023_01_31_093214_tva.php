<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        // CREATION DE LA TABLE Tva
        Schema::create('Tva', function (Blueprint $table) {
            $table->id('id_tva')->nullable(false);
            $table->string('name_tva', 50)->nullable(false);
            $table->decimal('rate_tva')->nullable(false);
        });
    }

    public function down()
    {
        //
    }
};
