<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageInsecteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_insectes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->bigInteger('image_id')->unsigned();
            $table->foreign('image_id')->references('id')->on('insectes')->onDelete('cascade') ->onUpdate('cascade');

            $table->bigInteger('insecte_id')->unsigned();
            $table->foreign('insecte_id')->references('id')->on('insectes')->onDelete('cascade') ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_insectes');
    }
}
