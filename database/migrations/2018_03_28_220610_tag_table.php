<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tags');

        });
        Schema::create('artwork_tags', function (Blueprint $table) {
            $table->integer('artwork_id')->unsigned();
            $table->integer('tags_id')->unsigned();
            $table->foreign('artwork_id')->references('id')->on('artwork');
            $table->foreign('tags_id')->references('id')->on('tags');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('artwork_tags');
    }
}
