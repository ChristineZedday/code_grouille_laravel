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
            $table->bigInteger('recette_id')->unsigned()->nullable();
            $table->foreign('recette_id')->references('id')->on('recettes');
            $table->bigInteger('actu_id')->unsigned()->nullable();
            $table->foreign('actu_id')->references('id')->on('actus');
            $table->bigInteger('insecte_id')->unsigned()->nullable();
            $table->foreign('insecte_id')->references('id')->on('insectes');

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
