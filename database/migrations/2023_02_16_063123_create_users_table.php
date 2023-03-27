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
        Schema::create('users', function (Blueprint $table) {
            // CREATION DE LA TABLE USER
            $table->id('id_users')->nullable(false);
            $table->string('last_name', 50)->nullable(false);
            $table->string('first_name', 50)->nullable(false);
            $table->string('title', 50)->nullable(false);
            $table->date('birth_date')->nullable(false);
            $table->integer('phone_number')->nullable(false);

            $table->string('username', 50 )->nullable(false);
            $table->string('email', 255 )->nullable(false);
            $table->longText('password')->nullable(false);
            $table->rememberToken();
            $table->timestamps();

            // CLE ETRANGERE
            $table->unsignedBigInteger('function_id');
            $table->foreign('function_id')->references('id_function')->on('function')->onDelete('cascade');

            $table->unsignedBigInteger('address_id');
            $table->foreign('address_id')->references('id_address')->on('address')->onDelete('cascade');

            // ACTIVER LES CONTRAINTES DE LA CLE ETRANGERE
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
        Schema::table('users', function (Blueprint $table){
            // DESACTIVER LES CONTRAINTES
            Schema::disableForeignKeyConstraints();

            $table->dropForeign(['function_id']);
        });
    }
};
