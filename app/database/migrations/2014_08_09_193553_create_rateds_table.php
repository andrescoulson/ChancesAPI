<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRatedsTable extends Migration {

    public function up() {
        Schema::create('rateds', function(Blueprint $table) {
            $table->increments('id');
            $table->string('comments');
            $table->boolean('rate');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('chances_id')->unsigned();
            $table->foreign('chances_id')->references('id')->on('chances')->onDelete('cascade');
            $table->integer('raters_id')->unsigned();
            $table->foreign('raters_id')->references('id')->on('raters');
            $table->timestamps();
        });
    }
    
    public function down() {
        Schema::drop('rateds');
    }

}
