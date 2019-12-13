<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientRecetteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_recette', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->smallInteger('quantite');
            $table->bigInteger('unite_id')->unsigned()->nullable();
            $table->foreign('unite_id')->references('id')->on('unites')->onDelete('set null');
            $table->bigInteger('ingredient_id')->unsigned()->nullable();
            $table->foreign('ingredient_id')->references('id')->on('ingredients')->onDelete('set null');
            $table->bigInteger('recette_id')->unsigned()->nullable();
            $table->foreign('recette_id')->references('id')->on('recettes')->onDelete('set null');
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
