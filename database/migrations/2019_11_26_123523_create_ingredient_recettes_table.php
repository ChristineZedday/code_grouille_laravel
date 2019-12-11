<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientRecettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_recettes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->smallInteger('quantite');
            $table->bigInteger('unite_id')->unsigned();
            $table->foreign('unite_id')->references('id')->on('unites')->onDelete('cascade') ->onUpdate('cascade');
            $table->bigInteger('ingredient_id')->unsigned();
            $table->foreign('ingredient_id')->references('id')->on('ingredients')->onDelete('cascade') ->onUpdate('cascade');
            $table->bigInteger('recette_id')->unsigned();
            $table->foreign('recette_id')->references('id')->on('recettes')->onDelete('cascade') ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredient_recettes');
    }
}
