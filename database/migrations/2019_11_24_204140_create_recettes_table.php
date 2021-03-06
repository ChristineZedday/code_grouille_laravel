<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recettes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('titre_recette');
            $table->text('description_recette');
            $table->mediumInteger('temps_preparation_recette');
            $table->mediumInteger('temps_cuisson_recette');
            $table->string('difficulte_recette');
            $table->string('appetence_recette');
            $table->text('deroule_recette');
            $table->tinyInteger('portion_recette');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recettes');
    }
}
