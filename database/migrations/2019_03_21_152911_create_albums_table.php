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
            $table->string('cover');
            $table->unsignedBigInteger('artist');
            $table->timestamps();

            $table->foreign('artist')->references('id')->on('artists');        
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
