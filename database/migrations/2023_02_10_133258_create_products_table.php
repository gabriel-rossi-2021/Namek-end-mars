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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id_product');
            $table->string('name_product', 50);
            $table->longText('description');
            $table->string('image_product');
            $table->integer('size');
            $table->decimal('thc_rate');
            $table->decimal('cbd_rate');
            $table->string('culture', 50);
            $table->decimal('price_ht',9,3);
            $table->integer('available');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id_category')->on('categories')->onDelete('cascade');

            // ACTIVER LES CONTRAINTES DE LA CLE ETRANGERE
            Schema::enableForeignKeyConstraints();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            ;
            // DESACTIVER LES CONTRAINTES
            Schema::disableForeignKeyConstraints();

            $table->dropForeign(['category_id']);
        });
    }
};
