<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientInsectesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_insectes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('insecte_id')->unsigned();
            $table->bigInteger('ingredient_id')->unsigned();
            $table->foreign('insecte_id')->references('id')->on('insectes') ->onDelete('cascade');;
            $table->foreign('ingredient_id')->references('id')->on('ingredients') ->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredient_insectes');
    }
}
