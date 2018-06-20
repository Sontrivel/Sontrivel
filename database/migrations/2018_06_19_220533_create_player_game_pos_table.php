<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerGamePosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_game_pos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desc_id');
            $table->integer('player_id');
            $table->timestamps();
            $table->foreign('player_id')->references('users')->on('id');
            $table->foreign('desc_id')->references('description')->on('id');
            $table->integer('slot_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_game_pos');
    }
}
