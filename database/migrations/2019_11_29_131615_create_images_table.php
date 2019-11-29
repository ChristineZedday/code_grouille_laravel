<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('chemin_image');
            $table->bigInteger('recette_id')->unsigned();
            $table->foreign('recette_id')->references('id')->on('recettes')->nullable;
            $table->bigInteger('actu_id')->unsigned();
            $table->foreign('actu_id')->references('id')->on('actus')->nullable;
            $table->bigInteger('insecte_id')->unsigned();
            $table->foreign('insecte_id')->references('id')->on('insectes')->nullable;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
