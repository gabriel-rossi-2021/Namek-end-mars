<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        // CREATION DE LA TABLE UnderCategory
        Schema::create('Under_category', function (Blueprint $table) {
            $table->id('id_under_category')->nullable(false);
            $table->string('name_under_category', 50)->nullable(false);
            $table->string('description_under_category', 255 )->nullable(false);
            $table->string('image_under_category');
            $table->foreignId('id_category')->nullable(false);
        });
    }

    public function down()
    {
        //
    }
};
