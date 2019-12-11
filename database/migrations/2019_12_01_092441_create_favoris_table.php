<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoris', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->BigInteger('user_id')->unsigned();
            $table->BigInteger('recette_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade') ->onUpdate('cascade');
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
        Schema::dropIfExists('favoris');
    }
}
