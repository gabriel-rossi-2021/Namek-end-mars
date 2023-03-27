<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        // CREATION DE LA TABLE Supplier
        Schema::create('Supplier', function (Blueprint $table) {
            $table->id('id_supplier')->nullable(false);
            $table->string('name_supplier', 50 )->nullable(false);
            $table->string('logo')->nullable(false);
        });
    }

    public function down()
    {
        //
    }
};
