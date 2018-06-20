<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependsFromTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('depends_from', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('action_id');
                $table->integer('game_id');
                $table->integer('chance_change');
                $table->timestamps();
                $table->foreign('action_id')->references('action')->on('id');
                $table->foreign('game_id')->references('game')->on('id');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('depends_from');
    }
}
