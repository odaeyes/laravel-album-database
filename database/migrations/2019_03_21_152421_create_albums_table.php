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
            $table->bigIncrements('id');
            $table->string('albumname');
            $table->year('productyear');
            $table->string('kind');
            $table->string('label');
            $table->integer('rank');
            $table->unsignedBigInteger('song');
            $table->string('cover');
            $table->timestamps();

            $table->foreign('song')->references('id')->on('songs');
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
