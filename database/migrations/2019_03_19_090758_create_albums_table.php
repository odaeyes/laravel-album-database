<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('albumcover');
            $table->unsignedBigInteger('artistid');
            $table->string('albumname');
            $table->string('kind');
            $table->year('productyear');
            $table->unsignedBigInteger('songid');
            $table->timestamps();

            $table->foreign('artistid')->references('id')->on('artists');
            $table->foreign('songid')->references('id')->on('songs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
}
