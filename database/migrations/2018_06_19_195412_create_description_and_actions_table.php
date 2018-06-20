<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescriptionAndActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('description_and_actions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desc_id');
            $table->integer('next_desc_id');
            $table->integer('action_id')->default(0);
            $table->timestamps();
            $table->foreign('action_id')->references('action')->on('id');
            $table->foreign('desc_id')->references('description')->on('id');
            $table->foreign('next_desc_id')->references('description')->on('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('description_and_actions');
    }
}
