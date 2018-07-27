<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_players', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('answer_id')->unsigned();
            $table->integer('player_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('answer_id')->references('id')->on('answers')->onDelete('cascade');
            $table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_players');
    }
}
