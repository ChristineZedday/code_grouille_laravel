<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentairesActusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires_actu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('actu_id')->references('id')->on('actus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentaires_actu');
    }
}
