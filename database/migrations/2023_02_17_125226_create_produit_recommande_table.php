<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit_recommande', function (Blueprint $table) {
            $table->unsignedBigInteger('produit_id');
            $table->foreign('produit_id')->references('id_product')->on('product')->onDelete('cascade');

            $table->unsignedBigInteger('produit_recommande_id');
            $table->foreign('produit_recommande_id')->references('id_product')->on('product')->onDelete('cascade');

            $table->primary(['produit_id', 'produit_recommande_id']);

            Schema::enableForeignKeyConstraints();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produit_recommande');
    }
};
