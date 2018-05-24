<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommendReplayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commend_replay', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('commend_id')->unsigned();
            $table->foreign('commend_id')
                ->references('id')->on('commend')
                ->onDelete('cascade');
            $table->string('user_name');
            $table->mediumText('commend_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commend_replay');
    }
}
