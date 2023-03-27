<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // CREATION DE LA TABLE Opinion
        Schema::create('Opinion', function (Blueprint $table) {
            $table->id('id_opinion')->nullable(false);
            $table->smallInteger('notation')->nullable(false);
            $table->string('title', 50)->nullable(false);
            $table->string('comment', 255 )->nullable(false);
            $table->foreignId('id_user')->nullable(false);
            $table->foreignId('id_product')->nullable(false);
        });
    }

    public function down()
    {
        //
    }
};
