<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friendlist', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_1');
            $table->integer('id_2');
            $table->integer('accepted'); // 0-no 1-yes
            $table->integer('accepted_user_id'); 
            $table->foreign('id_1')->references('users')->on('id');
            $table->foreign('id_2')->references('users')->on('id');
            $table->timestamps();
        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friendlist');
    }
}
