<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_location', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('movie_id')->unsigned();
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->string('location');
            $table->text('fun_facts');
            $table->string('lat');
            $table->string('lng');
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
        Schema::table('movie_location', function($table)
    {
        $table->dropForeign('movie_location_movie_id_foreign');
    });
    }
}
