<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id')->unsigned()->nullable();
            $table->integer('sub_cat_id')->unsigned()->nullable();
            $table->string('title');
            $table->string('medium_title')->nullable();
            $table->mediumText('description');
            $table->mediumText('image');
            $table->integer('seen')->default(0);
            $table->integer('slider')->default(0);
            $table->integer('featured')->default(0);
            $table->integer('commend')->default(0);
            $table->string('author')->nullable();

            $table->timestamps();
        });
        Schema::table('news', function($table) {
            $table->foreign('cat_id')
                ->references('id')
                ->on('category')
                ->onDelete('cascade');
            $table->foreign('sub_cat_id')
                ->references('id')
                ->on('sub_cat')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
