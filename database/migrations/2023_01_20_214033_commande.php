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
        Schema::create('Commande', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('user_id');
            $table->string('Description');
            $table->string('URL');
            $table->Integer('Quantité');
            $table->Integer('Prix');
            $table->index('user_id');
            $table->foreign('user_id')->references('Id_Client')->on('client');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Commande');
    }
};
