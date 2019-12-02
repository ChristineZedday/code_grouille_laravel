<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentairesRecettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires_recettes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->text('texte');
            $table->bigInteger('recette_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('recette_id')->references('id')->on('recettes');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentaires_recettes');
    }
}
